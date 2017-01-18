import nltk
from nltk.corpus import wordnet 
import mysql.connector
from mysql.connector import errorcode
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.tokenize import PunktSentenceTokenizer
import mysql.connector
import random
con = mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m1 = con.cursor()
#mylist = [1,3,5,6,7,8,9,10,11,13,14,15,16,17,18,19,20,21,23,24,25,27,28,29,30,31,32,33,34,35,36]
#i= (random.choice(mylist))
i=7
#i=random.randrange(0,34)
q = "SELECT * FROM wordpair"
m1.execute(q)
res = m1.fetchall()
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

list_syn= []

for j in range(0,2):
 print(wordList[j])
 m=wordList[j]
 synonyms = []
 antonyms = []

n=wordList[0]

data = open("trial_homonyms.txt","r").readlines()
for line in data:
    [w1,d1,pos1,d2,pos2]=line.strip().split(",")
    if w1==n:
        flag=1
        break
    elif w1==m:
        flag=2
        break

#keyword1=d1

if flag==1:
 hypernyms2 = []
 print("\nHypernyms for ",m," ARE:")
 for ss in wordnet.synsets(m):
    for l in ss.hypernyms():
       for x in l.lemmas():
          hypernyms2.append(x.name())
 print(set(hypernyms2))

 
 list2 = [m]
 list = []
 c="None"
 for word1 in hypernyms2:
     for word2 in list2:
         wordFromList1 = wordnet.synsets(word1)
         wordFromList2 = wordnet.synsets(word2)
         s = wordFromList1[0].wup_similarity(wordFromList2[0])
         if s!=None:
          list.append(s)
 
 print("\n\nSimilarity of ",m," word")
 print(set(list))
 mo=0.0
 for maxi in list:
      if maxi>mo and maxi!=1.0:
        mo=maxi

 if keyword2==None:
   keyword2=(hypernyms2[list.index(mo)])
   print ("\nClosest word to ",m," is ",keyword2)
 keyword1=d1

   
elif flag==2:
 hypernyms1 = [] 
 print("\nHypernyms for ",n," ARE:")
 for ss in wordnet.synsets(n):
    for l in ss.hypernyms():
       for x in l.lemmas():
          hypernyms1.append(x.name())
 print(set(hypernyms1))
 
 list2 = [n]
 list = []
 c="None"
 for word1 in hypernyms1:
     for word2 in list2:
         wordFromList1 = wordnet.synsets(word1)
         wordFromList2 = wordnet.synsets(word2)
         s = wordFromList1[0].wup_similarity(wordFromList2[0])
         if s!=None:
          list.append(s)

 print("\n\nSimilarity of ",n," word")
 print(set(list))
 mo=0.0
 for maxi in list:
      if maxi>mo and maxi!=1.0:
        mo=maxi

 if keyword1==None:
   keyword1=(hypernyms1[list.index(mo)])
   print ("\nClosest word to:",n," is ",keyword1)
   
 keyword2=d1


'''
else:
  keyword2=(synonyms[list.index(mo)])
  print (keyword2)

 '''


z = "SELECT * FROM wordpair"
m1.execute(z)
res = m1.fetchall()
for el in res:
 if example==el[1]:
  temp3=el[3]
  '''print("\nBEFORE :",el[0],el[1],el[2],el[3])'''
 
if temp3==0:
 q = ("INSERT INTO generated (question,answer) VALUES(%s,%s)")
 question="What do you get when you cross "+keyword1+" and "+keyword2+"?"
 answer=example
 joke=(question,answer)
 m1.execute(q,joke)
 con.commit()
 
 r = ("UPDATE wordpair SET inserted=%s WHERE word='%s' " % (1, example))
 #temp2=(inserted,temp1)
 m1.execute(r)
 con.commit()

y = "SELECT * FROM generated"
m1.execute(y)
res = m1.fetchall()
for el in res:
 if example==el[2]:
  print("\nQuestion :\n",el[1],"\nAnswer :\n",el[2])

z = "SELECT * FROM wordpair"
m1.execute(z)
res = m1.fetchall()
for el in res:
 if example==el[1]:
  temp3=el[3]
  '''print("\nAFTER :",el[0],el[1],el[2],el[3])'''

'''
print ("QUESTION :")  
print ("What do you get when you cross ",keyword1," and ",keyword2,"?")
print ("\n ANSWER :")
print (example)	'''	

con.close()
