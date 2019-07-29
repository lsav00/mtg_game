#!/usr/bin/python
import requests
import time

#Requires URLs with numbers
#increments numbers & downloads each URL number 

num=1

while num < 10:
	print(num)
	num+=1
	numString=str(num)
	print(numString)
	print(type(numString))
	url3 = numString + ".jpg"
	url2 = "https://deckmaster.info/images/cards/M19/"
	url1 = "https://deckmaster.info/images/cards/M19/" + numString
	url = url1 + ".jpg"
	print(url)
	print(url3)
	r = requests.get(url, allow_redirects=True)
	open(url3, 'wb').write(r.content)
	time.sleep(3)
