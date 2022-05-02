<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

$debug = getVar( "debug", true );

include( $_SERVER['DOCUMENT_ROOT']."/../cid_config.php" );

if ( getVar( "key", true ) !== CID_API_KEY )
{
    // Delay against brute force
    sleep( 2 );
    die( "UNAUTHORIZED" );
    exit( 0 );
}

define( "COUNTRY", "31" );
define( "REGION", "45" );
define( "PLUS", "00" );

require_once( "numbers.php" );

// Normalize the number
$arrNumberInfo = normalizeNumber( getVar( "number", true ) );

if ( $debug )
{
    var_dump( getVar( "number", true ) );
    var_dump( $arrNumberInfo );
}

// Extension? try and get from dialplan
if ( $arrNumberInfo['type'] == "extension" )
{
    echo getExtension( $arrNumberInfo['local'] );
    exit;
}

require_once( "db_sqlite.php" );

$fetchList = [];
include( "fetch/contacts.php" );                    // personal directory
include( "fetch/nummerzoeker.php" );                // business listings only
include( "fetch/nummerid.php" );                    // name (old database)
include( "fetch/nationaletelefoongids.php" );       // score 0-5
include( "fetch/telefoonnummerinformatie.php" );    // score text
include( "fetch/telenummer.php" );                  // score text (small DB?)
include( "fetch/gebelddoor.php" );                  // score 0-10?
include( "fetch/telefoonboek.php" );                // score 0-10
include( "fetch/wiegebeld.php" );                   // score 0-10
include( "fetch/acm.php" );                         // ported telco (NOTE: unported blocks are in the numbers list)
include( "fetch/telguarder.php" );                  // (slow) score 0-180->0-10
include( "fetch/telefoonnummerzoeken.php" );        // (slow) no score
//include( "fetch/wieheeftmijgebeld.php" );           // no score, spam copy of wieheeftgebeld?
//include( "fetch/wieheeftgebeld.php" );              // no score


// Try and fetch the number from the local database
// TODO: "lease" time on local entries
if ( $strName = dbLookup( $arrNumberInfo ))
{
    echo $strName;
    exit;
}

// Fetch number from website (check last get timestamp to prevent DoS
// put result in DB
$strName = fetchWebsiteResult( $arrNumberInfo );
if ( is_array( $strName ) )
{
    print_r( $strName );
    exit;
}
else if ( $strName )
{
    echo $strName;
    exit;
}

// Nothing on the websites? Try and find the number in the array
if ( isset( $arrNumberInfo['international'] ))
{
    //echo "array";
    $strName = _getInfo( str_split( $arrNumberInfo['international'] ));
    echo $strName;
    exit;
}




/////////////////////////////////////////////////////////////////////
function fetchWebsiteResult( $_arrNumberInfo, $_bAll = false )
{
    global $fetchList, $debug;
    
    $resultList = [];

    foreach ( $fetchList as $value )
    {
        if ( $debug )
            echo $value.": ";

        $result = ($value)($_arrNumberInfo);

        if ( $result )
        {
            if ( $_bAll )
                $resultList[] = $result;
            else
                return $result;
        }
    }

    return $_bAll ? $resultList : false;
}


function getExtension( $_strExtension )
{
    return false;
    return "Ext. ".$_strExtension;
}


function normalizeNumber( $_strNumber )
{
    $arrInfo = array();

    // URI + to space "repair"
    $_strNumber = preg_replace('/^ /', '+', $_strNumber);

    // Remove dashes and whitespace from the number
    $_strNumber = preg_replace('/[\s-]/', '', $_strNumber);

    // Extensions start with 1 or 9    
    if ( preg_match( "/^([19]\d+)/", $_strNumber, $matches ))
    {
        $arrInfo['local'] = $matches[1];
        $arrInfo['type'] = 'extension';
        return $arrInfo;
    }

    // Add region + country on quick dials
    $_strNumber = preg_replace( "/^([2345678])/", COUNTRY.REGION.'$1', $_strNumber );

    // Add country on national dials
    $_strNumber = preg_replace( "/^(0)([^0].*)/", COUNTRY.'$2', $_strNumber );

    // Replace + and 00 international symbols before parsing (include space for URI conversion
    $_strNumber = preg_replace( "/^(\+|00)/", '', $_strNumber );

    $arrInfo['country'] = intval( substr( $_strNumber, 0, 2 ));
    $arrInfo['international'] = $_strNumber;
    $arrInfo['type'] = 'international';

    // National number?
    if ( $arrInfo['country'] == intval( COUNTRY ))
    {
        // only works with countries of 2 digits; replaces it wiht a 0
        $arrInfo['national'] = "0".substr( $_strNumber, 2 );
        $arrInfo['type'] = 'national';
    }

    return $arrInfo;
};



function GetInfo( $_strNumber )
{
    global $arrNumbers;

    //if ( substr( $_strNumber, 1, 1 ) == "+"
    // Add region + country on quick dials
    $_strNumber = preg_replace( "/^([2345678])/", COUNTRY.REGION.'$1', $_strNumber );

    // Add country on national dials
    $_strNumber = preg_replace( "/^(0)([^0].*)/", COUNTRY.'$2', $_strNumber );

    // Replace + and 00 international symbols before parsing
    $_strNumber = preg_replace( "/^(\+|00)/", '', $_strNumber );

    return _getInfo( str_split( $_strNumber ));
};

function _getInfo( $_arrNumber )
{
    global $arrNumbers;

    $arrInfo = array();

    $arrNumberInfo = $arrNumbers;
    $nIndent = 0;
    $strDigits = "";
    $strDetailedInfo = "";
    foreach ( $_arrNumber as $digit )
    {
        if ( isset( $arrNumberInfo[$digit] ) )
        {
            $strDigits .= $digit;
            $arrNumberInfo = $arrNumberInfo[$digit];
            if ( isset( $arrNumberInfo['info'] ) )
            {
                $arrInfo[] = str_repeat( "-", $nIndent ) . $strDigits . " " . $arrNumberInfo['info'];
                $strDigits = "";
                $strDetailedInfo = $arrNumberInfo['info'];
            }
            $nIndent++;
        } else {
            break;
        }
    }

    //print_r( $arrInfo[sizeof($arrInfo)-1] );

    //echo "\n";
    return $strDetailedInfo;

    //echo "<pre>";
    //print_r( $arrNumbers );
    //echo "</pre>";
    //return "asdasdbad";
    
}

////////////////////////////////////////////////////////////////////////////////
// Helpers
////////////////////////////////////////////////////////////////////////////////
function getVar( $_strVarName, $_bAllowGet = false )
{
    if ( isset( $_POST[ $_strVarName ] ) )
    {
        // If _POST var is set, return _POST var
        return $_POST[ $_strVarName ];
    }
    else if ( isset( $_GET[ $_strVarName ] ) && ($_bAllowGet == true) )
    {
        // If _GET var is set and is allowed, return _GET var
        return $_GET[ $_strVarName ];
    }
    else
    {
        // requested var not found: return NULL
        return NULL;
    }
}
?>
