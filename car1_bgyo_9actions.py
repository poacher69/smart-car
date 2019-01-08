#!/usr/bin/python
# -*- coding: utf-8 -*

from flask import Flask, render_template
from flask import request, url_for,redirect
#from flask import request, url_for
import time
import RPi.GPIO as GPIO


OUT1_PIN = 29
OUT2_PIN = 31
OUT3_PIN = 32
OUT4_PIN = 33
GPIO.setmode(GPIO.BOARD)
GPIO.setup(OUT1_PIN, GPIO.OUT)
GPIO.setup(OUT2_PIN, GPIO.OUT)
GPIO.setup(OUT3_PIN, GPIO.OUT)
GPIO.setup(OUT4_PIN, GPIO.OUT)

#GPIO.setwarnings(False) 
GPIO.output(OUT1_PIN, GPIO.LOW)
GPIO.output(OUT2_PIN, GPIO.LOW)
GPIO.output(OUT3_PIN, GPIO.LOW)
GPIO.output(OUT4_PIN, GPIO.LOW)

app = Flask(__name__)

##flask API @192.168.58.138:5000####################################################

@app.route('/')
def hello_world():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	return 'hello world'

@app.route('/forward', methods=['GET','POST'])
def go_forward():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.HIGH)
	GPIO.output(OUT3_PIN, GPIO.HIGH)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	return 'Go_forward Ok.' #WORK!
	# print 'Go_forward Ok.'
	# ClementServer_IP = "192.168.137.88"
	# return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)

@app.route('/backward', methods=['GET','POST'])
def go_backward():
	GPIO.output(OUT1_PIN, GPIO.HIGH)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.HIGH)
	return 'Go_backward Ok.'
	#print 'Go_backward Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/left_stop', methods=['GET','POST'])
def left_then_stop():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.HIGH)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	time.sleep(0.2)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	return 'left_then_stop Ok.'
	#print 'left_then_stop Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/left_go', methods=['GET','POST'])
def left_then_go():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.HIGH)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	time.sleep(0.6)
	GPIO.output(OUT2_PIN, GPIO.HIGH)
	return 'left_then_go.'
	#print 'left_then_go.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/left_always', methods=['GET','POST'])
def left_always():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.HIGH)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	return 'left_always Ok.'
	#print 'left_always Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/right_stop', methods=['GET','POST'])
def right_then_stop():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.HIGH)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	time.sleep(0.2)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	return 'right_then_stop Ok.'
	#print 'right_then_stop Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/right_go', methods=['GET','POST'])
def right_then_go():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.HIGH)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	time.sleep(0.6)
	GPIO.output(OUT3_PIN, GPIO.HIGH)
	return 'right_then_go Ok.'
	#print 'right_then_go Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/right_always', methods=['GET','POST'])
def right_always():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.HIGH)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	return 'right_always Ok.'
	#print 'right_always Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)
@app.route('/stop', methods=['GET','POST'])
def stop_car():
	GPIO.output(OUT1_PIN, GPIO.LOW)
	GPIO.output(OUT2_PIN, GPIO.LOW)
	GPIO.output(OUT3_PIN, GPIO.LOW)
	GPIO.output(OUT4_PIN, GPIO.LOW)
	return 'Stop_car Ok.'
	#print 'Stop_car Ok.'
	#ClementServer_IP = "192.168.137.88"
	#return redirect("http://"+ClementServer_IP+"/PHP_practice/member_cart_ver1/Development_combine_ver1/cart_V1/car_caontrol/carControl_FLASK_jumppage_UNDONE.php", code=302)

if __name__ == '__main__':
	app.run(debug=True, host='0.0.0.0')    