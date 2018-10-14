
import cv2
from bootstrap import *

import logging as log
import datetime as dt
from time import sleep
from save_logs import *
from image_recognition import *
from db_management import *
from camera_security import *


anterior = 0
cnt=0

faceCascade = cv2.CascadeClassifier(cascPath)
bodyCascade = cv2.CascadeClassifier(cascPath_full_body)


# TODO -> need to check in order to define overriding the images saved

def check_file_size(path):

    path = os.path.abspath(path)

    size = 0
    for e in os.scandir(path):
        if e.is_file():
            size += e.stat().st_size

    return size


def saveFaceImage(frame, x, y, w, h):
    sub_face = frame[y:y + h, x:x + w]
    FaceFileName = save_temp_images_path+'temp/'+"face_" + str(cnt) + ".jpg"
    cv2.imwrite(FaceFileName, sub_face)
    return  FaceFileName


'''
    same the frame to the tmepFullImages
'''
def saveWholeImage(frame):
    global cnt

    image_name = save_temp_images_path +'tmepFullImages/'+"face_" + str(cnt) + ".jpg"

    cv2.imwrite(image_name, frame)
    cnt+=1

    return image_name


def checkForSimilarities(image_name):

    res = compare_TO_others_in_folder(image_name)

    if res is None:
        print('No face was detected')
        # send_image_to_main_server(image_name)
        send_image_to_main_server(image_name)

        os.remove(image_name)
        os.remove(tmpPath+image_name.split('/')[-1])
        return None
    if not res:
        return False

    else:
        # check for sql the name of the student with that image Name

        try:
            student_name = get_the_name_for_found_image_name(res)
        except Exception:
            print("Not found in the database")
            save_messaes_to_logs('The student could ')
            # sendToServer({'data':"An unregistered person entered the dromitory entrance"})
            send_image_to_main_server(image_name)

            return False

        if len(student_name)==0:
            print('The student image was not found in the database')

            # sendToServer({'data':"An unregistered person entered the dromitory entrance"})
            send_image_to_main_server(image_name)

        else:

            print("The student name is : "+student_name)

            # sendToServer({'data':"An unregistered person entered the dormitory entrance"})
            # send_image_to_main_server(image_name)

            return student_name



def processImages(faces,frame):
    global anterior

    # Draw a rectangle around the faces
    for (x, y, w, h) in faces:

        # save the images if the faces were found
        # saveFaceImage(frame, x, y, w, h)

        # check the width and the height of the rectangle to define, how close the face is
        if w >70 and h >70:
            # saveFaceImage(frame, x, y, w, h)
            cv2.rectangle(frame, (x - 10, y - 60), (x + w + 10, y + h + 20), (red, green, blue), border_size)
            # saveWholeImage(frame)
            img_name = saveFaceImage(frame,x,y,w,h)
            font = cv2.FONT_HERSHEY_SIMPLEX

            # write the student name -> returned from the image processing
            res = checkForSimilarities(saveWholeImage(frame))

            if res is None:
                continue

            if not res:
                # cv2.putText(frame,'Not Part of the Dorm',(x,y-5), font, 1, (200, 0,0), 1)
                save_log('Not a member',str(datetime.datetime.now()))

                #  move the full image to the not Members Folder
                os.rename(tmpFullImages_path+img_name.split('/')[-1],not_members+img_name.split('/')[-1])



            else:
                # cv2.putText(frame, res, (x, y - 5), font, 1, (200, 0, 0), 1)
                save_log(res, str(datetime.datetime.now()))
                os.remove(img_name) # remove the image which exists as a member

            os.remove(tmpFullImages_path + img_name.split('/')[-1])


    if anterior != len(faces):
        anterior = len(faces)
        log.info("faces: " + str(len(faces)) + " at " + str(dt.datetime.now()))



def start_imaging():

    save_start_end_log('', None)


    # configure the log
    # for every date a new log is going to be shown
    # log.basicConfig(filename='webcam.log', level=log.INFO)
    video_capture = cv2.VideoCapture(0)


    # using a stream video
    # video_capture.open("http://169.254.197.26/")

    while True:

        if not video_capture.isOpened():
            print('Unable to load camera.')

            sleep(5)
            save_messaes_to_logs('Unable to load camera.')
            break

        # Capture frame-by-frame
        ret, frame = video_capture.read()

        gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

        faces = faceCascade.detectMultiScale(
            gray,
            scaleFactor=1.2,
            minNeighbors=5,
            minSize=(40, 40),
            flags=cv2.CASCADE_SCALE_IMAGE
        )


        # # upper_body
        # eye = bodyCascade.detectMultiScale(
        #     gray,
        #     scaleFactor=1.2,
        #     minNeighbors=5,
        #     minSize=(40, 40)
        # )

        isBlur = cv2.Laplacian(frame, cv2.CV_64F).var()

        # print()

        if isBlur >= 70 and len(faces)>0 :
            print('Checking')
            processImages(faces, frame)

        if cv2.waitKey(1) & 0xFF == ord('q'):
            save_start_end_log(None, '')
            video_capture.release()
            cv2.destroyAllWindows()
            exit(1)

        # Display the resulting frame
        cv2.imshow('Video', frame)

    # When everything is done, release the capture
    video_capture.release()
    cv2.destroyAllWindows()

    save_start_end_log(None,'')





