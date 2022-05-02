<?php

// List country codes
////////////////////////////////////////////////////////////////////////////////
//http://en.wikipedia.org/wiki/List_of_country_calling_codes
$arrZones = array( 0 => "Unused",
                   1 => "(continent) Noord Amerika", //North American Numbering Plan Area (NANPA)",
                   2 => "(continent) Afrika", //some Atlantic and Indian Ocean islands",
                   3 => "(continent) Europa",
                   4 => "(continent) Europa",
                   5 => "(continent) Mexico, Central/Zuid Amerika",
                   6 => "(continent) Zuidoost Asie en Oceanie",
                   7 => "(continent) Zevende wereld (voormalig Sovjet)",
                   8 => "(continent) Oost Azie en speciale diensten",
                   9 => "(continent) West/Zuid/Centraal Azie",
                    );

// Number dial plan
$arrNumbers[1]['info'] = "(continent) Verenigde Staten";
$arrNumbers[1][3][4][0]['info'] = "U.S. Virgin Islands";
$arrNumbers[1][6][7][0]['info'] = "Northern Mariana Islands";
$arrNumbers[1][6][7][1]['info'] = "Guam";
$arrNumbers[1][6][8][4]['info'] = "American Samoa";
$arrNumbers[1][7][8][7]['info'] = "Puerto Rico";
$arrNumbers[1][9][3][9]['info'] = "Puerto Rico";

// Canada"
//+1 Many, but not all, Caribbean nations: "
$arrNumbers[1][2][4][2]['info'] = "Bahamas";
$arrNumbers[1][2][4][6]['info'] = "Barbados";
$arrNumbers[1][2][6][4]['info'] = "Anguilla";
$arrNumbers[1][2][6][8]['info'] = "Antigua and Barbuda";
$arrNumbers[1][2][8][4]['info'] = "British Virgin Islands";

$arrNumbers[1][4][4][1]['info'] = "Bermuda";
$arrNumbers[1][3][4][5]['info'] = "Cayman Islands";
$arrNumbers[1][7][6][7]['info'] = "Dominica";
$arrNumbers[1][8][0][9]['info'] = "Dominican Republic";
$arrNumbers[1][8][2][9]['info'] = "Dominican Republic";
$arrNumbers[1][8][4][9]['info'] = "Dominican Republic";
$arrNumbers[1][4][7][3]['info'] = "Grenada";
$arrNumbers[1][8][7][6]['info'] = "Jamaica";
$arrNumbers[1][6][6][4]['info'] = "Montserrat";
$arrNumbers[1][8][6][9]['info'] = "Saint Kitts and Nevis";
$arrNumbers[1][7][5][8]['info'] = "Saint Lucia";
$arrNumbers[1][7][8][4]['info'] = "Saint Vincent and the Grenadines";
$arrNumbers[1][7][2][1]['info'] = "Sint Maarten";
$arrNumbers[1][8][6][8]['info'] = "Trinidad and Tobago";
$arrNumbers[1][6][4][9]['info'] = "Turks and Caicos Islands";

$arrNumbers[2]['info'] = "(continent) Afrika";
$arrNumbers[2][0]['info'] = "Egypt";
$arrNumbers[2][1][0]['info'] = "unassigned";
$arrNumbers[2][1][1]['info'] = "unassigned";
$arrNumbers[2][1][2]['info'] = "Morocco";
$arrNumbers[2][1][3]['info'] = "Algeria";
$arrNumbers[2][1][4]['info'] = "unassigned";
$arrNumbers[2][1][5]['info'] = "unassigned";
$arrNumbers[2][1][6]['info'] = "Tunisia";
$arrNumbers[2][1][7]['info'] = "unassigned";
$arrNumbers[2][1][8]['info'] = "Libya";
$arrNumbers[2][1][9]['info'] = "unassigned";
$arrNumbers[2][2][0]['info'] = "Gambia";
$arrNumbers[2][2][1]['info'] = "Senegal";
$arrNumbers[2][2][2]['info'] = "Mauritania";
$arrNumbers[2][2][3]['info'] = "Mali";
$arrNumbers[2][2][4]['info'] = "Guinea";
$arrNumbers[2][2][5]['info'] = "Côte d'Ivoire";
$arrNumbers[2][2][6]['info'] = "Burkina Faso";
$arrNumbers[2][2][7]['info'] = "Niger";
$arrNumbers[2][2][8]['info'] = "Togo";
$arrNumbers[2][2][9]['info'] = "Benin";
$arrNumbers[2][3][0]['info'] = "Mauritius";
$arrNumbers[2][3][1]['info'] = "Liberia";
$arrNumbers[2][3][2]['info'] = "Sierra Leone";
$arrNumbers[2][3][3]['info'] = "Ghana";
$arrNumbers[2][3][4]['info'] = "Nigeria";
$arrNumbers[2][3][5]['info'] = "Chad";
$arrNumbers[2][3][6]['info'] = "Central African Republic";
$arrNumbers[2][3][7]['info'] = "Cameroon";
$arrNumbers[2][3][8]['info'] = "Cape Verde";
$arrNumbers[2][3][9]['info'] = "SÃ£o TomÃ© and PrÃ­ncipe";
$arrNumbers[2][4][0]['info'] = "Equatorial Guinea";
$arrNumbers[2][4][1]['info'] = "Gabon";
$arrNumbers[2][4][2]['info'] = "Republic of the Congo";
$arrNumbers[2][4][3]['info'] = "Democratic Republic of the Congo";
$arrNumbers[2][4][4]['info'] = "Angola";
$arrNumbers[2][4][5]['info'] = "Guinea-Bissau";
$arrNumbers[2][4][6]['info'] = "Diego Garcia";
$arrNumbers[2][4][7]['info'] = "Ascension Island";
$arrNumbers[2][4][8]['info'] = "Seychelles";
$arrNumbers[2][4][9]['info'] = "Sudan";
$arrNumbers[2][5][0]['info'] = "Rwanda";
$arrNumbers[2][5][1]['info'] = "Ethiopia";
$arrNumbers[2][5][2]['info'] = "Somalia";
$arrNumbers[2][5][3]['info'] = "Djibouti";
$arrNumbers[2][5][4]['info'] = "Kenya";
$arrNumbers[2][5][5]['info'] = "Tanzania";
$arrNumbers[2][5][6]['info'] = "Uganda";
$arrNumbers[2][5][7]['info'] = "Burundi";
$arrNumbers[2][5][8]['info'] = "Mozambique";
$arrNumbers[2][5][9]['info'] = "unassigned, was intended for Zanzibar but never implemented - see +255 Tanzania";
$arrNumbers[2][6][0]['info'] = "Zambia";
$arrNumbers[2][6][1]['info'] = "Madagascar";
$arrNumbers[2][6][2]['info'] = "Réunion; also Mayotte (formerly with +269 Comoros)";
$arrNumbers[2][6][3]['info'] = "Zimbabwe";
$arrNumbers[2][6][4]['info'] = "Namibia";
$arrNumbers[2][6][5]['info'] = "Malawi";
$arrNumbers[2][6][6]['info'] = "Lesotho";
$arrNumbers[2][6][7]['info'] = "Botswana";
$arrNumbers[2][6][8]['info'] = "Swaziland";
$arrNumbers[2][6][9]['info'] = "Comoros (Mayotte was here but is now with +262 RÃ©union)";
$arrNumbers[2][7]['info'] = "South Africa";
$arrNumbers[2][8]['info'] = "unassigned"; // [x]
$arrNumbers[2][9][0]['info'] = " Saint Helena, Tristan da Cunha";
$arrNumbers[2][9][1]['info'] = "Eritrea";
$arrNumbers[2][9][2]['info'] = "unassigned";
$arrNumbers[2][9][3]['info'] = "unassigned";
$arrNumbers[2][9][4]['info'] = "unassigned";
$arrNumbers[2][9][5]['info'] = "discontinued (was assigned to San Marino, see +378)";
$arrNumbers[2][9][6]['info'] = "unassigned";
$arrNumbers[2][9][7]['info'] = "Aruba";
$arrNumbers[2][9][8]['info'] = "Faroe Islands";
$arrNumbers[2][9][9]['info'] = "Greenland";


