#!/bin/bash

sed -i 's/127.0.0.1/0.0.0.0/g' /etc/mysql/mariadb.conf.d/50-server.cnf

service mariadb start

mariadb -e "CREATE DATABASE IF NOT EXISTS \`$DB_NAME\`;"
mariadb -e "CREATE USER IF NOT EXISTS '$MY_SQL_USER'@'%' IDENTIFIED BY '$MY_SQL_PASS';"
mariadb -e "GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$MY_SQL_USER'@'%';"
mariadb -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$MY_SQL_ROOTPASS' ;"

mysqladmin -u root --password="$MY_SQL_ROOTPASS" shutdown

mysqld_safe