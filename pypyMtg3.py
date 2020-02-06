import json
import os

#################################################

with open("ashioktxt.txt", 'r', errors="ignore") as myfile:
	lines = myfile.read().splitlines()

mylines=[]
for line in lines:
	if len(line) > 0:
		if line[0].isdigit():
			mylines.append(line)
counts=[]
names=[]
for s in mylines:
	t = s.split(" ", 1)
	u = int(t[0])
	counts.append(u)
	names.append(t[1])
d = dict(zip(names, counts))
#print(d)

#################################################




#thefile = input("Enter filename")
with open("Ashiok_THB.json", 'r', errors="ignore") as myfile:	
	jsonData = json.load(myfile)

#print(type(jsonData))
#for x in jsonData:
#	print(x)
#print("code: " + jsonData["code"])
mainboard_list= jsonData["mainBoard"]

c=0


#os.system("cls")
newstr=[]
newstr1=[]

for x in mainboard_list:
	name = x["name"] 
	scryfallid = x["scryfallId"]
	mytype=x["types"]
	#add the counter to increment the id
	if mytype[0] != "Land":
		newstr.append("{\"name\":\""+name+"\", \"multiverseid\":\""+ scryfallid[0] + "/" + scryfallid[1] + "/" +  scryfallid+"\", \"array\":\"outline\", \"previous\":\"outline\", \"land\":0, ")
	else:
		newstr.append("{\"name\":\""+name+"\", \"multiverseid\":\""+ scryfallid[0] + "/" + scryfallid[1] + "/" +  scryfallid+"\", \"array\":\"outline\", \"previous\":\"outline\", \"land\":1, ")
		
d2 = dict(zip(newstr, counts))
#print(d2)

final=[]

for e in d2:
	ct=0
	while ct < d2[e]:
		final.append(e + "\"tap\":0, \"id\":" + str(c) + " }")
		ct+=1
		c+=1

finalfinal=""
finalfinal+="mydata=["
for zz in final:
	finalfinal+=zz + ", \n"
finalfinal1=finalfinal[:-3]
finalfinal2=finalfinal1+"]"
print(finalfinal2)