//Zones 3/4 Â Europe
//Originally larger countries, such as the United Kingdom or France, were assigned two-digit codes (to compensate for their usually longer domestic numbers) and small countries, such as Iceland, were assigned three-digit codes; however, since the 1980s, all new assignments have been three-digit regardless of countriesÂ populations.
$arrNumbers[3]['info'] = "(continent) Europa";
$arrNumbers[3][0]['info'] = "Greece";


/*
http://nl.wikipedia.org/wiki/Netnummer
http://nl.wikipedia.org/wiki/Lijst_van_Nederlandse_netnummers
*/
$arrNumbers[3][1]['info'] = "(land) Nederland";

$arrNumbers[3][1][1]['info'] = "(provincies) zuidwest";

$arrNumbers[3][1][1][0]['info'] = "(regio) Rotterdam";

//$arrNumbers[3][1][1][1][0]['info'] = "";
$arrNumbers[3][1][1][1][1]['info'] = "(regio) Zierikzee";
//$arrNumbers[3][1][1][1][2]['info'] = "";
$arrNumbers[3][1][1][1][3]['info'] = "(regio) Goes";
$arrNumbers[3][1][1][1][4]['info'] = "(regio) Hulst";
$arrNumbers[3][1][1][1][5]['info'] = "(regio) Terneuzen";
//$arrNumbers[3][1][1][1][6]['info'] = "";
$arrNumbers[3][1][1][1][7]['info'] = "(regio) Oostburg";
$arrNumbers[3][1][1][1][8]['info'] = "(regio) Middelburg";
//$arrNumbers[3][1][1][1][9]['info'] = "";

//$arrNumbers[3][1][1][2]['info'] = "";

$arrNumbers[3][1][1][3]['info'] = "(regio) Tilburg";
$arrNumbers[3][1][1][4]['info'] = "Testnetnummer van KPN Telecom";

$arrNumbers[3][1][1][5]['info'] = "(regio) Delft";

//$arrNumbers[3][1][1][6][0]['info'] = "";
$arrNumbers[3][1][1][6][1]['info'] = "(regio) Rijen";
$arrNumbers[3][1][1][6][2]['info'] = "(regio) Oosterhout(NB)";
//$arrNumbers[3][1][1][6][3]['info'] = "";
$arrNumbers[3][1][1][6][4]['info'] = "(regio) Bergen op Zoom";
$arrNumbers[3][1][1][6][5]['info'] = "(regio) Roosendaal";
$arrNumbers[3][1][1][6][6]['info'] = "(regio) Tholen";
$arrNumbers[3][1][1][6][7]['info'] = "(regio) Steenbergen(NB)";
$arrNumbers[3][1][1][6][8]['info'] = "(regio) Zevenbergen";
//$arrNumbers[3][1][1][6][9]['info'] = "";

//$arrNumbers[3][1][1][7][0]['info'] = "";
//$arrNumbers[3][1][1][7][1]['info'] = "";
$arrNumbers[3][1][1][7][2]['info'] = "(regio) Alphen aan den Rijn";
//$arrNumbers[3][1][1][7][3]['info'] = "";
$arrNumbers[3][1][1][7][4]['info'] = "(regio) Naaldwijk";
//$arrNumbers[3][1][1][7][5]['info'] = "";
//$arrNumbers[3][1][1][7][6]['info'] = "";
//$arrNumbers[3][1][1][7][7]['info'] = "";
//$arrNumbers[3][1][1][7][8]['info'] = "";
//$arrNumbers[3][1][1][7][9]['info'] = "";

$arrNumbers[3][1][1][8][0]['info'] = "(regio) IJsselsteden";
$arrNumbers[3][1][1][8][1]['info'] = "(regio) Spijkenisse";
$arrNumbers[3][1][1][8][2]['info'] = "(regio) Gouda";
$arrNumbers[3][1][1][8][3]['info'] = "(regio) Gorinchem";
$arrNumbers[3][1][1][8][4]['info'] = "(regio) Sliedrecht";
//$arrNumbers[3][1][1][8][5]['info'] = "";
$arrNumbers[3][1][1][8][6]['info'] = "(regio) Oud Beijerland";
$arrNumbers[3][1][1][8][7]['info'] = "(regio) Middelharnis";
//$arrNumbers[3][1][1][8][8]['info'] = "";
//$arrNumbers[3][1][1][8][9]['info'] = "";

//$arrNumbers[3][1][1][9]['info'] = "";

$arrNumbers[3][1][2]['info'] = "(provincie) Noord-Holland";

$arrNumbers[3][1][2][0]['info'] = "(regio) Amsterdam";
$arrNumbers[3][1][2][0][5][1][3]['info'] = "(bedrijf) IBM Nederland";

