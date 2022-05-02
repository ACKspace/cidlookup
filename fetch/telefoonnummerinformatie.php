<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_telefoonnummerinformatie( $_arrNumberInfo )
{
    // Works with national numbers only; returns text score (Zeer Slecht, Slecht, Neutraal, Goed) and optionally name
    if ( $_arrNumberInfo['country'] !== 31 )
        return false;

    $strPage = file_get_contents( "https://en.telefoonnummerinformatie.nl/number/{$_arrNumberInfo['national']}/" );
    
    if ( !preg_match( '/<span class="number-details-simple-data-key">Score<\/span><span style="[^"]*">(.*?)<\/span>.*?(?!<span class="number-details-simple-data-key">Naam<\/span>(.*?)\s*<\/div>)/si', $strPage, $matches ))
        return false;
    return "({$matches[1]}) {$matches[2]}";

    /*
    <div id="number-details-simple">
    <div id="number-details-general">
    Is dit uw telefoonnummer? <a href="/register-wizard/#!/number=">Registreer het nu gratis!</a>
    <br><br>
    Bent u gebeld door dit nummer? <a href="javascript://" id="number-details-discussion-add">Klik hier</a> om gemakkelijk uw ervaring te delen!
    </div>
    <div class="number-details-simple-data" id="number-details-simple-name"><span class="number-details-simple-data-key">Score</span><span style="font-weight: bold;color: #ffa534;">Slecht</span>
    </div>
    <div class="number-details-simple-data" id="number-details-simple-name"><span class="number-details-simple-data-key">Naam</span>Dat Kan Beter!
    </div>
    <div class="number-details-simple-data" id="number-details-simple-phone"><span class="number-details-simple-data-key">Telefoonnummer</span>085 087 2029
    </div>
    <div class="number-details-simple-data" id="number-details-simple-address">
    <span class="number-details-simple-data-key">Adres</span>
    Hamburgerbroeklaan 16
    <br>7005AJ Doetinchem
    </div>
    <div class="number-details-simple-data" id="number-details-simple-email"><span class="number-details-simple-data-key">E-mailadres</span>info@datkanbeter.nl
    </div>
    </div>    
    */
}
?>
