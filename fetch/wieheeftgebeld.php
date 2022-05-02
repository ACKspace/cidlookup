<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_wieheeftgebeld( $_arrNumberInfo )
{
    // No collective rating found; need to iterate the list
    return false;
    
    $strPage = file_get_contents( "https://www.wieheeftgebeld.nl/nummer/{$_arrNumberInfo['international']}" );

    if ( !preg_match( '/<span itemprop="ratingValue">(.*?)<\/span>/si', $strPage, $matches ))
        return false;
    return "({$matches[1]}) {$_arrNumberInfo['international']}";

    /*

    */
}
?>
