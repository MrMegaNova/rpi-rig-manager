#!/bin/bash
if [ ! -z "$1" ] && [ ! -z "$2" ];
then
	rig=$1
	do=$2
	echo $do $rig >> log.txt
	gpio=$(grep $rig database.txt | cut -d ":" -f2)

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
		"start-stop")
			time=1
			;;
		"force")
			time=5
			;;
		*)
			echo "Error in 2nd arg <do>" >> log.txt
			;;
	esac


	sleep $time

	cat "/sys/class/gpio/gpio"$gpio"/value"

	# Sets pin to low
	echo "0" > "/sys/class/gpio/gpio"$gpio"/value"
else
	rig=$1
	do=$2
	echo "Set arguments!" >> log.txt
	echo "rig: $rig | Do: $do" >> log.txt
fi
echo "=======END======" >> log.txt
