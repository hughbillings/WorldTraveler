<? php

//The aim of this program is to aid in the Calculation Foreign Exchange to USD


$cambodian_riel = 2103942;
$myanmar_kyat = 19092;
$norweigan_krones = 109;
$albania_lek = 9094;

//Checking to see that starting amount in each variables 
echo "Cambodian Riel: $cambodian_riel \nMyanmar Kyat: $myanmar_kyat \n Norweigan Krones: $norweigan_krones \n Albania Lek: $albania_lek";


// The exchange rate between the mentioned currencies and USD. These values are made up. To be read $1currency = xUSD
$camb_USD = 190;
$myan_USD = 100;
$norw_USD = 59;
$alba_USD = 79;


//The exchanged value in USD
$camb_exchange = $cambodian_riel / $camb_USD;
$myan_exchange = $myanmar_kyat / $myan_USD;
$norw_exchange = $norw_exchange / $norw_USD;
$alba_exchange = $albania_lek / $alba_USD; 

//Incorporating Fees on exchange
$camb_exchange --;
$myan_exchange --;
$norw_exchange --;
$alba_exchange --;


//Rounding each Variable

$camb_exchange = round($camb_exchange, 2);
$myan_exchange = round($myan_exchange, 2);
$norw_exchange = round($norw_exchange, 2);
$alba_exchange = round($alba_exchange, 2);
