import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
GPIO.setup(7,GPIO.IN,pull_up_down=GPIO.PUD_DOWN)
GPIO.setup(11,GPIO.OUT)
GPIO.setup(13,GPIO.OUT)
GPIO.output(11,True)
current=GPIO.input(7)
previous=current

def printState(current):
        print 'GPIO pin %s is %s ' % (7, 'High' if current else  'Low')

printState(current)
while True:
        current=GPIO.input(7)
        if current != previous:
		GPIO.output(13,True)
                printState(current)
	else:
		while GPIO.input(7):{
		GPIO.output(13,False)}
        previous=current
        time.sleep(0.1)
GPIO.cleanup()

