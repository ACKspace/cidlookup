<?php

define( "MYSQL_DB", "freeswitch_cidlookup" );


if ( !function_exists( "mysql_connect" ))
{
    echo "MySQL ERROR";
    exit;
}


function dbLookup( $_arrNumberInfo )
{
    global $debug;

    if (!$db = mysql_connect( NULL, "freeswitch", "frees!witch" ))
    {
        //if ( !isset( $debug ))
            echo "could not connect to database";
        return false;
    }

    // TODO: close db
    if (!mysql_select_db( MYSQL_DB, $db ))
        return false;

    // Prevent SQL injection on variables
    $country = mysql_real_escape_string( $_arrNumberInfo['country'] );
    $international = mysql_real_escape_string( $_arrNumberInfo['international'] );

    // Partial number full listing
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND number LIKE '".$international."%' ORDER BY LENGTH(number), sortorder LIMIT 1";

    // Full number partial listing (experimental)
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$_arrNumberInfo['country']." AND number LIKE SUBSTR('".$_arrNumberInfo['international']."',0,LENGTH(NUMBER)) ORDER BY LENGTH(number), sortorder LIMIT 1";
    $query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND INSTR( '".$international."', number ) = 1 ORDER BY LENGTH(number), sortorder LIMIT 1";

    // Full number full listing
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND number = '".$international."' ORDER BY LENGTH(number), sortorder LIMIT 1";

    if (!$result = mysql_query( $query, $db ))
        return false;

    $row = mysql_fetch_row( $result );

    mysql_close( $db );

    //print_r( $row );
    //,  );
    //print_r( $_arrNumberInfo );

    return $row[0];
}


function dbInsert( $_arrNumberInfo )
{
/*
international
national
local
type
*/
    echo "DB insert";

    if (!$db = mysql_connect( NULL, "freeswitch", "frees!witch" ))
        return false;

    // TODO: close db
    if (!mysql_select_db( "freeswitch_cidlookup", $db ))
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
    //print_r( $_arrNumberInfo );

    mysql_close( $db );

    return true;
}


?>
