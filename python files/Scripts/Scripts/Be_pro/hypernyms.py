from nltk.corpus import wordnet as wn
for ss in wn.synsets('dog'):
   print(ss)
   print(ss.hypernyms())