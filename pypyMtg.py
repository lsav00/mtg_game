import json
import os


thefile = input("Enter filename, e.g., WildBounty_ELD.json")

with open(thefile, 'r', errors="ignore") as myfile:	
  jsonData = json.load(myfile)

print(type(jsonData))

#for x in jsonData:
#	print(x)

print("code: " + jsonData["code"])
mainboard_list= jsonData["mainBoard"]

# c is the counter to increment the id
c=0

#os.system("cls")

print ("mydata = [")
for x in mainboard_list:
	name = x["name"] 
	scryfallid = x["scryfallId"]
	mytype=x["types"]
  
	# increment the id
	c+=1
  
	if mytype[0] == "Land":
		print("{\"name\":\""+name+"\", \"scryfallid\":\""+ scryfallid[0] + "/" + scryfallid[1] + "/" +  scryfallid+"\", \"array\":\"outline\", \"previous\":\"outline\", \"land\":1, \"id\":" + str(c) + " },")
	
  else:
		print("{\"name\":\""+name+"\", \"scryfallid\":\""+ scryfallid[0] + "/" + scryfallid[1] + "/" +  scryfallid+"\", \"array\":\"outline\", \"previous\":\"outline\", \"land\":0, \"id\":" + str(c) + " },")
print("\n]")
