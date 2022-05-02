<?php
define( "COUNTRY", "31" );
define( "REGION", "45" );
define( "PLUS", "00" );

define( "MYSQL_DB", "freeswitch_cidlookup" );
define( "MYSQL_USER", "username" );
define( "MYSQL_PASS", "password" );

$debug = getVar( "debug", true );

// Normalize the number
$arrNumberInfo = normalizeNumber( getVar( "number", true ) );

// Extension? try and get from dialplan
if ( $arrNumberInfo['type'] == "extension" )
{
    echo getExtension( $arrNumberInfo['local'] );
    exit;
}


if ( !function_exists( "mysql_connect" ))
{
    echo "ERROR";
    exit;
}


// Fetch the number from the database
if ( $strName = dbLookup( $arrNumberInfo ))
{
    echo $strName;
    exit;
}


// Nothing in the database?
// national number starting with 0[1-578]?
// Fetch number from website (check last get timestamp to prevent DoS
// put result in DB
if ( preg_match( "/^0[1-578].*/", $arrNumberInfo['national'] ) && $strName = fetchWebsiteResult( $arrNumberInfo['national'] ))
{
    echo $strName;

    // Add the name to the DB
    $arrNumberInfo['name'] = $strName;
    dbInsert( $arrNumberInfo );
    exit;
}
else if ( preg_match( "/^0[6].*/", $arrNumberInfo['national'] ) && $strName = fetchOptaResult( $arrNumberInfo['national'] ))
{
    // Number porting
    echo $strName;

    // Add the name to the DB, so we don't have to look it up anymore
    $arrNumberInfo['name'] = $strName;
    dbInsert( $arrNumberInfo );
    exit;
}


// Nothing on the website? Try and find the number in the array
if ( isset( $arrNumberInfo['international'] ))
{
    //echo "array";
    $strName = _getInfo( str_split( $arrNumberInfo['international'] ));
    echo $strName;
    exit;
}


/////////////////////////////////////////////////////////////////////
function fetchWebsiteResult( $_strNumber )
{
    if ( $strName = fetch_delefoondetective_nl( $_strNumber ))
        return $strName;

    if ( $strName = fetch_gevonden_cc( $_strNumber ))
        return $strName;

    if ( $strName = fetch_zoekenbel_nl( $_strNumber ))
        return $strName;

    if ( $strName = fetch_nummerzoeker_com( $_strNumber ))
        return $strName;

    if ( $strName = fetch_nummerid_com( $_strNumber ))
        return $strName;

    if ( $strName = fetch_gebeld_nl( $_strNumber ))
        return $strName;

    return false;
}


function fetchOptaResult( $_strNumber )
{
    $strPage = file_get_contents( "http://www.opta.nl/nl/nummers/nummers-zoeken/resultaat/?query=".$_strNumber."&page=1&portering=1" );

    if ( !preg_match( "/<strong>Huidige aanbieder<\/strong>.*?<p>(.*?)<\/p>/si", $strPage, $matches ))
        return false;
    return "(GSM) ".$matches[1];
}


function fetch_delefoondetective_nl( $_strNumber )
{
    $strPage = file_get_contents( "http://www.telefoondetective.nl/telefoonnummer/".$_strNumber."/" );

    if ( !preg_match( "/<div\sid=\"name\"><h\d>(.*?)<\/h\d><\/div>/i", $strPage, $matches ))
        return false;
    return $matches[1];
}


function fetch_gevonden_cc( $_strNumber )
{
    return false;
}


function fetch_zoekenbel_nl( $_strNumber )
{
    // Separate area code? GTFO
    return false;
}


function fetch_nummerzoeker_com( $_strNumber )
{
    return false;
}


function fetch_nummerid_com( $_strNumber )
{
    return false;
}


function fetch_gebeld_nl( $_strNumber )
{
    return false;
}


function dbLookup( $_arrNumberInfo )
{
    global $debug;

    if (!$db = mysql_connect( NULL, MYSQL_USER, MYSQL_PASS ))
    {
        //if ( !isset( $debug ))
            echo "could not connect to database";
        return false;
    }

    // TODO: close db
    if (!mysql_select_db( MYSQL_DB, $db ))
    {
        mysql_close( $db );
        return false;
    }

    // Prevent SQL injection on variables
    $country = mysql_real_escape_string( $_arrNumberInfo['country'] );
    $international = mysql_real_escape_string( $_arrNumberInfo['international'] );

    // Partial number full listing
    $query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND INSTR( '".$international."', number ) = 1 ORDER BY LENGTH(number), sortorder LIMIT 1";

    // Full number full listing
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND number = '".$international."' ORDER BY LENGTH(number), sortorder LIMIT 1";

    if (!$result = mysql_query( $query, $db ))
        return false;

    $row = mysql_fetch_row( $result );

    mysql_close( $db );
    return $row[0];
}


function dbInsert( $_arrNumberInfo )
{
    if (!$db = mysql_connect( NULL, MYSQL_USER, MYSQL_PASS ))
        return false;

    // TODO: close db
    if (!mysql_select_db( MYSQL_DB, $db ))
        return false;

    // Prevent SQL injection on variables
    $country = mysql_real_escape_string( $_arrNumberInfo['country'] );
    $international = mysql_real_escape_string( $_arrNumberInfo['international'] );
    $name = mysql_real_escape_string( $_arrNumberInfo['name'] );

    $query = "INSERT INTO telephone_names (country_code,number,name) VALUES (".$country.",'".$international."','".$name."')";

    if (!$result = mysql_query( $query, $db ))
    {
        echo mysql_error( $db );
        return false;
    }

    mysql_close( $db );

    return true;
}


function getExtension( $_strExtension )
{
    return false;
    return "Ext. ".$_strExtension;
}


function normalizeNumber( $_strNumber )
{
    $arrInfo = array();

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
    $_strNumber = preg_replace( "/^( |\+|00)/", '', $_strNumber );

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

    return $strDetailedInfo;
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

