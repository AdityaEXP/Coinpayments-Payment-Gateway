<?php

if ($_POST["ipn_type"] == "deposit") {
      $tg_id = $_POST["label"];
      $currency = $_POST["currency"];
      $txid = $_POST["txn_id"];
      $amount_in_crypto = $_POST["amount"];
      $amount_in_usd = $_POST["fiat_amount"];
      
      $data .= "\n\nTG_ID : $tg_id, Amount Recived : $amount_in_crypto $currency, Transaction ID : $txid, Amount (USD) : $amount_in_usd";
      
      file_put_contents('data.txt', $data);
      echo 'yes';
}

print_r("<h1> Not Supported </h1>");

?>
