<?php
require_once('coins_class.php');
$my_coins_names="";
$init_feebee_account="";
/* 
//Only needed if you want add your own coins
$my_coins_names="Bitcoin,Bitcrystal,Bitcrystalx";
$my_coins_names=explode(",",$my_coins_names);
$init_feebee_account=false;
*/
$my_coins = w_coins::get($my_coins_names,$init_feebee_account);
?>