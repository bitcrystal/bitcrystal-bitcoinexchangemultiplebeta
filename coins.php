<?php
require_once('coins_class.php');
$my_coins_names="";
$init_feebee_account="";
//Only needed if you want add your own coins
//The array must dividable through 3 otherwise you get a error
$my_coins_names="Bitcoin,Bitcrystal,Karmacoin,BitQuark,Litecoin,Dogecoin";
$my_coins_names=explode(",",$my_coins_names);
$init_feebee_account=false;
$my_coins = w_coins::get($my_coins_names,$init_feebee_account);
?>
