<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_wiegebeld( $_arrNumberInfo )
{
    // Works with international and national numbers; score from 1-10
    $strPage = file_get_contents( "https://wiegebeld.nl/{$_arrNumberInfo['international']}" );
    //echo $strPage;

    if ( !preg_match( '/<meta itemprop="ratingValue" content="(.*?)">/si', $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";
    
    /*
    <meta itemprop="ratingValue" content="1">
    */
}
?>
