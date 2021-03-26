# BLZ-template
The bare bones template for BLZ-BLD views. 

# What's in it
* FuelPHP framework
* BundleFU

# Setup
1. Edit /app/config/misc.php & /app/config/development/config.php & /app/config/production/config.php
2. If a database is used, update it's credentials in /app/config/development/db.php and/or /app/config/production/db.php
3. Edit the SITE global in /public_html/index.php

# Install Dependancies 
* You will need to install Fuel, use Composer, or goto: https://fuelphp.com/
* Use Composer to require Bundle FU, **composer require dotsunited/bundlefu**
* Once you have FuelPHP installed, change the COREPATH, PKGPATH, and VENDORPATH in /public_html/index.php to correspond with your installation location of Fuel.
* Set VENDORPATH to be the same location where Bundle FU is installed

# Support
* For Help: support@blazed.work
