#!/bin/bash

apt-get -y update && apt-get -y upgrade
apt-get -y install apt-utils
apt-get -y install nginx
apt-get -y install curl
apt-get -y install php7.3
apt-get -y install openssl
apt-get -y install mariadb-server
apt-get -y install php-fpm php-mysql
#echo Teste '\n'