<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_telefoonboek( $_arrNumberInfo )
{
    // Redirects 31, fails to lookup 32 numbers; returns 0-10
    $strPage = file_get_contents( "https://www.telefoonboek.nl/omgekeerd-zoeken/{$_arrNumberInfo['international']}" );
    
    if ( !preg_match( '/<span itemprop="ratingValue">(.*?)<\/span>/si', $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";
    
    /*
    <span itemprop="ratingValue">4</span>

    <div class="experience-label" data-hovershow-target="reliability">Irritant</div>
    */
}
?>
