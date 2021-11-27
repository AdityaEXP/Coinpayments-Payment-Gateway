import requests

your_server_url = 'https://www.domain.xyz/coinpayementsIPN' #Where the all coinpayment deposite files will be found

currency = 'BTC' #BTC, ETH, LTC, DOGE etc....
unique_identifier = '100000' #Unique ID to identify user it can be telegram id or email etc....
password = 'aditya' #Password setuped in Coinpayments_Config/config.php

r = requests.get(f'{your_server_url}/get_callback_address.php?currency={currency}&unique_identifier={unique_identifier}&password={password}')
print(r.text)
