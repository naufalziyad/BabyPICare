#!/bin/bash

FILES=/home/pi/musik/*mp3
count=0
IFS='
'

for f in $(ls ${FILES} | sort -R)
do
	printf "%3d> %s\n" "$count" "$f"
	omxplayer -o hdmi "$f"
	count=$((count+1))
done
