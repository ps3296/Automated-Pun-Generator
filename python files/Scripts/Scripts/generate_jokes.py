import mysql.connector
con = mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m1 = con.cursor()


def indefinite_article(w):
    if w.lower().startswith("a ") or w.lower().startswith("an "): return ""
    return "an " if w.lower()[0] in list('aeiou') else "a "

def camel(s):
    return s[0].upper() + s[1:]

def joke_type1(d1,d2,w1,w2):
    q = ("INSERT INTO generated1 (question,answer) VALUES(%s,%s)")
    question="What do you call " + indefinite_article(d1) + d1 + " " + d2 + "? " 
    answer=camel(indefinite_article(w1)) + w1 + " " + w2 + "."
    joke=(question,answer)
    m1.execute(q,joke)
    con.commit()
    return "What do you call " + indefinite_article(d1) + d1 + " " + d2 + "? " + \
    camel(indefinite_article(w1)) + w1 + " " + w2 + "."
		   

def joke_type2(d1,d2,w1,w2):
    q = ("INSERT INTO generated1 (question,answer) VALUES(%s,%s)")
    question="When is " + indefinite_article(d1)  + d1 + " like " + indefinite_article(d2) + d2 + "? "
    answer="When it is " + indefinite_article(w2)  + w2 + "."
    joke=(question,answer)
    m1.execute(q,joke)
    con.commit()
    return "Question : When is " + indefinite_article(d1)  + d1 + " like " + indefinite_article(d2) + d2 + "? \n" +
    "When it is " + indefinite_article(w2)  + w2 + "."

   
data = open("processed_homonyms.txt","r").readlines()

for line in data:
     [w1,d1,pos1,w2,d2,pos2]=line.strip().split("\t")
     if pos1=='adjective' and pos2=='noun': 
         print (joke_type1(d1,d2,w1,w2))
     elif pos1=='noun' and pos2=='adjective': 
         print (joke_type1(d2,d1,w2,w1))
     elif pos1=='noun' and pos2=='noun': 
         print (joke_type2(d1,d2,w1,w2))
         print (joke_type2(d2,d1,w2,w1))
		 
y = "SELECT * FROM generated1"
m1.execute(y)
res = m1.fetchall()
for el in res:
 if example==el[2]:
  print("Question :\n",el[1],"\nAnswer :\n",el[2])
