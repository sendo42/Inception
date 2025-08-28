#!/bin/bash

source ./.env

cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=$DBNAME --dbuser=$DBUSER --dbpass=$DBPASS --dbhost=$DBHOST --allow-root
./wp-cli.phar core install --url=$DOMAIN_NAME --title=$TITLE --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=$ADMIN_EMAIL --allow-root

chown -R www-data:www-data /var/www/html

exec php-fpm8.2 -F