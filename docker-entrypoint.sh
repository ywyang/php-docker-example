#! /bin/bash

set -e

### Feed configuration ###
sed 's,{{MYSQL_HOST}},'"${MYSQL_HOST}"',g' -i /php/conf/config.php
sed 's,{{MYSQL_PORT}},'"${MYSQL_PORT}"',g' -i /php/conf/config.php
sed 's,{{MYSQL_USER}},'"${MYSQL_USER}"',g' -i /php/conf/config.php
sed 's,{{MYSQL_PASSWORD}},'"${MYSQL_PASSWORD}"',g' -i /php/conf/config.php
sed 's,{{MYSQL_DATABASE}},'"${MYSQL_DATABASE}"',g' -i /php/conf/config.php

sed 's,{{MYSQL_HOST}},'"${MYSQL_HOST}"',g' -i /php/conf/application.ini
sed 's,{{MYSQL_PORT}},'"${MYSQL_PORT}"',g' -i /php/conf/application.ini
sed 's,{{MYSQL_USER}},'"${MYSQL_USER}"',g' -i /php/conf/application.ini
sed 's,{{MYSQL_PASSWORD}},'"${MYSQL_PASSWORD}"',g' -i /php/conf/application.ini
sed 's,{{MYSQL_DATABASE}},'"${MYSQL_DATABASE}"',g' -i /php/conf/application.ini

exec "$@"
