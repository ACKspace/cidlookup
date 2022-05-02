<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_acm( $_arrNumberInfo )
{
    // Works with national numbers; returns ported telco

    // Only semi-useful on cellphone numbers
    if ( !preg_match( "/^316.*/", $_arrNumberInfo['international'] ) )
        return false;

    $strPage = file_get_contents( "https://www.acm.nl/nl/onderwerpen/telecommunicatie/telefoonnummers/nummers-doorzoeken/resultaat?query={$_arrNumberInfo['national']}&nrnummervan={$_arrNumberInfo['national']}&nrnummertm={$_arrNumberInfo['national']}&nrvrij=0&nrbestemming=mobiele%20telefonie&portering=1" );

    if ( !preg_match( "/<strong>Huidige aanbieder<\/strong>.*?<p>(.*?)<\/p>/si", $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";

    /*
    */
}
?>
