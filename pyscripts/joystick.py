#!/usr/bin/env python

try:
    import RPi.GPIO as GPIO
    import time
    from sys import argv

    GPIO.setwarnings(False)

    GPIO.setmode(GPIO.BOARD)

    # storing command line arguement for output logic
    # logic True or False
    top = bool(int(argv[1]))
    down = bool(int(argv[2]))
    right = bool(int(argv[3]))
    left = bool(int(argv[4]))

    print("Top: {}, Down: {}, Right: {}, Left: {}"
          .format(top, down, right, left))

except:
    print("Something went wrong!")
