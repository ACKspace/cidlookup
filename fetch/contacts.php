<?php
$fetchList[] = "fetch_".basename(__FILE__, '.php');

// From https://github.com/nuovo/vCard-parser
require_once('vCard.php');

function fetch_contacts( $_arrNumberInfo )
{
    // Google:
    // * go to https://contacts.google.com/
    // * click Export, vCard
    
    // SailfishOS
    // * open terminal
    // * devel-su -p /usr/bin/vcardconverter -e Downloads/mycontacts.vcf

    if ( !is_readable( 'contacts.vcf') )
        return false;

    $vCard = new vCard( 'contacts.vcf', false, array( 'Collapse' => true ) );
    foreach ( $vCard as $vCardPart )
    {
        foreach ( $vCardPart -> tel as $tel)
        {
            if ( is_array( $tel ) )
                $tel = $tel["Value"];
            $tel = normalizeNumber( $tel );
            
            if ( $_arrNumberInfo["international"] === $tel["international"] )
                return $vCardPart->fn[0];
        }
    }
    
    return false;
}
?>
