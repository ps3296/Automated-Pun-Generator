def indefinite_article(w):
    if w.lower().startswith("a ") or w.lower().startswith("an "): return ""
    return "an " if w.lower()[0] in list('aeiou') else "a "

def camel(s):
    return s[0].upper() + s[1:]

def joke_type1(d1,d2,w1):
    return "What do you call " + indefinite_article(d1) + d1 + " " + d2 + "? " + \
           camel(indefinite_article(w1)) + w1 + "."

def joke_type2(d1,d2,w1):
    return "When is " + indefinite_article(d1)  + d1 + " like " + indefinite_article(d2) + d2 + "? " + \
           "When it is ."

data = open("trial_homonyms.txt","r").readlines()

for line in data:
     [w1,d1,pos1,d2,pos2]=line.strip().split(",")
     if pos1=='adjective' and pos2=='noun': 
         print (joke_type1(d1,d2,w1))
     elif pos1=='noun' and pos2=='adjective': 
         print (joke_type1(d2,d1,w1))
     elif pos1=='noun' and pos2=='noun': 
         print (joke_type2(d1,d2,w1))
         print (joke_type2(d2,d1,w1))
		 
