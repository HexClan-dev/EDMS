

import sys

sys.path.append('bin/')
sys.path.append('bin/face_recognition/')
sys.path.append('bin/server/')
sys.path.append('bin/manage_log/')

import threading
import read_from_camera as cam
from server_handle import *
import time
import save_logs


def TurnCameraOn():

    print('Turning On camera observation')
    save_logs.save_messaes_to_logs('Turning On camera observation')

    cam.start_imaging()


def OpenServer():
    print('Starting server')
    save_logs.save_messaes_to_logs('Starting server')
    time.sleep(1)
    clientHandler()


th1 = threading.Thread(target=TurnCameraOn)
th2 = threading.Thread(target=OpenServer)

th1.start()
th2.start()


