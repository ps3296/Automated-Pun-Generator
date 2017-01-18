import nltk
from nltk.corpus import wordnet
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.tokenize import PunktSentenceTokenizer
import mysql.connector
import random
con = mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m = con.cursor()
mylist = [1,12]
i= (random.choice(mylist))
#i=5
q = "SELECT * FROM wordpair"
m.execute(q)
res = m.fetchall()
j="a"
for el in res:
 if i==el[0]:
  j=el[1]
  print(j)
example=str(j) 

import re

keyword1=keyword2=None

mystr = 'This is a string, with words!'
wordList = re.sub("[^\w]", " ",  example).split()

for i in range(0,2):
 print(wordList[i])
 m=wordList[i]
 synonyms = []
 antonyms = []

n=wordList[0]

m="screem"
for ss in wordnet.synsets(n):
   print("hypernyms of ",ss)
   print(ss.hypernyms())
 
for syn in wordnet.synsets(m):
 for l in syn.lemmas():
  synonyms.append(l.name())
  if l.antonyms():
   antonyms.append(l.antonyms()[0].name())
			
 print(set(synonyms))
#print(set(antonyms))



 list2 = [m]
 list = []
 c="None"
 for word1 in synonyms:
    for word2 in list2:
        wordFromList1 = wordnet.synsets(word1)
        wordFromList2 = wordnet.synsets(word2)
        #if wordFromList1 and wordFromList2:
		#print(wordFromList1[0])
        s = wordFromList1[0].wup_similarity(wordFromList2[0])
        if s!=None:
         list.append(s)
      #  else:
       #  synonyms.remove(synonyms[list.index(s)])

 print(set(list))

 mo=0.0
 for maxi in list:
     if maxi>mo and maxi!=1.0:
       mo=maxi

 if keyword1==None:
  keyword1=(synonyms[list.index(mo)])
  print (keyword1)
 else:
  keyword2=(synonyms[list.index(mo)])
  print (keyword2)

 
print ("QUESTION : \n")  
print ("What is ",keyword1," and ",keyword2)
print ("\n ANSWER :")



data = open("processed_homonyms.txt","r").readlines()

		 
for line in data:
	[w1,d1,pos1,w2,d2,pos2]=line.strip().split("\t")
	if(w1==m):
		print(w2)
		break
	elif(w2==m):
		print(w1)
		break

		
con.close()