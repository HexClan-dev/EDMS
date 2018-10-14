

from socket import *
import os
import base64
from cipher import *
import cv2
import send_to_web
from save_logs import *
import sqlite3
import datetime
from bootstrap import *


def decrypt(msg):

    decodedstr = base64.decodestring(msg)

    # Now you can decrypt it
    decrypted = unpad(cipher.decrypt(decodedstr))

    return decrypted



def saveFaceImage(image_name):
    image = cv2.imread(images_path+image_name)

    # creating a face cascade
    faceCascade = cv2.CascadeClassifier(cascPath)


    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)  # is not working
    # gray = cv2.cvtColor(image, cv2.COLOR_GRAY2RGB)
    # detect the faces in the image

    # Detect faces in the image
    faces = faceCascade.detectMultiScale(
        gray,
        scaleFactor=1.2,
        minNeighbors=5,
        minSize=(30, 30),
        # flags=cv2.cv.CV_HAAR_SCALE_IMAGE
        flags=cv2.CASCADE_SCALE_IMAGE
    )

    if len(faces)!=1:
        print('Be aware to have only one face')
        os.remove(images_path + image_name)
        return False
    else:
        for (x, y, w, h) in faces:

            cv2.rectangle(image, (x-10, y-60), (x + w + 10, y + h + 20), (0, 255, 0), 2)

            # cv2.rectangle(img, (x, y), (x + w, y + h), (255, 255, 255))

            sub_face = image[y-60:y + h + 20, x-10:x + w + 10]


            # remove the full image retrieved from the web server
            os.remove(images_path+image_name)

            # save the cropped image
            cv2.imwrite(images_path+image_name, sub_face)

            print("Image_Saved!!")
        return True

def getDt(format_v):
    format_v = base64.b64decode(format_v)

    if format_v is '':
        return None

    print(format_v)

    dt  = format_v.split(';')


    dataHolder = {}

    for v in dt:
        fs = v.split(':')

        fs_p = fs[0]
        sc_p = fs[1]

        dataHolder[fs_p] = sc_p

    return dataHolder


def checkIfExists(det_info,cursor):

    sql_member = "SELECT * FROM members " \
                 "WHERE name = '"+det_info['st_name']+"' and surname = '"+det_info['st_surname']+"';"

    cursor.execute(sql_member)
    person = cursor.fetchone()
    print(person)
    if len(person) == 0:
        return False

    return True


def addDB_data(det_info,cursor):

    sql_member = "insert into members (name,surname,image) " \
                 "values ('"+det_info['st_name']+"','"+det_info['st_surname']+"','"+det_info['img_name']+"');"

    if not checkIfExists(det_info, cursor):
        cursor.execute(sql_member)

    # format    type:save;st_name:Nail;st_surname:Spahija;img_name:blablabla.jpeg

def removeDB_data(det_info,cursor):

    sql_member = "delete from members " \
                 "where name='" + det_info['st_name'] + "' and surname = '" + det_info['st_surname']+"');"

    if checkIfExists(det_info,cursor):
        cursor.execute(sql_member)


def removeImage(det_info):
    os.remove(images_path+det_info)
    print("Image was removed")



def saveImage(det_info,conn):
    filename = images_path + det_info['img_name']

    if os._exists(filename):
        return

    res = ''

    while 1:
        data = conn.recv(1024)
        if not data:
            break
        res += data
    imgdata = base64.b64decode(res)

    # student name
      # I assume you have a way of picking unique filenames

    with open(filename, 'wb') as f:
        f.write(imgdata)

    d = saveFaceImage(filename.split('/')[-1])

    if d :
        conn.send('success',len('success'))
    else:
        conn.send('failure',len('failure'))



def sendLogs(det,conn):

    if det['date']== 'today':

        log_name = datetime.date.today()

        try:
            send_to_web.send_files_to_main_server(logs_path + str(log_name))
            save_messaes_to_logs('The log file : '+str(log_name)+' has been sent to Web server')
            # conn.send('success',len('success'))


        except Exception:
            save_messaes_to_logs('ERROR occured, while log file : '+str(log_name)+' has was being sent to Web server')


    else:

        print("Sending the")
        ck = True

        for file in os.listdir(logs_path):
            try:
                send_to_web.send_files_to_main_server(logs_path+str(file))
                save_messaes_to_logs('The log file : '+str(file)+' has been sent to Web server')

            except Exception :
                save_messaes_to_logs('ERROR occured, while log file : '+str(file)+' has was being sent to Web server')
                ck = False


        # if ck:
        #     conn.send('success', len('success'))
        # elif not ck:
        #     conn.send('failure', len('failure'))


def clientHandler():

    s = socket(AF_INET, SOCK_STREAM)
    s.bind((HOST, PORT))
    s.listen(4)

    while True:
        conn, addr = s.accept()

        try:
            connection = sqlite3.connect(db_path)
            # enable the cursor
            cursor = connection.cursor()

        except Exception:
            exit("The connection with the database could not be made!")


        print(addr, "is connected")

        try:
            data = conn.recv(1024)
            save_messaes_to_logs('Message Readed from the Web server')
        except Exception as v:
            #  save the error at the file
            save_messaes_to_logs('ERROR occured, while creating a communication pipe to Web server')
            save_messaes_to_logs(v)

            continue
        #  format   type:save;st_name:Nail;st_surname:Spahija;img_name:blablabla.jpeg

        det_info = getDt(data)

        print(det_info)

        if det_info is None:
            continue


        if 'type' in det_info.keys():

            if det_info['type'] == 'save':
                saveImage(det_info,conn)
                addDB_data(det_info,cursor)

            elif det_info['type'] == 'remove':
                removeImage(det_info)
                removeDB_data(det_info,cursor)


            elif det_info['type'] == 'logs':
                sendLogs(det_info,conn)

        connection.commit()
        connection.close()

        conn.close()







