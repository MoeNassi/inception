#!/bin/bash

# touch /var/www/wp-config.php --allow-root

wp core download --allow-root

wp config create --dbname=$DB_NAME --dbuser=$MY_SQL_USER --dbpass=$MY_SQL_PASS --dbhost=mariadb --allow-root

wp core install --url=$URL --title=localhost --admin_user=$MY_SQL_USER --admin_password=$MY_SQL_PASS --admin_email=medaitswa@gmail.com --allow-root

wp user create $MY_USER_NAME sngp567@gmail.com --role=author --user_pass=$MY_USER_PASS --allow-root

/usr/sbin/php-fpm7.4 -F