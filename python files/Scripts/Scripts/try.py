import nltk
from nltk.corpus import wordnet 
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.tokenize import PunktSentenceTokenizer
import mysql.connector
import random
con = mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m = con.cursor()
mylist = [1,3,5,6,7,8,9,10,11,13,14,15,16,17,18,19]
#i= (random.choice(mylist))
i=1
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
lol1=[]
hypernyms1 = [] 
print("\nHypernyms for ",n," ARE:")
for ss in wordnet.synsets(n):
   for l in ss.hypernyms():
          hypernyms1.append(l.name())
          lol1.append(l)
          
print(set(hypernyms1))


lol2=[]
hypernyms2 = []
print("\nHypernyms for ",m," ARE:")
for ss in wordnet.synsets(m):
   for l in ss.hypernyms():
          hypernyms2.append(l.name())
          lol2.append(l)

print(set(hypernyms2))
print(set(lol2))

if flag==1:
 word2=wordnet.synset("cabbage.n.01")
 list = []
 c="None"
 for word1 in lol2:
         s = word1.wup_similarity(word2)
         if s!=None:
          list.append(s)

# print(wordFromList2)
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
   print ("Closest word to:",n," is ",keyword1)
   
 keyword2=d1

'''
else:
  keyword2=(synonyms[list.index(mo)])
  print (keyword2)

 '''
print ("\nQUESTION :")  
print ("What do you get when you cross ",keyword1," and ",keyword2,"?")
print ("\n ANSWER :")
print (example)
		
con.close()




'''
import nltk
from nltk.corpus import wordnet 
m="spring"
n="cabbage"
for ss in wordnet.synsets(n):
 print(ss)
# for l in ss.lemmas():
 for x in ss.hypernyms():
      print (x)
      for y in x.lemmas():
       print ("lemma ",y)
 print("\n")
'''
