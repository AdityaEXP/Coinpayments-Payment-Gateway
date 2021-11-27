const https = require('https')

var your_server_url = 'domain.xyz' //Where the all coinpayment deposite files will be found

var currency = 'BTC' //BTC, ETH, LTC, DOGE etc....
var unique_identifier = '100000' //Unique ID to identify user it can be telegram id or email etc....
var password = 'aditya' //Password setuped in Coinpayments_Config/config.php


const options = {
  hostname: your_server_url,
  path: `/get_callback_address.php?currency=${currency}&unique_identifier=${unique_identifier}&password=${password}`,
  method: 'GET'
}

const req = https.request(options, res => {
  console.log(`statusCode: ${res.statusCode}`)

  res.on('data', d => {
    process.stdout.write(d)
  })
})

req.on('error', error => {
  console.error(error)
})

req.end()
