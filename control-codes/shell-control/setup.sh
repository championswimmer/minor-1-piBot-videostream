#!/bin/bash

#Ensure root perms
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 
   exit 1
fi

# Define the pins

RT_FWD=20
RT_BWD=21

LT_FWD=18
LT_BWD=23

echo ${RT_BWD} > /sys/class/gpio/export
echo ${RT_FWD} > /sys/class/gpio/export
echo ${LT_BWD} > /sys/class/gpio/export
echo ${LT_FWD} > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio${RT_FWD}/direction
echo out > /sys/class/gpio/gpio${RT_BWD}/direction
echo out > /sys/class/gpio/gpio${LT_FWD}/direction
echo out > /sys/class/gpio/gpio${LT_BWD}/direction

chmod a+rw -R /sys/class/gpio/gpio${RT_FWD}/
chmod a+rw -R /sys/class/gpio/gpio${RT_BWD}/
chmod a+rw -R /sys/class/gpio/gpio${LT_FWD}/
chmod a+rw -R /sys/class/gpio/gpio${LT_BWD}/
