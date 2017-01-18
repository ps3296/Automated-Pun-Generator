import nltk
from nltk.corpus import wordnet 
import mysql.connector
con = mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m1 = con.cursor()
example="spring cabbage"
q = "SELECT * FROM wordpair"
m1.execute(q)
res = m1.fetchall()
j="a"
for el in res:
 if example==el[1]:
  print(el[0],el[1],el[2],el[3])
