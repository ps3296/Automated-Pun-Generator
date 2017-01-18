import mysql.connector
con=mysql.connector.connect(
user="root",
password="",
host="localhost",
database="pungen")
m=con.cursor()
q="SELECT * FROM wordpair"
m.execute(q)
rez=m.fetchall()
for el in rez:
 print(el)