//$arrNumbers[3][1][2][1]['info'] = "";

//$arrNumbers[3][1][2][2][0]['info'] = "";
//$arrNumbers[3][1][2][2][1]['info'] = "";
$arrNumbers[3][1][2][2][2]['info'] = "(regio) Den Burg";
$arrNumbers[3][1][2][2][3]['info'] = "(regio) Den Helder";
$arrNumbers[3][1][2][2][4]['info'] = "(regio) Schagen";
//$arrNumbers[3][1][2][2][5]['info'] = "";
$arrNumbers[3][1][2][2][6]['info'] = "(regio) Noord-Scharwoude";
$arrNumbers[3][1][2][2][7]['info'] = "(regio) Middenmeer";
$arrNumbers[3][1][2][2][8]['info'] = "(regio) Enkhuizen";
$arrNumbers[3][1][2][2][9]['info'] = "(regio) Hoorn";

$arrNumbers[3][1][2][3]['info'] = "(regio) Haarlem";

$arrNumbers[3][1][2][4]['info'] = "(regio) Nijmegen";

//$arrNumbers[3][1][2][5][0]['info'] = "";
$arrNumbers[3][1][2][5][1]['info'] = "(regio) Beverwijk";
$arrNumbers[3][1][2][5][2]['info'] = "(regio) Hillegom";
//$arrNumbers[3][1][2][5][3]['info'] = "";
//$arrNumbers[3][1][2][5][4]['info'] = "";
$arrNumbers[3][1][2][5][5]['info'] = "(regio) IJmuiden";
//$arrNumbers[3][1][2][5][6]['info'] = "";
//$arrNumbers[3][1][2][5][7]['info'] = "";
//$arrNumbers[3][1][2][5][8]['info'] = "";
//$arrNumbers[3][1][2][5][9]['info'] = "";

$arrNumbers[3][1][2][6]['info'] = "(regio) Arnhem";

//$arrNumbers[3][1][2][7]['info'] = "";

//$arrNumbers[3][1][2][8]['info'] = "";

//$arrNumbers[3][1][2][9][0]['info'] = "";
//$arrNumbers[3][1][2][9][1]['info'] = "";
//$arrNumbers[3][1][2][9][2]['info'] = "";
//$arrNumbers[3][1][2][9][3]['info'] = "";
$arrNumbers[3][1][2][9][4]['info'] = "(regio) Weesp";
//$arrNumbers[3][1][2][9][5]['info'] = "";
//$arrNumbers[3][1][2][9][6]['info'] = "";
$arrNumbers[3][1][2][9][7]['info'] = "(regio) Uithoorn";
//$arrNumbers[3][1][2][9][8]['info'] = "";
$arrNumbers[3][1][2][9][9]['info'] = "(regio) Purmerend";

$arrNumbers[3][1][3]['info'] = "(provincie) Utrecht";
$arrNumbers[3][1][3][0]['info'] = "(regio) Utrecht";

//$arrNumbers[3][1][3][1][0]['info'] = "";
//$arrNumbers[3][1][3][1][1]['info'] = "";
//$arrNumbers[3][1][3][1][2]['info'] = "";
$arrNumbers[3][1][3][1][3]['info'] = "(regio) Dieren";
$arrNumbers[3][1][3][1][4]['info'] = "(regio) Doetinchem";
$arrNumbers[3][1][3][1][5]['info'] = "(regio) Terborg";
$arrNumbers[3][1][3][1][6]['info'] = "(regio) Zevenaar";
$arrNumbers[3][1][3][1][7]['info'] = "(regio) Wageningen";
$arrNumbers[3][1][3][1][8]['info'] = "(regio) Ede";
//$arrNumbers[3][1][3][1][8][7][7][8][7]['info'] = "Fontys Hogescholen doorkiesnummer";
//$arrNumbers[3][1][3][1][9]['info'] = "";

$arrNumbers[3][1][3][2][0]['info'] = "(regio) Lelystad";
$arrNumbers[3][1][3][2][1]['info'] = "(regio) Dronten";
//$arrNumbers[3][1][3][2][2]['info'] = "";
//$arrNumbers[3][1][3][2][3]['info'] = "";
//$arrNumbers[3][1][3][2][4]['info'] = "";
//$arrNumbers[3][1][3][2][5]['info'] = "";
//$arrNumbers[3][1][3][2][6]['info'] = "";
//$arrNumbers[3][1][3][2][7]['info'] = "";
//$arrNumbers[3][1][3][2][8]['info'] = "";
//$arrNumbers[3][1][3][2][9]['info'] = "";

$arrNumbers[3][1][3][3]['info'] = "Amersfoort";

//$arrNumbers[3][1][3][4][0]['info'] = "";
$arrNumbers[3][1][3][4][1]['info'] = "(regio) Harderwijk";
$arrNumbers[3][1][3][4][2]['info'] = "(regio) Barneveld";
$arrNumbers[3][1][3][4][3]['info'] = "(regio) Doorn";
$arrNumbers[3][1][3][4][4]['info'] = "(regio) Tiel";
$arrNumbers[3][1][3][4][5]['info'] = "(regio) Culemborg";
$arrNumbers[3][1][3][4][6]['info'] = "(regio) Maarssen";
$arrNumbers[3][1][3][4][7]['info'] = "(regio) Vianen";
$arrNumbers[3][1][3][4][8]['info'] = "(regio) Woerden";
//$arrNumbers[3][1][3][4][9]['info'] = "";

$arrNumbers[3][1][3][5]['info'] = "(regio) Hilversum";
$arrNumbers[3][1][3][6]['info'] = "(regio) Almere";
//$arrNumbers[3][1][3][7]['info'] = "";
$arrNumbers[3][1][3][8]['info'] = "(regio) Zwolle";
//$arrNumbers[3][1][3][9]['info'] = "";
$arrNumbers[3][1][4]['info'] = "(provincies) Oostelijk Noord-Brabant, Limburg";
$arrNumbers[3][1][4][0]['info'] = "(regio) Eindhoven";
//$arrNumbers[3][1][4][1][0]['info'] = "";
$arrNumbers[3][1][4][1][1]['info'] = "(regio) Boxtel";
$arrNumbers[3][1][4][1][2]['info'] = "(regio) Oss";
$arrNumbers[3][1][4][1][3]['info'] = "(regio) Veghel";
//$arrNumbers[3][1][4][1][4]['info'] = "";
//$arrNumbers[3][1][4][1][5]['info'] = "";
$arrNumbers[3][1][4][1][6]['info'] = "(regio) Waalwijk";
//$arrNumbers[3][1][4][1][7]['info'] = "";
$arrNumbers[3][1][4][1][8]['info'] = "(regio) Zaltbommel";
//$arrNumbers[3][1][4][1][9]['info'] = "";

