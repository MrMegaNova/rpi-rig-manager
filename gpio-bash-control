#!/bin/bash
if [ ! -z "$1" ] && [ ! -z "$2" ];
then
	gpio=$1
	do=$2
	echo $gpio

	#Exports pin to userspace
	echo $gpio > /sys/class/gpio/export
	sleep 1

	cat '/sys/class/gpio/export'
	sleep 1

	# Sets pin as an output
	echo "out" > "/sys/class/gpio/gpio"$gpio"/direction"
	sleep 1


	# Sets pin to high
	echo "/sys/class/gpio/gpio"$gpio"/value"
	echo "1" > "/sys/class/gpio/gpio"$gpio"/value"

	#Waiting x ms
	case "$do" in
		"start" | "stop")
			time=1
			;;
		"force")
			time=5
			;;
		*)
			echo "Error in 2nd arg <do>"
			;;
	esac


	sleep $time

	cat "/sys/class/gpio/gpio"$gpio"/value"

	# Sets pin to low
	echo "0" > "/sys/class/gpio/gpio"$gpio"/value"
else
	echo "Set gpio number as argument!"
fi
