data = open("processed_homonyms.txt","r").readlines()

p="sun"		 
for line in data:
	[w1,d1,pos1,w2,d2,pos2]=line.strip().split("\t")
	if(w1==p):
		print(w2)
		break
	elif(w2==p):
		print(w1)
		break