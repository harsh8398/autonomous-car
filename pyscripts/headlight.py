#!/usr/bin/env python

try:
    import RPi.GPIO as GPIO
    import time
    from sys import argv
    
    GPIO.setwarnings(False)

    headlight = 3

    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(headlight, GPIO.OUT)

    # storing command line arguement for output logic
    OutputLogic = bool(int(argv[1]))
    GPIO.output(headlight, OutputLogic)

    print("Headlight Turned {}".format("ON" if OutputLogic else "OFF"))

except:
    print("Something went wrong!")
