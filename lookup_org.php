<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

//<input type="text" name="number" value="" />

define( "COUNTRY", "31" );
define( "REGION", "45" );
define( "PLUS", "00" );

define( "MYSQL_DB", "freeswitch_cidlookup" );

// List country codes
////////////////////////////////////////////////////////////////////////////////
//http://en.wikipedia.org/wiki/List_of_country_calling_codes
$arrZones = array( 0 => "Unused",
                   1 => "(continent) Noord Amerika", //North American Numbering Plan Area (NANPA)",
                   2 => "(continent) Africa", //some Atlantic and Indian Ocean islands",
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
$arrNumbers[2][3][9]['info'] = "São Tomé and Príncipe";
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
$arrNumbers[2][6][9]['info'] = "Comoros (Mayotte was here but is now with +262 Réunion)";
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


//Zones 3/4 � Europe
//Originally larger countries, such as the United Kingdom or France, were assigned two-digit codes (to compensate for their usually longer domestic numbers) and small countries, such as Iceland, were assigned three-digit codes; however, since the 1980s, all new assignments have been three-digit regardless of countries� populations.
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
$arrNumbers[3][2][6][4]['info'] = "064 La Louvière";
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
$debug = getVar( "debug", true );

// Normalize the number
$arrNumberInfo = normalizeNumber( getVar( "number", true ) );

// Extension? try and get from dialplan
if ( $arrNumberInfo['type'] == "extension" )
{
    echo getExtension( $arrNumberInfo['local'] );
    exit;
}

if ( !function_exists( "mysql_connect" ))
{
    echo "ERROR";
    exit;
}

// Fetch the number from the database
if ( $strName = dbLookup( $arrNumberInfo ))
{
    echo $strName;
    exit;
}

// Nothing in the database?
// national number starting with 0[1-578]?
// Fetch number from website (check last get timestamp to prevent DoS
// put result in DB
if ( preg_match( "/^0[1-578].*/", $arrNumberInfo['national'] ) && $strName = fetchWebsiteResult( $arrNumberInfo['national'] ))
{
    echo $strName;

    // Add the name to the DB
    $arrNumberInfo['name'] = $strName;
    dbInsert( $arrNumberInfo );
    exit;
}
else if ( preg_match( "/^0[6].*/", $arrNumberInfo['national'] ) && $strName = fetchOptaResult( $arrNumberInfo['national'] ))
{
    // Number porting
    echo $strName;

    // Add the name to the DB, so we don't have to look it up anymore
    $arrNumberInfo['name'] = $strName;
    dbInsert( $arrNumberInfo );
    exit;
}

// Nothing on the website? Try and find the number in the array
if ( isset( $arrNumberInfo['international'] ))
{
    //echo "array";
    $strName = _getInfo( str_split( $arrNumberInfo['international'] ));
    echo $strName;
    exit;
}




/////////////////////////////////////////////////////////////////////
function fetchWebsiteResult( $_strNumber )
{

    if ( $strName = fetch_delefoondetective_nl( $_strNumber ))
	return $strName;

    if ( $strName = fetch_gevonden_cc( $_strNumber ))
	return $strName;

    if ( $strName = fetch_zoekenbel_nl( $_strNumber ))
	return $strName;

    if ( $strName = fetch_nummerzoeker_com( $_strNumber ))
	return $strName;

    if ( $strName = fetch_nummerid_com( $_strNumber ))
	return $strName;

    if ( $strName = fetch_gebeld_nl( $_strNumber ))
	return $strName;

    return false;
}

function fetchOptaResult( $_strNumber )
{
/*
<ul class="right">
    <li>
	<strong>Nummerportering</strong>

	<p>0642144214</p>
    </li>
    <li>
	<strong>Laatste portering</strong>
	<p>14-09-2007</p>
    </li>
    <li>

	<strong>Huidige aanbieder</strong>
	<p>Vodafone</p>
    </li>
</ul>
*/
    $strPage = file_get_contents( "http://www.opta.nl/nl/nummers/nummers-zoeken/resultaat/?query=".$_strNumber."&page=1&portering=1" );

    if ( !preg_match( "/<strong>Huidige aanbieder<\/strong>.*?<p>(.*?)<\/p>/si", $strPage, $matches ))
	return false;
    return "(GSM) ".$matches[1];
}

function fetch_delefoondetective_nl( $_strNumber )
{
    /*
    <div id="text">
    <div id="name"><h2>HB-Electronica</h2></div><p>Maaspoort 13<br />6001BN Weert
    <br />0495-533448</p></div>

    <div id="text">
    <p>U heeft gezocht op: <strong>0495533440</strong><br />
    Helaas is dit telefoonnummer niet gevonden in onze database!
    </p></div>
    */
    $strPage = file_get_contents( "http://www.telefoondetective.nl/telefoonnummer/".$_strNumber."/" );

    if ( !preg_match( "/<div\sid=\"name\"><h\d>(.*?)<\/h\d><\/div>/i", $strPage, $matches ))
	return false;
    return $matches[1];
}

function fetch_gevonden_cc( $_strNumber )
{
    /*
    //http://www.gevonden.cc/telefoonnummer/0495533448/
    // gevonden.cc
    $strUrl = "http://www.gevonden.cc/telefoonnummer/".$_strNumber."/";
<div class="resultaat">&nbsp;<b>HB Electronica&nbsp;</b><br />&nbsp;Maaspoort 13&nbsp;<br />&nbsp;6001 BN&nbsp;Weert<br /><img src="http://www.gevonden.cc/images/icoon.gif" alt="" />&nbsp;0495-533448
<br />&nbsp;<a href="javascript:popup('http://www.gevonden.cc/zoek.php?showmap=6001bn', 500, 500)">Toon kaart</a>&nbsp;|&nbsp;<b>
<a href="http://www.localbiz.nl" target="_blank">Op zoek naar een bedrijf? Kijk op LocalBiz.nl</a>

</b>
&nbsp;|&nbsp;<a href="javascript:popup('http://www.gevonden.cc/viasms.php?nr=0495-533448', 260, 340)">Via SMS</a>&nbsp;|&nbsp;<a href="javascript:popup('http://www.gevonden.cc/verwijderen.php?id=1564828', 600, 500)">Vermelding verwijderen!</a><br /><img src="http://www.gevonden.cc/images/icoon2.gif" alt="" />&nbsp;Routeplanner:&nbsp;<a href="http://www.gevonden.cc/routeplanner.php?v1=Maaspoort 13&v2=Weert">Vertrekpunt</a>&nbsp;|&nbsp;<a href="http://www.gevonden.cc/routeplanner.php?b1=Maaspoort 13&b2=Weert">Eindbestemming</a></div><div class="resultaat">
De telefoongids van Gevonden.cc is er voortaan ook voor onderweg! <a href="http://www.gevonden.cc/onderweg.php">Klik hier</a> voor de beschikbare opties.
</div>

Helaas hebben wij geen vermelding voor u kunnen vinden. 
U kunt het opnieuw proberen door boven aan de pagina een nieuwe zoekopdracht in te geven. Gebruik de auto-aanvul opties om te voorkomen dat u typfouten maakt. Dit verhoogt het zoekresultaat.
    */

    //$strPage = file_get_contents( $strUrl );
    return false;
}

function fetch_zoekenbel_nl( $_strNumber )
{
    // Separate area code? GTFO
    return false;
/*
	return $strName;
    $strUrl = "http://www.zoekenbel.nl/telefoon.asp?zoek=nummer&kengetal=0495&Telnr=533448";
<table border="0" cellpadding="0" cellspacing="0" class="Vzw11">
      <tr>

        <td width="20" background="/images/bg_grijs.gif"><img src="/images/blok_blgr.gif" alt="Bedrijven. Electronica-HB&nbsp;" width="17" height="8" /></td>
        <td width="115" background="/images/bg_grijs.gif"><span class="V2rd"><strong>&nbsp;0495&nbsp;-&nbsp;533448</strong></span></td>
        <td colspan="2" align="left" background="/images/bg_grijs.gif" class="V2zw"><strong>&nbsp;Electronica-HB&nbsp;</strong></td>
        <td align="left" background="/images/bg_grijs.gif" class="V2zw" width="74"><a href="/adressenboek/adresboek.asp?zoek=nummer&amp;tel_id=4241039&amp;save=1&amp;s=1" target="_blank" class="Vrd10" onMouseOver="this.style.color='#000000'" onMouseOut="this.style.color=''">&gt;&gt; Opslaan</a></td>
      </tr>
      <tr>

        <td colspan="2" rowspan="2" align="left" class="border_left"><a href="http://maps.google.com/maps?f=q&amp;hl=nl&amp;q=Maaspoort+13,+Weert,+Netherlands" target="_blank" class="V11gezl" onMouseOver=this.style.color="#CC0033" onMouseOut=this.style.color=''><br />
          <img src="/images/Drie_rd_kl.gif" width="4" height="7" border="0" /> Plattegrond<br />
          </a> <a href="http://www.google.nl/search?sourceid=navclient&amp;hl=nl&amp;ie=UTF-8&amp;rls=GGLG,GGLG:2005-51,GGLG:nl&amp;q=Electronica-HB&nbsp;"target="_blank" class="V11gezl" onMouseOver=this.style.color="#CC0033" onMouseOut=this.style.color=''><img src="/images/Drie_rd_kl.gif" width="4" height="7" border="0" /> Zoek met Google</a>
        <td width="10" align="left">&nbsp;</td>
        <td width="386" align="left"><span class="V2zw">Maaspoort&nbsp;13&nbsp;6001 BN&nbsp;Weert&nbsp;</span></td>

        <td width="74" align="left" >
          <a href="http://0495.zoekenstart.nl" target="_blank" class="Vzw9" onMouseOver=this.style.color="#CC0033" onMouseOut=this.style.color=''>Klik hier<br />
          </a><a href="http://0495.zoekenstart.nl" target="_blank" class="Vzw9" onMouseOver=this.style.color="#CC0033" onMouseOut=this.style.color=''><span class="V2rd"><strong>0495</strong></span></a></td>
      </tr>

      <table width="100%" border="0" align="center" class="Vzw">
	</td>
        </tr>
        <tr>
          <td class="Vzw"><p>Geen vermelding gevonden onder telefoonnummer <font color="#CC0033">0495 - 533440</font></p>

            <p>Neem een <font color="#FF0000">gratis</font> digitale vermelding in de telefoongids van zoekenbel met verwijzingen.</p>
            <hr align="center" width="400" size="1" noshade="noshade" /></td>
        </tr>
        <tr>
          <td>
*/
}


function fetch_nummerzoeker_com( $_strNumber )
{
/*
	return $strName;


http://www.nummerzoeker.com/?color=white&lastname=&str=&hnr=&pc=&pl=&phone=0495533448&maxrows=10&sort=1&search=Zoeken
	<table width="920" class="panel">
	    <tr class="toprow">
		<td>&nbsp;</td>
		<td style="width:90px;"><a href="/?phone=0495533448&amp;maxrows=10&amp;sort=5">Telefoon</a></td>
		<td><a href="/?phone=0495533448&amp;maxrows=10&amp;sort=2">Naam</a></td>

		<td><a href="/?phone=0495533448&amp;maxrows=10&amp;sort=3">Adres</a></td>
		<td style="width:60px;"><a href="/?phone=0495533448&amp;maxrows=10&amp;sort=1">Postcode</a></td>
		<td><a href="/?phone=0495533448&amp;maxrows=10&amp;sort=4">Woonplaats</a></td>
		<td style="width:60px;">Links</td>
	    </tr>
			    <tr class="c0">
		    <td class="nowrap">

					    </td>
		    <td class="nowrap">0495-533448</td>
		    <td>HB Electronica</td>
		    <td class="nowrap">Maaspoort 13</td>
		    <td class="nowrap">6001BN</td>
		    <td class="nowrap">Weert</td>

		    <td class="nowrap">
*/
    return false;
}


function fetch_nummerid_com( $_strNumber )
{
/*
http://www.nummerid.com/result.php?input_telefoon=0495533448
                <table cellpadding="0" cellspacing="0" id="result_table">
                    <tr class="result_heading">

                        <td class="result_colom_heading">
                            <a href="/result.php?input_telefoon=0495533448&amp;sortby=phone&amp;updown=ASC">Telefoon</a>
                        </td>
                        <td class="result_colom_arrow">
                    	<a href="/result.php?input_telefoon=0495533448&amp;sortby=phone&amp;updown=ASC"><img src="images/pijlup.png" border="0" alt="Sorteren op naam, oplopend" /></a><a href="/result.php?input_telefoon=0495533448&amp;sortby=phone&amp;updown=DESC"><img src="images/pijldown.png" border="0" alt="Sorteren op naam, aflopend" /></a>
                        </td>
                        <td class="result_colom_heading">
                            <a href="/result.php?input_telefoon=0495533448&amp;sortby=lastname&amp;updown=ASC">Naam</a>

                        </td>
                        <td class="result_colom_arrow">
                    	<a href="/result.php?input_telefoon=0495533448&amp;sortby=lastname&amp;updown=ASC"><img src="images/pijlup.png" border="0" alt="Sorteren op naam, oplopend" /></a><a href="/result.php?input_telefoon=0495533448&amp;sortby=lastname&amp;updown=DESC"><img src="images/pijldown.png" border="0" alt="Sorteren op naam, aflopend" /></a>
                        </td>
                        <td class="result_colom_heading">
                            <a href="/result.php?input_telefoon=0495533448&amp;sortby=streetname&amp;updown=ASC">Adres</a>
                        </td>
                        <td class="result_colom_arrow">

                    	<a href="/result.php?input_telefoon=0495533448&amp;sortby=streetname&amp;updown=ASC"><img src="images/pijlup.png" border="0" alt="Sorteren op adres, oplopend" /></a><a href="/result.php?input_telefoon=0495533448&amp;sortby=streetname&amp;updown=DESC"><img src="images/pijldown.png" border="0" alt="Sorteren op adres, aflopend" /></a>
                        </td>
                        <td class="result_colom_heading">
                            <a href="/result.php?input_telefoon=0495533448&amp;sortby=postalcode&amp;updown=ASC">Postcode</a>
                        </td>
                        <td class="result_colom_arrow">
                    	<a href="/result.php?input_telefoon=0495533448&amp;sortby=postalcode&amp;updown=ASC"><img src="images/pijlup.png" border="0" alt="Sorteren op postcode, oplopend" /></a><a href="/result.php?input_telefoon=0495533448&amp;sortby=postalcode&amp;updown=DESC"><img src="images/pijldown.png" border="0" alt="Sorteren op postcode, aflopend" /></a>
                        </td>

                        <td class="result_colom_heading">
                            <a href="/result.php?input_telefoon=0495533448&amp;sortby=city&amp;updown=ASC">Woonplaats</a>
                        </td>
                        <td class="result_colom_arrow">
                    	<a href="/result.php?input_telefoon=0495533448&amp;sortby=city&amp;updown=ASC"><img src="images/pijlup.png" border="0" alt="Sorteren op woonplaats, oplopend" /></a><a href="/result.php?input_telefoon=0495533448&amp;sortby=city&amp;updown=DESC"><img src="images/pijldown.png" border="0" alt="Sorteren op woonplaats, aflopend" /></a>
                        </td>
                        <td class="result_colomoptions">
                            Opties
                        </td>

                    </tr>
                    <tr class="result_row">
                        <td class="result_colom" colspan="2">&nbsp;
                            
                        </td>
                        <td class="result_colom" colspan="2">&nbsp;
                            
                        </td>
                        <td class="result_colom" colspan="2">&nbsp;
                            
                        </td>
                        <td class="result_colom" colspan="2">&nbsp;

                            
                        </td>
                        <td class="result_colom" colspan="2">&nbsp;
                            
                        </td>
                        <td class="result_colomoptions">&nbsp;
                            
                        </td>
                    </tr>
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
                            <a href="http://maps.google.nl/maps?q=Maaspoort+13,+6001BN+Weert" target="_blank"><img src="images/icons/google.png" border="0" alt="Google Maps" /></a>
                            <a href="http://www.misdaadkaart.nl/6001BN" target="_blank"><img src="images/icons/misdaad.png" border="0" alt="Misdaadkaart" /></a>
                            <a href="https://server.db.kvk.nl/TST-BIN/ZS/ZSWWW01@?TAAL=NL++&amp;TYPE=PCHN&amp;AANT=0&amp;AWCD=6001BN&amp;NHVC=12&amp;HIST=N" target="_blank"><img src="images/icons/kvk.png" border="0" alt="Kamer van Koophandel" /></a>
                        </td>
                    </tr>
*/
    return false;
}

function fetch_gebeld_nl( $_strNumber )
{
/*
http://www.gebeld.nl/content.asp?zapp=zapp&land=&zoek=numm&searchfield1=fullnumber&searchfield2=&queryfield1=0495533448&queryfield2=&fuzzy=&volll=&database=open&tld=
<table border="0" width="90%" cellspacing="0" cellpadding="0" >
<tr><td width="10%">&nbsp;</td><td width="70%">&nbsp;</td><td width="20%">&nbsp;</td></tr>



<tr bgcolor="f5f5f5"><td></td><td></td>


<TH ROWSPAN=6 >

<a href="content.asp?zapp=zapp&land=&zoek=mut1&searchfield1=fullnumber&searchfield2=&queryfield1=0495533448&queryfield2=&fuzzy=&volll=&database=open&tld=>"><img src="Image/icons/edit.png" WIDTH="30" HEIGHT="30" alt="Bewerken" border="0"></a><br>
<a href="/window/navigate.asp?toAddress=6001BN&fromAddress="><img src="Image/icons/connect.png" WIDTH="30" HEIGHT="30" alt="Navigeren" border="0"></a><br>
<a href="javascript:parent.openmypage('0495533448');" ><img src="Image/icons/update.png" WIDTH="30" HEIGHT="30" alt="Kaart" border="0"></a>
</TH>


</tr>


<tr bgcolor="f5f5f5">
<td><font size="1" face="Verdana, Arial, Helvetica, sans-serif">1</font></td>
<td ><font size="2" face="Verdana, Arial, Helvetica, sans-serif" >

HB-Electronica
</font>




</td></tr>


<tr bgcolor="f5f5f5"><td></td><td>Maaspoort&nbsp;13</td><td></td></tr>
<tr bgcolor="f5f5f5"><td></td><td>6001BN&nbsp;Weert</td><td></td></tr>
<tr bgcolor="f5f5f5"><td></td><td><a href="" target="_new"><u></u></a>&nbsp;<a href="mailto:" target="_new"><u></a></td><td></td></tr>
<tr bgcolor="f5f5f5"><td></td><td>0495&nbsp;533448</td><td></td></tr>
*/
    return false;
}

function dbLookup( $_arrNumberInfo )
{
    global $debug;

    if (!$db = mysql_connect( NULL, "freeswitch", "frees!witch" ))
    {
	//if ( !isset( $debug ))
	    echo "could not connect to database";
	return false;
    }

    // TODO: close db
    if (!mysql_select_db( MYSQL_DB, $db ))
	return false;

    // Prevent SQL injection on variables
    $country = mysql_real_escape_string( $_arrNumberInfo['country'] );
    $international = mysql_real_escape_string( $_arrNumberInfo['international'] );

    // Partial number full listing
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND number LIKE '".$international."%' ORDER BY LENGTH(number), sortorder LIMIT 1";

    // Full number partial listing (experimental)
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$_arrNumberInfo['country']." AND number LIKE SUBSTR('".$_arrNumberInfo['international']."',0,LENGTH(NUMBER)) ORDER BY LENGTH(number), sortorder LIMIT 1";
    $query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND INSTR( '".$international."', number ) = 1 ORDER BY LENGTH(number), sortorder LIMIT 1";

    // Full number full listing
    //$query = "SELECT name FROM telephone_names WHERE country_code=".$country." AND number = '".$international."' ORDER BY LENGTH(number), sortorder LIMIT 1";

    if (!$result = mysql_query( $query, $db ))
	return false;

    $row = mysql_fetch_row( $result );

    mysql_close( $db );

    //print_r( $row );
    //,  );
    //print_r( $_arrNumberInfo );

    return $row[0];
}


function dbInsert( $_arrNumberInfo )
{
/*
international
national
local
type
*/
    echo "DB insert";

    if (!$db = mysql_connect( NULL, "freeswitch", "frees!witch" ))
	return false;

    // TODO: close db
    if (!mysql_select_db( "freeswitch_cidlookup", $db ))
	return false;

    // Prevent SQL injection on variables
    $country = mysql_real_escape_string( $_arrNumberInfo['country'] );
    $international = mysql_real_escape_string( $_arrNumberInfo['international'] );
    $name = mysql_real_escape_string( $_arrNumberInfo['name'] );


    $query = "INSERT INTO telephone_names (country_code,number,name) VALUES (".$country.",'".$international."','".$name."')";

    if (!$result = mysql_query( $query, $db ))
    {
	echo mysql_error( $db );
	return false;
    }
    //print_r( $_arrNumberInfo );

    mysql_close( $db );

    return true;
}


function getExtension( $_strExtension )
{
    return false;
    return "Ext. ".$_strExtension;
}


function normalizeNumber( $_strNumber )
{
    $arrInfo = array();

    if ( preg_match( "/^([19]\d+)/", $_strNumber, $matches ))
    {
	$arrInfo['local'] = $matches[1];
	$arrInfo['type'] = 'extension';
	return $arrInfo;
    }

    //if ( substr( $_strNumber, 1, 1 ) == "+"
    // Add region + country on quick dials
    $_strNumber = preg_replace( "/^([2345678])/", COUNTRY.REGION.'$1', $_strNumber );

    // Add country on national dials
    $_strNumber = preg_replace( "/^(0)([^0].*)/", COUNTRY.'$2', $_strNumber );

    // Replace + and 00 international symbols before parsing (include space for URI conversion
    $_strNumber = preg_replace( "/^( |\+|00)/", '', $_strNumber );

    $arrInfo['country'] = intval( substr( $_strNumber, 0, 2 ));
    $arrInfo['international'] = $_strNumber;
    $arrInfo['type'] = 'international';

    // National number?
    if ( $arrInfo['country'] == intval( COUNTRY ))
    {
	// only works with countries of 2 digits; replaces it wiht a 0
	$arrInfo['national'] = "0".substr( $_strNumber, 2 );
	$arrInfo['type'] = 'national';
    }

    return $arrInfo;

};



function GetInfo( $_strNumber )
{
    global $arrNumbers;

    //if ( substr( $_strNumber, 1, 1 ) == "+"
    // Add region + country on quick dials
    $_strNumber = preg_replace( "/^([2345678])/", COUNTRY.REGION.'$1', $_strNumber );

    // Add country on national dials
    $_strNumber = preg_replace( "/^(0)([^0].*)/", COUNTRY.'$2', $_strNumber );

    // Replace + and 00 international symbols before parsing
    $_strNumber = preg_replace( "/^(\+|00)/", '', $_strNumber );

    return _getInfo( str_split( $_strNumber ));
};

function _getInfo( $_arrNumber )
{
    global $arrNumbers;

    $arrInfo = array();

    $arrNumberInfo = $arrNumbers;
    $nIndent = 0;
    $strDigits = "";
    $strDetailedInfo = "";
    foreach ( $_arrNumber as $digit )
    {
        if ( isset( $arrNumberInfo[$digit] ) )
        {
            $strDigits .= $digit;
            $arrNumberInfo = $arrNumberInfo[$digit];
            if ( isset( $arrNumberInfo['info'] ) )
            {
                $arrInfo[] = str_repeat( "-", $nIndent ) . $strDigits . " " . $arrNumberInfo['info'];
                $strDigits = "";
		$strDetailedInfo = $arrNumberInfo['info'];
            }
            $nIndent++;
        } else {
            break;
        }
    }

    //print_r( $arrInfo[sizeof($arrInfo)-1] );

    //echo "\n";
    return $strDetailedInfo;

    //echo "<pre>";
    //print_r( $arrNumbers );
    //echo "</pre>";
    //return "asdasdbad";
    
}

////////////////////////////////////////////////////////////////////////////////
// Helpers
////////////////////////////////////////////////////////////////////////////////
function getVar( $_strVarName, $_bAllowGet = false )
{
    if ( isset( $_POST[ $_strVarName ] ) )
    {
        // If _POST var is set, return _POST var
	return $_POST[ $_strVarName ];
    }
    else if ( isset( $_GET[ $_strVarName ] ) && ($_bAllowGet == true) )
    {
        // If _GET var is set and is allowed, return _GET var
        return $_GET[ $_strVarName ];
    }
    else
    {
        // requested var not found: return NULL
        return NULL;
    }
}
?>
