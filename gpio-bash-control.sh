#!/bin/bash
log=log.txt
echo "========Script======" >> $log
echo "$(date)	  " >> $log
echo "====================" >> $log
if [ ! -z "$1" ] && [ ! -z "$2" ];
then
	rig=$1
	do=$2
	echo $do $rig >> $log
	gpio=$(grep $rig database.txt | cut -d ":" -f2)

	#Exports pin to userspace
	echo Gpio: $gpio >> $log
	echo $gpio > /sys/class/gpio/export
	sleep 1

	#cat '/sys/class/gpio/export'
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
			echo "Error in 2nd arg <do>" >> $log
			;;
	esac


	sleep $time

	cat "/sys/class/gpio/gpio"$gpio"/value"

	# Sets pin to low
	echo "0" > "/sys/class/gpio/gpio"$gpio"/value"
else
	rig=$1
	do=$2
	echo "Set arguments!" >> $log
	echo "rig: $rig | Do: $do" >> $log
fi
echo "=======END======" >> $log
