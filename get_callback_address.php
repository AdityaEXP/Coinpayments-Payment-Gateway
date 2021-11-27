<?php
require('Coinpayments_Config/coinpayments.inc.php');
include 'Coinpayments_Config/config.php';
$cps = new CoinPaymentsAPI();

$cps->Setup($private_key, $public_key);
$currency = $_GET['currency'];
$unique_identifier = $_GET['unique_identifier'];
$pass = $_GET['password'];

$result = $cps->GetCallbackAddress($currency = $currency , $label = $unique_identifier ,$ipn_url = $ipn_url);

if(!isset($_GET['currency']) or !isset($_GET['unique_identifier']) or !isset($_GET['password'])){
    die('Paramters currency, unique_identifier or password is missing');
}

if($pass != $password){
    die('wrong pass');
}

if ($result["error"] == "ok"){
    $add = $result["result"]["address"];
    print_r($add);
    return;
}

print_r($result["error"]);


?>
