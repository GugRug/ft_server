#!/bin/bash

#Create website core directories
mkdir /var/www/localhost

#Permissions and ownership
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

#nginx
cp /temp/nginx.conf /etc/nginx/sites-available/nginx.conf
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/

#ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj '/C=BR/ST=SP/L=SP/O=42SP/CN=gumartin' \
	-keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/private/nginx-selfsigned.crt

#phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
tar -xf phpMyAdmin-5.0.4-english.tar.gz
rm phpMyAdmin-5.0.4-english.tar.gz
mv phpMyAdmin-5.0.4-english /var/www/localhost/phpmyadmin

#wordpress
wget https://wordpress.org/latest.tar.gz
tar -xf latest.tar.gz
rm latest.tar.gz
mv wordpress var/www/localhost/

#config
cp /temp/info.php var/www/localhost/
cp /temp/wp-config.php var/www/localhost/wordpress/
cp /temp/config.inc.php var/www/localhost/phpmyadmin/
rm -f var/www/localhost/wordpress/wp-config-sample.php
#mysql and db
service mysql start
USER=admin
mysql -e "CREATE USER '$USER' IDENTIFIED BY '$USER';"
mysql -e "CREATE DATABASE wordpress_db;"
mysql -e "CREATE DATABASE phpmyadmin_db;"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO '$USER';"
