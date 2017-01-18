#!/usr/bin/python

import random, re, urllib.request, sys


def read_file(fname):
    with open(fname) as f:
        return f.read()

## Corpus Building

raw_html_homophone_list = urllib.request.urlopen("http://python.org").read()

homophone_list = map(lambda x: x.split()[1:],raw_html_homophone_list.split("<p>")[1].split("<br>"))

punny_word_dict = dict([(x[0],x[1:]) for x in homophone_list if len(x) > 1])
    
corpus = ' '.join([read_file(x) for x in sys.argv[1:]])


## Joke Generation

keep_going = True
while keep_going:
    joke, punchline = None, None
    while joke == None and punchline == None:
        word = random.choice(punny_word_dict.keys())
        complement = random.choice(punny_word_dict[word])
        try:
            joke = random.choice(re.findall(r"[A-Z][^.?!]+? %s [^.?!]+?\?"%(word),corpus))
            punchline = random.choice(re.findall(r"[A-Z][^.?!]+? %s [^.?!]+?[.!]"%(complement),corpus))
        except IndexError:
            continue
    print(joke)
    print(punchline)
    print(word, complement)
    print("------------------------------------------------------------")