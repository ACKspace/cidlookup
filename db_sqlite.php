<?php
// Needs SQLite3: install using the correct `php --version`
// sudo apt-get install php7.4-sqlite

define( "MYSQL_DB", "freeswitch_cidlookup" );

if ( !class_exists( "SQLite3", TRUE ) )
{
    echo "SQLite ERROR";
    exit;
}

function dbLookup( $_arrNumberInfo )
{
    global $debug;

    if (!$db = new SQLite3( MYSQL_DB.".db" ))
    {
        //if ( !isset( $debug ))
            echo "could not connect to database";
        return false;
    }

    // TODO: close db

    // Partial number full listing
    //$stmt = $db->prepare("SELECT name FROM telephone_names WHERE country_code=:country AND number LIKE ':international%' ORDER BY LENGTH(number), sortorder LIMIT 1");
    //$stmt->bindParam(':country', $_arrNumberInfo['country'], SQLITE3_TEXT);    
    //$stmt->bindParam(':international', $_arrNumberInfo['international'], SQLITE3_TEXT);    
    

    // Full number partial listing (experimental)
    $stmt = $db->prepare("SELECT name FROM telephone_names WHERE country_code=:country AND INSTR( ':international', number ) = 1 ORDER BY LENGTH(number) LIMIT 1");
    if ( !$stmt )
    {
        $db->query("CREATE TABLE telephone_names (name TEXT, country_code TEXT, number TEXT)");
        $stmt = $db->prepare("SELECT name FROM telephone_names WHERE country_code=:country AND INSTR( ':international', number ) = 1 ORDER BY LENGTH(number) LIMIT 1");
        if ( !$stmt )
        {
            echo "table create error";
            return false;
        }
    }
    $stmt->bindParam(':country', $_arrNumberInfo['country'], SQLITE3_TEXT);    
    $stmt->bindParam(':international', $_arrNumberInfo['international'], SQLITE3_TEXT);    

    // Full number full listing
    //$stmt = $db->prepare("SELECT name FROM telephone_names WHERE country_code=:country AND number = ':international' ORDER BY LENGTH(number), sortorder LIMIT 1");
    //$stmt->bindParam(':country', $_arrNumberInfo['country'], SQLITE3_TEXT);    
    //$stmt->bindParam(':international', $_arrNumberInfo['international'], SQLITE3_TEXT);    

    if (!$result = $stmt->execute())
        return false;
    
    $row = $result->fetchArray( SQLITE3_ASSOC );
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
    // TODO
    echo "dbInsert";
    var_dump( $_arrNumberInfo );
    return false;
    
    echo "DB insert";

    if (!$db = new SQLite3( MYSQL_DB.".db" ))
        return false;

    // TODO: close db

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
