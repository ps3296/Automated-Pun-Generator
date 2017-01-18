import mysql.connector
con =  mysql.connector.connect(user ="root", password="", host="localhost", database="pungen")
m = con.cursor()


def indefinite_article(w):
    if w.lower().startswith("a ") or w.lower().startswith("an "): return ""
    return "an " if w.lower()[0] in list('aeiou') else "a "

def camel(s):
    return s[0].upper() + s[1:]

def joke_type1(d1,d2,w1,w2):
    return "What do you call " + indefinite_article(d1) + d1 + " " + d2 + "? " + \
           camel(indefinite_article(w1)) + w1 + " " + w2 + "."

def joke_type2(d1,d2,w1,w2):
    return "When is " + indefinite_article(d1)  + d1 + " like " + indefinite_article(d2) + d2 + "? " + \
           "When it is " + indefinite_article(w2)  + w2 + "."

data = open("processed_homonyms.txt","r").readlines()

for line in data:
    [w1,d1,pos1,w2,d2,pos2]=line.strip().split("\t")
    if pos1=='adjective' and pos2=='noun': 
        ss1= (joke_type1(d1,d2,w1,w2))
        print (ss1)
        try:
                print("Trying to execute query")
                a="chintan"
                m.execute("""INSERT INTO trial(question) VALUES(a)""")
                print("Query Executed")
                con.commit()
        except:
                print("Query didnt execute")
                con.rollback()
'''
elif pos1=='noun' and pos2=='adjective': 
        ss2= (joke_type1(d2,d1,w2,w1))
	try:
	    x.execute("INSERT INTO trial VALUES (?)", (ss2))
    	    conn.commit()
	except:
            conn.rollback()
    elif pos1=='noun' and pos2=='noun':
        ss3= (joke_type2(d1,d2,w1,w2))
        try:
            x.execute("INSERT INTO trial VALUES (?)", (ss3))
	    conn.commit()
	except:
            conn.rollback()

        ss4= (joke_type2(d2,d1,w2,w1))
	try:
	    x.execute("INSERT INTO trial VALUES (?)", (ss4))
	    conn.commit()
	except:
            conn.rollback()
            
'''

con.close()
