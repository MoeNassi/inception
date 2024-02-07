#!/bin/sh
mysql_install_db
mysqld_safe  &
sleep 5

echo  "CREATE DATABASE IF NOT EXISTS $DB_NAME; GRANT ALL ON $DB_NAME.* TO '$MY_SQL_USER'@'%' IDENTIFIED BY '$MY_SQL_PASS';" \
     "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MY_SQL_PASS}';" "FLUSH PRIVILEGES;" | mysql -u root -p${MY_SQL_PASS}

mysqladmin shutdown -p${MY_SQL_PASS}
mysqld_safe
