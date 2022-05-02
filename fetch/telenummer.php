<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

function fetch_telenummer( $_arrNumberInfo )
{
    // Slow. Works with local numbers->international; returns score text (Spam, Irritant, Neutraal, Veilig)
    if ( $_arrNumberInfo['country'] !== 31 )
        return false;

    $strPage = file_get_contents( "https://telenummer.nl/nummer/{$_arrNumberInfo['national']}" );
    
    if ( !preg_match( '/<div class="p-2 md:p-4 md:py-2 .*? rounded-lg text-white text-xs md:text-base font-semibold">\s*(.*?)\s*<\/div>/si', $strPage, $matches ))
        return false;
    return "[{$matches[1]}] unknown";
    
    /*
    <div class="p-2 md:p-4 md:py-2 bg-green-500 rounded-lg text-white text-xs md:text-base font-semibold"> 
    <div class="p-2 md:p-4 md:py-2 bg-red-500 rounded-lg text-white text-xs md:text-base font-semibold"> Spam
    </div>
    */
}
?>
