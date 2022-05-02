<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_nummerzoeker( $_arrNumberInfo )
{
    // Works with national numbers only; returns (commercial) name
    if ( $_arrNumberInfo['country'] !== 31 )
        return false;

    $strPage = file_get_contents( "http://www.nummerzoeker.com/?color=white&lastname=&str=&hnr=&pc=&pl=&phone={$_arrNumberInfo['national']}&maxrows=10&sort=1&search=Zoeken" );
    
    if ( !preg_match( '/<tr class="c0">\s*<td class="nowrap">.*?<\/td>\s*<td class="nowrap">.*?<\/td>\s*<td>(.*?)<\/td>/si', $strPage, $matches ))
        return false;
    return "(com) ".$matches[1];
    
    /*
    <tr class="c0">
    <td class="nowrap">
    <img align="middle" src="/img/v1/info.gif" onclick="javascript:popup('/infobox.php?id=388253&amp;color=pink', 260, 340);">
    </td>
    <td class="nowrap">0495-533448</td>
    <td>HB Electronica</td>
    <td class="nowrap">Maaspoort 13</td>
    <td class="nowrap">6001BN</td>
    <td class="nowrap">Weert</td>
    <td class="nowrap">
    <a target="_blank" href="/googlemap.php?maptype=hybrid&amp;pcode=6001BN"><img align="middle" src="/img/v1//icon_google.png" border="0" alt="Google Maps Hybride"></a>
    <a target="_blank" href="https://server.db.kvk.nl/TST-BIN/ZS/ZSWWW01@?TAAL=NL++&amp;TYPE=PCHN&amp;AANT=0&amp;AWCD=6001BN&amp;NHVC=13&amp;HIST=N&amp;submit="><img align="middle" src="/img/v1/icon_kvk.gif" border="0" alt="Kamer van Koophandel"></a>
    <a target="_blank" href="http://www.postcodeatlas.nl/deeplink/6001BN/13"><img align="middle" src="/img/nederland.gif" border="0" alt="PostcodeAtlas.nl"></a>
    </td>
    </tr>
    */
}
?>
