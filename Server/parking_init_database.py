from socket import *
import time
import mysql.connector
import json

mydb = mysql.connector.connect(
    host = "localhost",
    user = "username",
    password = "password",
    database = "database name"
)

number_of_spots = 120

mycursor = mydb.cursor()
mycursor.execute("DELETE FROM smart_parking")
mycursor.execute("ALTER TABLE smart_parking AUTO_INCREMENT = 1")
for i in range(1, number_of_spots + 1):
    mycursor.execute("INSERT INTO smart_parking (free_spot) VALUES (" + str(True) + ")")
mydb.commit()
        