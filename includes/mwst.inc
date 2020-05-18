<?php


function mwst ( $preis, $type = "brutto", $mwst = 19, $round = 4) 
{
    
    if ( $type == "brutto" ) {
        return round( $preis + ( ( $preis / 100 ) * $mwst ), $round );
    } elseif ( $type == "netto" ) {
        return round( ( $preis * 100 ) / ( 100 + $mwst ), $round );
    } else {
        return round( ( ( $preis * 100 ) / ( 100 + $mwst ) ) * ( $mwst / 100 ), $round );
    }
}
?>
