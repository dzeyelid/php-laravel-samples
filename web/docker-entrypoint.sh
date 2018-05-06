#!/bin/bash

set -e

sed -i -E "s/^(DB_HOST)=.*?$/\1=${DB_HOST}/g" ${WORK_DIR}/polls/.env
sed -i -E "s/^(DB_DATABASE)=.*?$/\1=${DB_DATABASE}/g" ${WORK_DIR}/polls/.env
sed -i -E "s/^(DB_USERNAME)=.*?$/\1=${DB_USERNAME}/g" ${WORK_DIR}/polls/.env
sed -i -E "s/^(DB_PASSWORD)=.*?$/\1=${DB_PASSWORD}/g" ${WORK_DIR}/polls/.env

service php7.2-fpm start
exec nginx -g 'daemon off;'
