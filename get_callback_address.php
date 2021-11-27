<?php
require('Coinpayments_Config/coinpayments.inc.php');
include 'Coinpayments_Config/config.php';
$cps = new CoinPaymentsAPI();

$cps->Setup($private_key, $public_key);
$currency = $_GET['currency'];
$chat_id = $_GET['chat_id'];
$pass = $_GET['password'];

$result = $cps->GetCallbackAddress($currency = $currency , $label = $chat_id ,$ipn_url = $ipn_url);

if(!isset($_GET['currency']) or !isset($_GET['chat_id']) or !isset($_GET['password'])){
    die('Paramters currency, chat_id or password is missing');
}

if($pass != $password){
    die('wrong pass');
}

if ($result["error"] == "ok"){
    $add = $result["result"]["address"];
    print_r($add);
    return;
}

echo "error";


?>