//$arrNumbers[3][1][4][2]['info'] = "";

$arrNumbers[3][1][4][3]['info'] = "(regio) Maastricht";

//$arrNumbers[3][1][4][4]['info'] = "";

$arrNumbers[3][1][4][5]['info'] = "(regio) Heerlen";

$arrNumbers[3][1][4][6]['info'] = "(regio) Sittard";

//$arrNumbers[3][1][4][7][0]['info'] = "";
//$arrNumbers[3][1][4][7][1]['info'] = "";
//$arrNumbers[3][1][4][7][2]['info'] = "";
//$arrNumbers[3][1][4][7][3]['info'] = "";
//$arrNumbers[3][1][4][7][4]['info'] = "";
$arrNumbers[3][1][4][7][5]['info'] = "(regio) Roermond";
//$arrNumbers[3][1][4][7][6]['info'] = "";
//$arrNumbers[3][1][4][7][7]['info'] = "";
$arrNumbers[3][1][4][7][8]['info'] = "(regio) Venray";
//$arrNumbers[3][1][4][7][9]['info'] = "";

//$arrNumbers[3][1][4][8][0]['info'] = "";
$arrNumbers[3][1][4][8][1]['info'] = "(regio) Bemmel";
//$arrNumbers[3][1][4][8][2]['info'] = "";
//$arrNumbers[3][1][4][8][3]['info'] = "";
//$arrNumbers[3][1][4][8][4]['info'] = "";
$arrNumbers[3][1][4][8][5]['info'] = "(regio) Cuijk";
$arrNumbers[3][1][4][8][6]['info'] = "(regio) Grave";
$arrNumbers[3][1][4][8][7]['info'] = "(regio) Druten";
$arrNumbers[3][1][4][8][8]['info'] = "(regio) Zetten";
//$arrNumbers[3][1][4][8][9]['info'] = "";

//$arrNumbers[3][1][4][9][0]['info'] = "";
//$arrNumbers[3][1][4][9][1]['info'] = "";
$arrNumbers[3][1][4][9][2]['info'] = "(regio) Helmond";
$arrNumbers[3][1][4][9][3]['info'] = "(regio) Deurne";
//$arrNumbers[3][1][4][9][4]['info'] = "";
$arrNumbers[3][1][4][9][5]['info'] = "(regio) Weert";
//$arrNumbers[3][1][4][9][6]['info'] = "";
$arrNumbers[3][1][4][9][7]['info'] = "(regio) Eersel";
//$arrNumbers[3][1][4][9][8]['info'] = "";
$arrNumbers[3][1][4][9][9]['info'] = "(regio) Best";

$arrNumbers[3][1][5]['info'] = "(provincies) Gelderland, Overijssel, Drenthe, Groningen, Friesland";
$arrNumbers[3][1][5][0]['info'] = "(regio) Groningen";

//$arrNumbers[3][1][5][1][0]['info'] = "";
$arrNumbers[3][1][5][1][1]['info'] = "(regio) Veenwouden";
$arrNumbers[3][1][5][1][2]['info'] = "(regio) Drachten";
$arrNumbers[3][1][5][1][3]['info'] = "(regio) Heerenveen";
$arrNumbers[3][1][5][1][4]['info'] = "(regio) Balk";
$arrNumbers[3][1][5][1][5]['info'] = "(regio) Sneek";
$arrNumbers[3][1][5][1][6]['info'] = "(regio) Oosterwolde";
$arrNumbers[3][1][5][1][7]['info'] = "(regio) Franeker";
$arrNumbers[3][1][5][1][8]['info'] = "(regio) Sint Annaparochie";
$arrNumbers[3][1][5][1][9]['info'] = "(regio) Dokkum";
//$arrNumbers[3][1][5][2][0]['info'] = "";
$arrNumbers[3][1][5][2][1]['info'] = "(regio) Steenwijk";
$arrNumbers[3][1][5][2][2]['info'] = "(regio) Meppel";
$arrNumbers[3][1][5][2][3]['info'] = "(regio) Dedemsvaart";
$arrNumbers[3][1][5][2][4]['info'] = "(regio) Coevorden";
$arrNumbers[3][1][5][2][5]['info'] = "(regio) Elburg";
//$arrNumbers[3][1][5][2][6]['info'] = "";
$arrNumbers[3][1][5][2][7]['info'] = "(regio) Emmeloord";
$arrNumbers[3][1][5][2][8]['info'] = "(regio) Hoogeveen";
$arrNumbers[3][1][5][2][9]['info'] = "(regio) Ommen";

$arrNumbers[3][1][5][3]['info'] = "";

//$arrNumbers[3][1][5][4][0]['info'] = "";
$arrNumbers[3][1][5][4][1]['info'] = "(regio) Oldenzaal";
//$arrNumbers[3][1][5][4][2]['info'] = "";
$arrNumbers[3][1][5][4][3]['info'] = "(regio) Winterswijk";
$arrNumbers[3][1][5][4][4]['info'] = "(regio) Groenlo";
$arrNumbers[3][1][5][4][5]['info'] = "(regio) Neede";
$arrNumbers[3][1][5][4][6]['info'] = "(regio) Almelo";
$arrNumbers[3][1][5][4][7]['info'] = "(regio) Goor";
$arrNumbers[3][1][5][4][8]['info'] = "(regio) Rijssen";
//$arrNumbers[3][1][5][4][9]['info'] = "";

$arrNumbers[3][1][5][5]['info'] = "(regio) Apeldoorn";

//$arrNumbers[3][1][5][6][0]['info'] = "";
$arrNumbers[3][1][5][6][1]['info'] = "(regio) Wolvega";
$arrNumbers[3][1][5][6][2]['info'] = "(regio) Terschelling/Vlieland";
//$arrNumbers[3][1][5][6][3]['info'] = "";
//$arrNumbers[3][1][5][6][4]['info'] = "";
//$arrNumbers[3][1][5][6][5]['info'] = "";
$arrNumbers[3][1][5][6][6]['info'] = "(regio) Jirnsum";
//$arrNumbers[3][1][5][6][7]['info'] = "";
//$arrNumbers[3][1][5][6][8]['info'] = "";
//$arrNumbers[3][1][5][6][9]['info'] = "";

