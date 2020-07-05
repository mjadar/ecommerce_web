<?php 

    function getPrice($priceInDec){
        $price = floatval($priceInDec) / 100 ;
        return number_format($price , 2, ',' , ' ') . ' Dhs' ;
    }