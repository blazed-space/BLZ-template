# BLZ-template
The bare bones template for BLZ-BLD views. 

# What's in it
* FuelPHP framework
* BundleFU

# Setup
1. Edit /app/config/misc.php & /app/config/development/config.php & /app/config/production/config.php
2. If a database is used, update it's credentials in /app/config/development/db.php and/or /app/config/production/db.php
3. Edit the SITE global in /public_html/index.php

# To Develop locally
1. Run npm install
2. Run npm run dev

This will run a development instance on localhost:8000

# To Deploy
1. Install Fuel to /var/www/common/
2. Run npm run deploy

# Support
* For Help: support@blazed.work