$arrNumbers[3][1][5][7][0]['info'] = "(regio) Deventer";
$arrNumbers[3][1][5][7][1]['info'] = "(regio) Twello";
$arrNumbers[3][1][5][7][2]['info'] = "(regio) Raalte";
$arrNumbers[3][1][5][7][3]['info'] = "(regio) Lochem";
//$arrNumbers[3][1][5][7][4]['info'] = "";
$arrNumbers[3][1][5][7][5]['info'] = "(regio) Zutphen";
//$arrNumbers[3][1][5][7][6]['info'] = "";
$arrNumbers[3][1][5][7][7]['info'] = "(regio) Uddel";
$arrNumbers[3][1][5][7][8]['info'] = "(regio) Epe";
//$arrNumbers[3][1][5][7][9]['info'] = "";

$arrNumbers[3][1][5][8]['info'] = "(regio) Leeuwarden";

//$arrNumbers[3][1][5][9][0]['info'] = "";
$arrNumbers[3][1][5][9][1]['info'] = "(regio) Emmen";
$arrNumbers[3][1][5][9][2]['info'] = "(regio) Assen";
$arrNumbers[3][1][5][9][3]['info'] = "(regio) Beilen";
$arrNumbers[3][1][5][9][4]['info'] = "(regio) Zuidhorn";
$arrNumbers[3][1][5][9][5]['info'] = "(regio) Warffum";
$arrNumbers[3][1][5][9][6]['info'] = "(regio) Appingedam";
$arrNumbers[3][1][5][9][7]['info'] = "(regio) Winschoten";
$arrNumbers[3][1][5][9][8]['info'] = "(regio) Hoogezand";
$arrNumbers[3][1][5][9][9]['info'] = "(regio) Stadskanaal";

$arrNumbers[3][1][6]['info'] = "Mobiele nummers en Semafoondiensten";

//$arrNumbers[3][1][6][0]['info'] = "";
$arrNumbers[3][1][6][1]['info'] = "Mobiele telefoon";
$arrNumbers[3][1][6][1][0]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][1][1]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][1][2]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][1][3]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][1][4]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][1][5]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][1][6]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][1][7]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][1][8]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][1][9]['info'] = "(GSM) Telfort";

$arrNumbers[3][1][6][2]['info'] = "Mobiele telefoon";

$arrNumbers[3][1][6][2][0]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][2][1]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][2][2]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][2][3]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][2][4]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][2][5]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][2][6]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][2][7]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][2][8]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][2][9]['info'] = "(GSM) Vodafone";

$arrNumbers[3][1][6][3]['info'] = "Mobiele telefoon";
$arrNumbers[3][1][6][3][0]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][3][1]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][3][2][0]['info'] = "(GSM) Elephant Talk Communications";
$arrNumbers[3][1][6][3][2][1]['info'] = "(GSM) Elephant Talk Communications";
$arrNumbers[3][1][6][3][2][2]['info'] = "(GSM) Elephant Talk Communications";
$arrNumbers[3][1][6][3][3]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][3][4]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][3][5][0]['info'] = "(GSM) Unify Group Holding";
$arrNumbers[3][1][6][3][5][1]['info'] = "(GSM) Intercity Mobile Communications";
$arrNumbers[3][1][6][3][5][9]['info'] = "(GSM) ASpider Solutions";
$arrNumbers[3][1][6][3][6][0]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][6][1]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][6][2]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][6][3]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][6][4]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][6][5]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][3][7][0]['info'] = "(GSM) Teleena Holding";
$arrNumbers[3][1][6][3][7][1]['info'] = "(GSM) Teleena Holding";
$arrNumbers[3][1][6][3][7][2]['info'] = "(GSM) Teleena Holding";
$arrNumbers[3][1][6][3][7][3]['info'] = "(GSM) Teleena Holding";
$arrNumbers[3][1][6][3][8]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][3][9]['info'] = "(GSM) T-Mobile";

$arrNumbers[3][1][6][4]['info'] = "Mobiele telefoon";
$arrNumbers[3][1][6][4][0]['info'] = "(GSM) Tele2";
$arrNumbers[3][1][6][4][1]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][4][2]['info'] = "(GSM) T-mobile";
$arrNumbers[3][1][6][4][3]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][4][4]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][4][5]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][4][6]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][4][7]['info'] = "(GSM) Telfort";
$arrNumbers[3][1][6][4][8]['info'] = "(GSM) T-Mobile";
$arrNumbers[3][1][6][4][9]['info'] = "(GSM) Telfort";

$arrNumbers[3][1][6][5]['info'] = "Mobiele telefoon";
$arrNumbers[3][1][6][5][0]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][5][1]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][5][2]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][5][3]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][5][4]['info'] = "(GSM) Vodafone";
$arrNumbers[3][1][6][5][5]['info'] = "(GSM) Vodafone";
//$arrNumbers[3][1][6][5][6]['info'] = "(GSM) ";
$arrNumbers[3][1][6][5][7]['info'] = "(GSM) KPN";
$arrNumbers[3][1][6][5][8][0]['info'] = "(GSM) Private Mobility";
$arrNumbers[3][1][6][5][8][7]['info'] = "(GSM) 6GMOBILE";
$arrNumbers[3][1][6][5][8][8]['info'] = "(GSM) 6GMOBILE";
$arrNumbers[3][1][6][5][8][9]['info'] = "(GSM) 6GMOBILE";
$arrNumbers[3][1][6][5][9][0]['info'] = "(GSM) Mundio Mobile";
$arrNumbers[3][1][6][5][9][1]['info'] = "(GSM) Mundio Mobile";
$arrNumbers[3][1][6][5][9][2]['info'] = "(GSM) Mundio Mobile";
$arrNumbers[3][1][6][5][9][3]['info'] = "(GSM) Mundio Mobile";
$arrNumbers[3][1][6][5][9][4]['info'] = "(GSM) Mundio Mobile";
$arrNumbers[3][1][6][5][9][5]['info'] = "(GSM) Mundio Mobile";

$arrNumbers[3][1][6][6]['info'] = "(type) Semafonie";

