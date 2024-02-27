#!/bin/bash

wp core download --allow-root

wp config create --dbname=$DB_NAME --dbuser=$MY_SQL_USER --dbpass=$MY_SQL_PASS --dbhost=$DB_HOST --allow-root

wp core install --url=$URL --title=$URL --admin_user=$MY_SQL_USER --admin_password=$MY_SQL_PASS --admin_email=$ADMIN_EMAIL --allow-root

wp user create $MY_USER_NAME $EMAIL --role=$ROLE --user_pass=$MY_USER_PASS --allow-root

/usr/sbin/php-fpm7.4 -F