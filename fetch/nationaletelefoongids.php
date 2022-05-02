<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_nationaletelefoongids( $_arrNumberInfo )
{
    // Works with international numbers only; score from 0-5
    $strPage = file_get_contents( "https://www.nationaletelefoongids.nl/telefoonnummer-zoeken/{$_arrNumberInfo['international']}/" );

    if ( !preg_match( '/<span class="counter-count" data-value="(.*?)">.*?<\/span>/si', $strPage, $matches ))
        return false;
    $score = round($matches[1] * 2, 1 );
    return "[{$score}] unknown";
    
    /*
    <span class="counter-count" data-value="1.9">0.0</span>    
    */
}
?>