/*
De nummers hebben 6 cijfers behalve de nummers die beginnen met 067-281, 067-284 en 067-364
welke uit 10 cijfers bestaan.
*/
$arrNumbers[3][1][6][7][0]['info'] = "(type) Videotex/datadiensten";
$arrNumbers[3][1][6][7][1]['info'] = "(type) Videotex/datadiensten";
$arrNumbers[3][1][6][7][2]['info'] = "(type) Videotex/datadiensten";
//067281 -> 10 digits
//067284 -> 10 digits
$arrNumbers[3][1][6][7][3]['info'] = "(type) Videotex/datadiensten";
//067364 -> 10 digits
$arrNumbers[3][1][6][7][4]['info'] = "(type) Videotex/datadiensten";
$arrNumbers[3][1][6][7][5]['info'] = "(type) Videotex/datadiensten";

$arrNumbers[3][1][6][7][6][0]['info'] = "(type) INTERNETZ!!1";
//$arrNumbers[3][1][6][7][6][1]['info'] = "";
//$arrNumbers[3][1][6][7][6][2]['info'] = "";
//$arrNumbers[3][1][6][7][6][3]['info'] = "";
//$arrNumbers[3][1][6][7][6][4]['info'] = "";
//$arrNumbers[3][1][6][7][6][5]['info'] = "";
//$arrNumbers[3][1][6][7][6][6]['info'] = "";
//$arrNumbers[3][1][6][7][6][7]['info'] = "";
//$arrNumbers[3][1][6][7][6][8]['info'] = "";
//$arrNumbers[3][1][6][7][6][9]['info'] = "";

//$arrNumbers[3][1][6][7][0]['info'] = "";
//$arrNumbers[3][1][6][7][1]['info'] = "";
//$arrNumbers[3][1][6][7][2]['info'] = "";
//$arrNumbers[3][1][6][7][3]['info'] = "";
//$arrNumbers[3][1][6][7][4]['info'] = "";
//$arrNumbers[3][1][6][7][5]['info'] = "";
//$arrNumbers[3][1][6][7][6]['info'] = "";
$arrNumbers[3][1][6][7][7]['info'] = "(type) Videotex/datadiensten";
$arrNumbers[3][1][6][7][8]['info'] = "(type) Videotex/datadiensten";
$arrNumbers[3][1][6][7][9]['info'] = "(type) Videotex/datadiensten";

$arrNumbers[3][1][6][8]['info'] = "Mobiele telefonie (disabled)";
//$arrNumbers[3][1][6][9]['info'] = "";


$arrNumbers[3][1][7]['info'] = "(provincie) ZW Overijssel";

$arrNumbers[3][1][7][0]['info'] = "(regio) 's-Gravenhage";
$arrNumbers[3][1][7][1]['info'] = "(regio) Leiden";
$arrNumbers[3][1][7][2]['info'] = "(regio) Alkmaar";
$arrNumbers[3][1][7][3]['info'] = "(regio) 's-Hertogenbosch";
$arrNumbers[3][1][7][4]['info'] = "(regio) Hengelo";
$arrNumbers[3][1][7][5]['info'] = "(regio) Zaanstad";
$arrNumbers[3][1][7][6]['info'] = "(regio) Breda";
$arrNumbers[3][1][7][7]['info'] = "(regio) Venlo";
$arrNumbers[3][1][7][8]['info'] = "(regio) Dordrecht";
$arrNumbers[3][1][7][9]['info'] = "(regio) Zoetermeer";

//$arrNumbers[3][1][8]['info'] = "Betuwe"; // Old numbering?

$arrNumbers[3][1][8][0][0]['info'] = "(type) Gratis informatienummer";

$arrNumbers[3][1][8][2]['info'] = "(type) Virtual private network";
//$arrNumbers[3][1][8][3]['info'] = "";
$arrNumbers[3][1][8][4]['info'] = "(type) Pers.ass.(voicemail/faxmail)";
//$arrNumbers[3][1][8][4]['info'] = "Persoonlijke assistentdiensten, voor zowel vaste als mobiele toepassingen, met uitsluiting van: diensten van erotische, seksuele of pornografische aard of die daar (in)direct naar verwijzen; diensten waarvan het hoofddoel is om de duur van het gesprek te verlengen; amusementsdiensten; doorschakelen naar voornoemde diensten.";

$arrNumbers[3][1][8][5]['info'] = "(type) Plaatsonafhankelijk/VoIP";
$arrNumbers[3][1][8][5][8][7]['info'] = "(VoIP) XS4ALL";

//$arrNumbers[3][1][8][6]['info'] = "(reserved)";
$arrNumbers[3][1][8][7]['info'] = "(type) Pers.ass.(voicemail/faxmail)";
$arrNumbers[3][1][8][8]['info'] = "(type) Bedrijfsnummer";

$arrNumbers[3][1][9][0][0]['info'] = "(type) Betaalde informatienummers";// (niet erotisch, seksueel of pornografisch van aard; niet gespreksverlengend)";
$arrNumbers[3][1][9][0][6]['info'] = "(type) Betaalde informatienummers";// (geen beperkingen, veelal erotisch)";
$arrNumbers[3][1][9][0][6]['info'] = "(type) Betaalde informatienummers";// (zelfde beperkingen als bij 0900, veelal amusement)";

$arrNumbers[3][1][9][1]['info'] = "(type) Plaatsonafhankelijk netnummer (HQ)"; //video

//http://nl.wikipedia.org/wiki/Lijst_van_Belgische_zonenummers
$arrNumbers[3][2]['info'] = "Belgium";

$arrNumbers[3][2][1][0]['info'] = "Waver";
$arrNumbers[3][2][1][1]['info'] = "Hasselt";
$arrNumbers[3][2][1][2]['info'] = "012 Tongeren";
$arrNumbers[3][2][1][3]['info'] = "013 Diest";
$arrNumbers[3][2][1][4]['info'] = "014 Herentals";
$arrNumbers[3][2][1][5]['info'] = "015 Mechelen";
$arrNumbers[3][2][1][6]['info'] = "016 Leuven";
$arrNumbers[3][2][1][7]['info'] = "(deprecated) Mobiele telefonie van de tweede generatie";
//$arrNumbers[3][2][1][8]['info'] = "";
$arrNumbers[3][2][1][9]['info'] = "019 Borgworm";

$arrNumbers[3][2][2]['info'] = "02 Brussel";

$arrNumbers[3][2][3]['info'] = "03 Antwerpen";

$arrNumbers[3][2][4]['info'] = "04 Luik, Voeren";

