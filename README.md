# Coinpayments-Payment-Gateway
### A Coinpayments Payment Gateway Coded In PHP, It Uses IPN For Recieving Deposits

### Setuping Up
> First Go To /Coinpayments_Config Directory 
> 
> Fill Out $private_key, $public_key(recived from coinpayments), $ipn_url (the url of ipn.php upload to your server) & finally select a $password which will be used to verify at get_callback_address.php

### Now let's see how to use it
To Get Address : www.domain.com/get_callback_address.php?currency=crypto_from_coinpayments&unique_identifier=a_way_to_identify_user&password=password_you_used_at_config.php
<br>

```
crypto_from_coinpayments = TRX, BTC, ETH & etc....
unique_identifier = It can be anything to identify the user who made deposit like telegram id , email or any unique id given to user.
password_you_used_at_config.php = The password you setuped at Coinpayments_Config/config.php in $password variable default it will be setuped to 'aditya'

<b> Note : The ipn.php is currently only saving details to a txt file you have to edit to your own needs </b>

```
<br>


<br>

#### Code Examples Is In 'examples' Directory!!
#### **For more codes join https://t.me/TGBotsByLazy**
