<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_nummerid( $_arrNumberInfo )
{
    // Works with national numbers only; returns (old) name
    if ( $_arrNumberInfo['country'] !== 31 )
        return false;

    $strPage = file_get_contents( "http://www.nummerid.com/result.php?input_telefoon={$_arrNumberInfo['national']}" );
    
    if ( !preg_match( '/<tr class="result_row2">\s*<td class="result_colom" colspan="2">.*?<\/td>\s*<td class="result_colom" colspan="2">\s*(.*?)\s*<\/td>/si', $strPage, $matches ))
        return false;
    return "[old] ".$matches[1];
    
    /*
    <tr class="result_row2">
    <td class="result_colom" colspan="2">
    +31 (0)49 553 34 48                        </td>
    <td class="result_colom" colspan="2">
    HB-Electronica                        </td>
    <td class="result_colom" colspan="2">
    Maaspoort 13                        </td>
    <td class="result_colom" colspan="2">
    6001 BN                        </td>
    <td class="result_colom" colspan="2">
    Weert                        </td>
    <td class="result_colomoptions">&nbsp;
    <a href="http://maps.google.nl/maps?q=Maaspoort+13,+6001BN+Weert" target="_blank"><img src="images/icons/google.png" border="0" alt="Google Maps"></a>
    <a href="http://www.misdaadkaart.nl/6001BN" target="_blank"><img src="images/icons/misdaad.png" border="0" alt="Misdaadkaart"></a>
    <a href="https://server.db.kvk.nl/TST-BIN/ZS/ZSWWW01@?TAAL=NL++&amp;TYPE=PCHN&amp;AANT=0&amp;AWCD=6001BN&amp;NHVC=12&amp;HIST=N" target="_blank"><img src="images/icons/kvk.png" border="0" alt="Kamer van Koophandel"></a>
    </td>
    </tr>
    */
}
?>
