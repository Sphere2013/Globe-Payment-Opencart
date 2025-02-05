# OpenCart_Globe
### by John Atkinson (jga) from [GLB Gear](http://btcgear.com/)

Donations can be paid here: **12ctRXVVPAXQ6CQyEXkBhvi33K7kP4CMB5**

Initial bounty paid by cablepair.

This is an OpenCart payment module that communicates with a globe client using JSON RPC.

This code accurately converts any Mt.Gox-compatible currency to GLB using the up-to-the-minute Mt.Gox values for average trade vaule and last trade value.  It is completely self contained and requires no cron jobs or external hardware other than a properly configured globed server.  Every order creates a new globe address for payment and gives it a label corresponding to the order_id of the order.  It installs like any other OpenCart plugin and it is completely integrated with OpenCart.

This extension has been tested with OpenCart versions between 1.5.2.1 and 1.5.5.1.

Any questions or comments can be sent to support@btcgear.com.

To receive information about future updates, send an email to opencart_globe@btcgear.com.

# Dependencies

This extension now requires previous installation of [vQmod](https://code.google.com/p/vqmod/) and will not run properly without it. vQmod enables making changes to core OpenCart functionality without actually editing the core OpenCart files.

# Installation

1. Install vQmod.
2. Upload all files maintaining OpenCart folder structure.
3. Install the payment module in the admin console (Extensions > Payments > Globe > Install).
4. Edit the payment module settings (Extensions > Payments > Globe > Edit).
5. Run at least one test order through checkout up until payment (no payment required).  The first order initializes the Globe currency and will return 0 GLB for the order total.

## Explanation of Settings

* *Globe RPC Username*: This is the username in the "rpcuser" line of your globe.conf file.
* *Globe RPC Host Address*: This is the IP address of the computer globed is running on.
* *Globe RPC Password*: This is the password in the "rpcpassword" line of your globe.conf file.
* *Globe RPC Port*: This is the port number in the "rpcport" line of your globe.conf file.  The default port is 8682.
* *The prefix for the address labels*: The addresses will be assigned to accounts named with the format [prefix]_[order_id].
* *Is this a blockchain.info JSON-RPC server?*: Choose yes if connecting to blockchain.info JSON-RPC API.
* *Show GLB as a store currency*: If you select yes, your customers will be able to view prices in GLB.
* *Calculate GLB amount to this many decimal places*: Self explanatory. Choose the precision of the exchange rate calculation.
* *Time to complete order*: The number of seconds a customer has to send globes to complete the order.
* *Status of a new order*: Choose a status for an order that has received payment with 0 confirmations.
* *Status*: Enable the Globe payment module here.
* *Sort Order*: Where you want this module to show up in relation to the other payment modules on the checkout page.

### New in version 1.4.0

* Now compatible with the Blockchain.info JSON-RPC API

### New in version 1.3.5

* Added a checkout timer.
* Made a number of important bugfixes.

### New in version 1.3.4

* Fixed bug caused by Mt.Gox API changes
* Now works with any Mt.Gox-compatible currency as the default currency.
* Exchange rate calculated using both last value and average value.


### New in version 1.3.3

* Bugfixes, removed "globed" from name of payment method.

### New in version 1.3.2

* Improved compatibility with third-party themes.

### New in version 1.3.1

* Checkout page automatically redirects to success page upon payment.
* All checkout language moved to language file.

### New in version 1.3.0

* Added QR code and URI Click to pay to checkout page.

### New in version 1.2.0

* Checkout UI revamped. Payment information presented in colorbox. Payment amount and address are easier to select.

### New in version 1.1.1

* Adds a cleaner user interface during checkout

### New in version 1.1.0

* Orders are only confirmed (and created in the admin console) once initial payment has been received (0 confirmations).


* * *

Copyright (c) 2013 John Atkinson (jga)

See license.txt for license.