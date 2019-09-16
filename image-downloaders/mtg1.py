#!/usr/bin/python

import requests
import time
import json

#https://api.scryfall.com/cards/named?fuzzy=vraska+the+unseen

#get the info from the deck-json file
with open("FacelessMenace_C19.json", "r", errors="ignore") as myfile:
	jsonData = json.load(myfile)

mystring = ""
#for each card in deck-json
for x in jsonData.get(list(jsonData)[1]):
	#print(x.get('name'))
	#create a scryfall url with the card name
	url = "https://api.scryfall.com/cards/named?fuzzy=" + x.get('name')
	url = url.replace(" " , "+")
	print(url)
	time.sleep(.5)
	#request the url
	r = requests.get(url, allow_redirects=True)
	#assign the json response to myjson
	myjson = r.json()
	#print what u got
	imgurl = myjson.get('image_uris').get('normal')
	imgid = myjson.get('multiverse_ids')[0]
	imgpic = str(imgid) + ".jpg"
	print(imgpic)
	print(myjson.get('name'), myjson.get('multiverse_ids')[0], imgurl)
	#request the image
	req=requests.get(imgurl, allow_redirects=True)
	open(imgpic, 'wb').write(req.content)
	mystring += "{\"name\":\"" + myjson.get('name') + "\", \"multiverseid\":\"" + str(myjson.get('multiverse_ids')[0]) + "\", \"array\":\"outline\", \"previous\":\"outline\", \"land\":0, \"tap\":0, \"id\":1 },"
mystring = mystring[:-1]
print(mystring)	
input("stop")
