
import cv2
import os
import compare_in_folder as CP
import numpy as np
import sys
from bootstrap import *


'''
    detecting the faces on the picture and checking on
    the faces folder in order to compare that picture with other pictures 
    on the  
'''


def save_a_temporary_image(cv2,face_to_save,f_name):
    cv2.imwrite(f_name, face_to_save)


def compare_TO_others_in_folder(fname):

    try:
        res = CP.compareWithOtherPictures(fname)
        if res[0]:
            image_original_name = res[1]
            return image_original_name
        else:
            return False

    except Exception:
        print("")
        return None


def save_to_the_notMembers_Folder(cv2,face_image,fname,cnt):

    # =======================================
    # defining the fileName
    face_file_name = tmpPath+str(cnt) + ".jpg"

    # save the image
    cv2.imwrite(face_file_name, face_image)

    # TODO every output will be saved at the log files

    # print("The image faces , were saved on the not members dir")
    # ========================================









