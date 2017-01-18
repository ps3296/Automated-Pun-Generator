from nltk.corpus import wordnet as wn
hypernyms = []
for ss in wn.synsets('spring'):
   for l in ss.hypernyms():
      for m in l.lemmas():
          hypernyms.append(m.name())

print(set(hypernyms))
   
