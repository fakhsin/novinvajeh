#!/usr/bin/env bash

mariadb --user=root --password=${MYSQL_ROOT_PASSWORD} <<EOF
-- NOVINVAJEH
CREATE USER IF NOT EXISTS $NOVINVAJEH_DB_USER@'$MYSQL_HOST' IDENTIFIED BY '$NOVINVAJEH_DB_PASSWORD';
CREATE DATABASE IF NOT EXISTS $NOVINVAJEH_DB_NAME CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON $NOVINVAJEH_DB_NAME.* TO $NOVINVAJEH_DB_USER@'$MYSQL_HOST';
FLUSH PRIVILEGES;

-- ADMIN
GRANT ALL PRIVILEGES ON $NOVINVAJEH_DB_NAME.* TO $MYSQL_USER@'$MYSQL_HOST' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF
