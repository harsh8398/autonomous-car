#!/usr/bin/env python

try:
    import RPi.GPIO as GPIO
    import time
    from sys import argv

    GPIO.setwarnings(False)
    topPin = 3
    downPin = 5
    rightPin = 7
    leftPin = 11
    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(topPin, GPIO.OUT)
    GPIO.setup(downPin, GPIO.OUT)
    GPIO.setup(rightPin, GPIO.OUT)
    GPIO.setup(leftPin, GPIO.OUT)

    # storing command line arguement for output logic
    # logic True or False
    top = bool(int(argv[1]))
    down = bool(int(argv[2]))
    right = bool(int(argv[3]))
    left = bool(int(argv[4]))

    GPIO.output(topPin, top)
    GPIO.output(downPin, down)
    GPIO.output(rightPin, right)
    GPIO.output(leftPin, left)

    print("Top: {}, Down: {}, Right: {}, Left: {}"
          .format(top, down, right, left))

except:
    print("Something went wrong!")
