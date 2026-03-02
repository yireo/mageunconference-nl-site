#!/bin/bash
git pull
php8.4 /usr/local/bin/composer install
php8.4 /usr/local/bin/composer dump-autoload
php8.4 bin/console asset-map:compile
php8.4 bin/console cache:clear
