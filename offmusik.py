import os, RPi.GPIO as GPIO
import sys

os.system('pkill -9 -f playmusik4.sh')
os.system('killall omxplayer.bin')

sys.exit("off") 
