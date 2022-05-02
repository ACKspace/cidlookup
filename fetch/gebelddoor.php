<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_gebelddoor( $_arrNumberInfo )
{
    // Works with international and national numbers; score from 1-10
    $strPage = file_get_contents( "https://gebelddoor.nl/nummer/{$_arrNumberInfo['international']}" );
    
    if ( !preg_match( '/<div id="cijfer" style="color: .*?">(.*?)<div/si', $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";

    /*
    <div id="cijfer" style="color: #e65700">2,5<div class="stars"><div class="current-rating" style="width: 20%"></div></div> <span>1 ervaring</span></div>
    */
}
?>