//$arrNumbers[3][2][4][5][0]['info'] = "";
$arrNumbers[3][2][4][5][1]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][2]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][3]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][4]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][5]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][6]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][7]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][8]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";
$arrNumbers[3][2][4][5][9]['info'] = "(deprecated) Semafonie (tot 30 juni 2006)";

//$arrNumbers[3][2][4][6][0]['info'] = "";
$arrNumbers[3][2][4][6][1]['info'] = "GSM-R (NMBS)";
//$arrNumbers[3][2][4][6][2]['info'] = "";
//$arrNumbers[3][2][4][6][3]['info'] = "";
//$arrNumbers[3][2][4][6][4]['info'] = "";
//$arrNumbers[3][2][4][6][5]['info'] = "";
//$arrNumbers[3][2][4][6][6]['info'] = "";
//$arrNumbers[3][2][4][6][7]['info'] = "";
//$arrNumbers[3][2][4][6][8]['info'] = "";
//$arrNumbers[3][2][4][6][9]['info'] = "";

$arrNumbers[3][2][4][7][0]['info'] = "Proximus";
$arrNumbers[3][2][4][7][1]['info'] = "Proximus";
$arrNumbers[3][2][4][7][2]['info'] = "Proximus";
$arrNumbers[3][2][4][7][3]['info'] = "Proximus";
$arrNumbers[3][2][4][7][4]['info'] = "Proximus";
$arrNumbers[3][2][4][7][5]['info'] = "Proximus";
$arrNumbers[3][2][4][7][6]['info'] = "Proximus";
$arrNumbers[3][2][4][7][7]['info'] = "Proximus";
$arrNumbers[3][2][4][7][8]['info'] = "Proximus";
$arrNumbers[3][2][4][7][9]['info'] = "Proximus";

//$arrNumbers[3][2][4][8][0]['info'] = "";
//$arrNumbers[3][2][4][8][1]['info'] = "";
//$arrNumbers[3][2][4][8][2]['info'] = "";
//$arrNumbers[3][2][4][8][3]['info'] = "";
$arrNumbers[3][2][4][8][4]['info'] = "BASE"; // 0484-0488 BASE
$arrNumbers[3][2][4][8][5]['info'] = "BASE";
$arrNumbers[3][2][4][8][6]['info'] = "BASE";
$arrNumbers[3][2][4][8][7]['info'] = "BASE";
$arrNumbers[3][2][4][8][8]['info'] = "BASE";
//$arrNumbers[3][2][4][8][9]['info'] = "";

//$arrNumbers[3][2][4][9][0]['info'] = "";
//$arrNumbers[3][2][4][9][1]['info'] = "";
//$arrNumbers[3][2][4][9][2]['info'] = "";
//$arrNumbers[3][2][4][9][3]['info'] = "";
$arrNumbers[3][2][4][9][4]['info'] = "Mobistar";
$arrNumbers[3][2][4][9][5]['info'] = "Mobistar";
$arrNumbers[3][2][4][9][6]['info'] = "Mobistar";
$arrNumbers[3][2][4][9][7]['info'] = "Mobistar";
$arrNumbers[3][2][4][9][8]['info'] = "Mobistar";
$arrNumbers[3][2][4][9][9]['info'] = "Mobistar";

$arrNumbers[3][2][5][0]['info'] = "050 Brugge";
$arrNumbers[3][2][5][1]['info'] = "051 Roeselare";
$arrNumbers[3][2][5][2]['info'] = "052 Dendermonde";
$arrNumbers[3][2][5][3]['info'] = "053 Aalst";
$arrNumbers[3][2][5][4]['info'] = "054 Ninove";
$arrNumbers[3][2][5][5]['info'] = "055 Ronse";
$arrNumbers[3][2][5][6]['info'] = "056 Kortrijk, Komen-Waasten";
$arrNumbers[3][2][5][7]['info'] = "057 Ieper";
$arrNumbers[3][2][5][8]['info'] = "058 Veurne";
$arrNumbers[3][2][5][9]['info'] = "059 Oostende";

$arrNumbers[3][2][6][0]['info'] = "060 Chimay";
$arrNumbers[3][2][6][1]['info'] = "061 Libramont-Chevigny";
$arrNumbers[3][2][6][2]['info'] = "(deprecated) Bastenaken (nu in zone 061)";
$arrNumbers[3][2][6][3]['info'] = "063 Aarlen";
$arrNumbers[3][2][6][4]['info'] = "064 La LouviÃšre";
$arrNumbers[3][2][6][5]['info'] = "065 Bergen";
//$arrNumbers[3][2][6][6]['info'] = "";
$arrNumbers[3][2][6][7]['info'] = "067 Nijvel";
$arrNumbers[3][2][6][8]['info'] = "068 Aat";
$arrNumbers[3][2][6][9]['info'] = "069 Doornik";

$arrNumbers[3][2][7][0]['info'] = "Diensten, informatie en wedstrijden, 0,087-0,174 euro/min";
$arrNumbers[3][2][7][1]['info'] = "071 Charleroi";
//$arrNumbers[3][2][7][2]['info'] = "";
//$arrNumbers[3][2][7][3]['info'] = "";
//$arrNumbers[3][2][7][4]['info'] = "";
$arrNumbers[3][2][7][5]['info'] = "(deprecated) Proximus (is nu 0475)";
//$arrNumbers[3][2][7][6]['info'] = "";
$arrNumbers[3][2][7][7]['info'] = "Dating, adult/erotiek, 0,45 euro/min";
$arrNumbers[3][2][7][8]['info'] = "Diensten, informatie en wedstrijden, 0,025-0,05 euro/min";
//$arrNumbers[3][2][7][9]['info'] = "";

