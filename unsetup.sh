#!/bin/bash

mkdir -p /var/www/html/pibot
chmod 777 -R /var/www/html/pibot

pkill -9 setup
pkill -9 observer
pkill -9 start
pkill -9 mjpg
