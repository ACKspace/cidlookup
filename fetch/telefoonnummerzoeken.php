<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_telefoonnummerzoeken( $_arrNumberInfo )
{
    // No collective rating found; need to iterate the list
    return false;

    // Slow. Works with multiple numbers (Belgian); returns list of scores (gevaarlijk, storend, neutraal, handig)
    $strPage = file_get_contents( "https://www.telefoonnummerzoeken.net/wie-heeft-mij-gebeld/{$_arrNumberInfo['international']}" );

    if ( !preg_match( '/<meta itemprop="ratingValue" content="(.*?)">/si', $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";

    /*
    <meta itemprop="ratingValue" content="1">
    */
}
?>
