#!/usr/bin/env python

try:
    import RPi.GPIO as GPIO
    import time
    from sys import argv

    GPIO.setwarnings(False)

    GPIO.setmode(GPIO.BOARD)
	GPIO.setup(3,GPIO.OUT)
	GPIO.setup(5,GPIO.OUT)
	GPIO.setup(7,GPIO.OUT)
	GPIO.setup(11,GPIO.OUT)
	
    # storing command line arguement for output logic
    # logic True or False
    top = bool(int(argv[1]))
    down = bool(int(argv[2]))
    right = bool(int(argv[3]))
    left = bool(int(argv[4]))

    print("Top: {}, Down: {}, Right: {}, Left: {}"
          .format(top, down, right, left))
		  
	if(top) :
		GPIO.output(3,True)
		GPIO.output(5,False)
	elif(down) :
		GPIO.output(5,True)
		GPIO.output(3,False)
	elif(top && right) :
		GPIO.output(3,True)
		GPIO.output(5,False)
		GPIO.output(7,True)
		GPIO.output(11,False)
	elif(top && left) :
		GPIO.output(3,True)
		GPIO.output(5,False)
		GPIO.output(7,False)
		GPIO.output(11,True)
	elif(down && right) :
		GPIO.output(3,False)
		GPIO.output(5,True)
		GPIO.output(7,True)
		GPIO.output(11,False)
	elif(down && right) :
		GPIO.output(3,False)
		GPIO.output(5,True)
		GPIO.output(7,False)
		GPIO.output(11,True)
	else :
		GPIO.output(3,False)
		GPIO.output(5,False)
		GPIO.output(7,False)
		GPIO.output(11,False)
		
except:
    print("Something went wrong!")
