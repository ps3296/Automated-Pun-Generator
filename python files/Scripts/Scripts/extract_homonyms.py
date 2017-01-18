from bs4 import BeautifulSoup
import urllib.request
from bs4 import Comment

filename="homonym.html"
page = open(filename,"r").read()
import json
import urllib.request
def get_part_of_speech(word):
    url="http://www.google.com/dictionary/json?callback=get_definition&q=" + word + "&sl=en&tl=en&restrict=pr%2Cde&client=te"
    s=urllib.request.urlopen(url).read().replace("get_definition(","").replace(",200,null)","")
    try:
       return eval(s)['primaries'][0]['terms'][0]['labels'][0]['text']
    except: 
       return "unknown"

soup = BeautifulSoup(page)
results=[]
comments = soup.findAll(text=lambda text:isinstance(text, Comment))
for comment in comments:
    try:
        word1=comment.next_sibling.next_sibling.find_all('td')[1].string.strip()
        def1=comment.next_sibling.next_sibling.find_all('td')[2].string.strip()
        pos1=get_part_of_speech(word1).lower()
        word2=comment.next_sibling.next_sibling.next_sibling.next_sibling.find_all('td')[1].string.strip()
        def2=comment.next_sibling.next_sibling.next_sibling.next_sibling.find_all('td')[2].string.strip()
        pos2=get_part_of_speech(word2).lower()
        print ("\t".join([word1,def1,pos1,word2,def2,pos2]))
    except:
       pass
