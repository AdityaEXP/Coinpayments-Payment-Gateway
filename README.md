# Coinpayments-Payment-Gateway
### A Coinpayments Payment Gateway Coded In PHP, It Uses IPN For Recieving Deposites

### Setuping Up
> First Go To /Coinpayments_Config Directory 
> 
> Fill Out $private_key, $public_key(recived from coinpayments), $ipn_url (the url of ipn.php upload to your url) & finally select a $password which will be used to verify at get_callback_address.php

### Now let's see how to use it
To Get Address : www.domain.com/get_callback_address.php?currency=crypto_from_coinpayments&chat_id=user_telegram_id&password=password_you_used_at_config.php
<br>

```
crypto_from_coinpayments = TRX, BTC, ETH & etc....
user_telegram_id = It can be anything to identify the user who made deposit like telegram id , email or any unique id given to user.
password_you_used_at_config.php = The password you setuped at Coinpayments_Config/config.php in $password variable default it will be setuped to 'aditya'
```
<br>

#### Code Examples Is In 'examples' Directory!!
#### **For more codes join https://t.me/TGBotsByLazy**
