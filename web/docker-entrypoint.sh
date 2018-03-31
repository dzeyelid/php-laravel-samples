#!/bin/bash

set -e

service php7.2-fpm start
exec nginx -g 'daemon off;'
