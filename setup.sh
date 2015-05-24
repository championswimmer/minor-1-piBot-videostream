#!/bin/bash

mkdir -p /var/www/html/pibot
chmod 777 -R /var/www/html/pibot

./control-codes/shell/setup.sh
./start.sh
./observer.sh
