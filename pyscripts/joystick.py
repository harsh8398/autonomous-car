#!/usr/bin/env python

try:
    import RPi.GPIO as GPIO
    import time
    from sys import argv

    GPIO.setwarnings(False)
    upPin = 3
    downPin = 5
    rightPin = 7
    leftPin = 11
    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(upPin, GPIO.OUT)
    GPIO.setup(downPin, GPIO.OUT)
    GPIO.setup(rightPin, GPIO.OUT)
    GPIO.setup(leftPin, GPIO.OUT)

    # storing command line arguement for output logic
    # logic True or False
    up = bool(int(argv[1]))
    down = bool(int(argv[2]))
    right = bool(int(argv[3]))
    left = bool(int(argv[4]))

    GPIO.output(upPin, up)
    GPIO.output(downPin, down)
    GPIO.output(rightPin, right)
    GPIO.output(leftPin, left)

    print("Up: {}, Down: {}, Right: {}, Left: {}"
          .format(up, down, right, left))

except:
    print("Something went wrong!")