$arrNumbers[3][2][8][0]['info'] = "080 Stavelot";
$arrNumbers[3][2][8][0][0]['info'] = "Diensten, informatie en wedstrijden, gratis";
$arrNumbers[3][2][8][1]['info'] = "081 Namen";
$arrNumbers[3][2][8][2]['info'] = "082 Dinant";
$arrNumbers[3][2][8][3]['info'] = "083 Ciney";
$arrNumbers[3][2][8][4]['info'] = "084 Marche-en-Famenne";
$arrNumbers[3][2][8][5]['info'] = "085 Hoei";
$arrNumbers[3][2][8][6]['info'] = "086 Durbuy";
$arrNumbers[3][2][8][7]['info'] = "087 Verviers";
//$arrNumbers[3][2][8][8]['info'] = "";
$arrNumbers[3][2][8][9]['info'] = "089 Genk";
/*
*/
$arrNumbers[3][2][9]['info'] = "09 Gent";
$arrNumbers[3][2][9][0][0]['info'] = "Wedstrijden, 0,45 euro/min";
//$arrNumbers[3][2][9][0][1]['info'] = "";
$arrNumbers[3][2][9][0][2]['info'] = "Zakelijke toepassingen, 0,74 euro/min";
$arrNumbers[3][2][9][0][3]['info'] = "Wedstrijden, productbestelling, dating, adult/erotiek, 1,12 euro/min";
$arrNumbers[3][2][9][0][4]['info'] = "";
$arrNumbers[3][2][9][0][5]['info'] = "Wedstrijden, 0,25, 0,50 of 1,00 euro/gesprek";
$arrNumbers[3][2][9][0][6]['info'] = "";
$arrNumbers[3][2][9][0][7]['info'] = "";
$arrNumbers[3][2][9][0][8]['info'] = "";
$arrNumbers[3][2][9][0][9]['info'] = "Productbestellingen, 0,25-24,79 euro/gesprek";

//$arrNumbers[3][2][9][1]['info'] = "(deprecated) Gent (is nu 09)";

$arrNumbers[3][2][9][5]['info'] = "(deprecated) Mobistar (is nu 0495)";



$arrNumbers[3][3]['info'] = "France";
$arrNumbers[3][4]['info'] = "Spain";
$arrNumbers[3][5][0]['info'] = "Gibraltar";
$arrNumbers[3][5][1]['info'] = "Portugal";
$arrNumbers[3][5][2]['info'] = "Luxembourg";
$arrNumbers[3][5][3]['info'] = "Ireland";
$arrNumbers[3][5][4]['info'] = "Iceland";
$arrNumbers[3][5][5]['info'] = "Albania";
$arrNumbers[3][5][6]['info'] = "Malta";
$arrNumbers[3][5][7]['info'] = "Cyprus";
$arrNumbers[3][5][8]['info'] = "Finland";
$arrNumbers[3][5][9]['info'] = "Bulgaria";
$arrNumbers[3][6]['info'] = "Hungary";
$arrNumbers[3][7]['info']= "discontinued (was assigned to the German Democratic Republic (East Germany) until April 1992; this area is now covered by Germany's country code +49)";
$arrNumbers[3][7][0]['info'] = "Lithuania";
$arrNumbers[3][7][1]['info'] = "Latvia";
$arrNumbers[3][7][2]['info'] = "Estonia";
$arrNumbers[3][7][3]['info'] = "Moldova";
$arrNumbers[3][7][4]['info'] = "Armenia";
$arrNumbers[3][7][4][4][7]['info'] = "Nagorno-Karabakh landlines";
$arrNumbers[3][7][4][9][7]['info'] = "Nagorno-Karabakh mobile phones";
$arrNumbers[3][7][5]['info'] = "Belarus";
$arrNumbers[3][7][6]['info'] = "Andorra";
$arrNumbers[3][7][7]['info'] = "Monaco";
$arrNumbers[3][7][7][4][4]['info'] = "Republic of Kosovo mobile phone networks";
$arrNumbers[3][7][8]['info'] = "San Marino";
$arrNumbers[3][7][9]['info'] = "assigned to Vatican City but uses 39 with Italy.";
$arrNumbers[3][8]['info'] = "discontinued (was assigned to Yugoslavia before break-up)";
$arrNumbers[3][8][0]['info'] = "Ukraine";
$arrNumbers[3][8][1]['info'] = "Serbia and Republic of Kosovo landlines"; // Republic of Kosovo, uses +381 for landlines but +377 44 Monaco and +386 49 Slovenia for mobile phones.
$arrNumbers[3][8][2]['info'] = "Montenegro";
$arrNumbers[3][8][3]['info'] = "unassigned";
$arrNumbers[3][8][4]['info'] = "unassigned";
$arrNumbers[3][8][5]['info'] = "Croatia";
$arrNumbers[3][8][6]['info'] = "Slovenia";
$arrNumbers[3][8][6][4][9]['info'] = "Republic of Kosovo mobile phone networks";
$arrNumbers[3][8][7]['info'] = "Bosnia and Herzegovina";
$arrNumbers[3][8][8]['info'] = "shared code for groups of nations";
$arrNumbers[3][8][8][3]['info'] = "European Telephony Numbering Space - Europe-wide services";
$arrNumbers[3][8][9]['info'] = "Republic of Macedonia";
$arrNumbers[3][9]['info'] = "Italy and Vatican City";

$arrNumbers[4]['info'] = "Europe";
$arrNumbers[4][0]['info'] = "Romania";
$arrNumbers[4][1]['info'] = "Switzerland";
$arrNumbers[4][2]['info'] = "previously assigned to Czechoslovakia until its breakup. Czech Republic and Slovakia used this common code until 1 March 1997.";
$arrNumbers[4][2][0]['info'] = "Czech Republic";
$arrNumbers[4][2][1]['info'] = "Slovakia";
$arrNumbers[4][2][2]['info'] = "unassigned";
$arrNumbers[4][2][3]['info'] = "Liechtenstein";
$arrNumbers[4][2][4]['info'] = "unassigned";
$arrNumbers[4][2][5]['info'] = "unassigned";
$arrNumbers[4][2][6]['info'] = "unassigned";
$arrNumbers[4][2][7]['info'] = "unassigned";
$arrNumbers[4][2][8]['info'] = "unassigned";
$arrNumbers[4][2][9]['info'] = "unassigned";
$arrNumbers[4][3]['info'] = "Austria";
$arrNumbers[4][4]['info'] = "United Kingdom, including Isle of Man and the Channel Islands.";
$arrNumbers[4][5]['info'] = "Denmark";
$arrNumbers[4][6]['info'] = "Sweden";
$arrNumbers[4][7]['info'] = "Norway";
$arrNumbers[4][8]['info'] = "Poland";

//http://de.wikipedia.org/wiki/Telefonvorwahl_(Deutschland)
//http://en.wikipedia.org/wiki/Area_codes_in_Germany
$arrNumbers[4][9]['info'] = "Germany";
$arrNumbers[4][9][1]['info'] = "special numbers prefix";
$arrNumbers[4][9][1][0]['info'] = "call-by-call (dial-around-services - alternative carrier)";
$arrNumbers[4][9][1][1]['info'] = "formerly Value-added services";


//$arrNumbers[3][1][4][5][7][1][1][2][3][4][5]['info'] = "ACKspace!";

?>
