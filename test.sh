#!/bin/bash
if [ ! -z "$1" ];
then
	echo bash $1 >> log.txt
else
	echo "No arg" >> log.txt
fi