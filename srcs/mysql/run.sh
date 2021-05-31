#!/bin/sh
rc default
/etc/init.d/mariadb setup
rc-service mariadb start
# Create database.
mysql -u root mysql < mysql.sql
# Init my wordpress database.
mysql -u root wordpress < wordpress.sql
rc-service mariadb stop
/usr/bin/mysqld_safe