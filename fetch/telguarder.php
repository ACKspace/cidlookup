<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_telguarder( $_arrNumberInfo )
{
    // Slow. Works with international and national numbers; score from 0-180
    $strPage = file_get_contents( "https://www.telguarder.com/nl/nummer/{$_arrNumberInfo['international']}" );

    //test: https://www.telguarder.com/nl/nummer/0103180380
    if ( !preg_match( '/@keyframes\s+guage-spin\s*{\s*100%\s*{\s*transform:\s*rotate\((\d+)deg\)/si', $strPage, $matches ))
        return false;

    $score = round($matches[1] / 18, 1 );
    return "[{$score}] unknown";

    /*
    @keyframes guage-spin {
    100% {
    transform: rotate(34deg)
    }
    }
    */
}
?>
