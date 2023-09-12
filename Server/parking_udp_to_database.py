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

port = 50000
serverSocket = socket(AF_INET, SOCK_DGRAM)
serverSocket.bind(('', port))
print ('UDP server is activated (port ' + str(port) + ')\n')

msgCnt = 1
while True:
    try:
        messageIn, clientAddress = serverSocket.recvfrom(4096)

        ts = time.localtime()
        print('\033[0;34;40mUDP server (' + str(port) + ') Poruka#', str(msgCnt))
        print(time.strftime('%Y-%m-%d %H:%M:%S\033[0;37;40m', ts))
        
        data = json.loads(messageIn.decode("utf-8"))
        print ("    Uredjaj:    ", data["device"]["value"])
        print ("    Osvetljenost:    ", data["lum"]["value"], "lux")
        
        if data["lum"]["value"] < 50:
            free = False
        else:
            free = True
        
        mycursor = mydb.cursor()
        mycursor.execute("UPDATE smart_parking SET free_spot=" + str(free) + " WHERE spot_number= " + str(data["device"]["value"]))
        mydb.commit()
        
        serverSocket.sendto(bytearray("OK!", "utf-8"), clientAddress)
    
        msgCnt += 1
    except:
        print('Greska!')