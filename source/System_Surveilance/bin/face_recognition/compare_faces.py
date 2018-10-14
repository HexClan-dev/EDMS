
import face_recognition as fr
import os.path as pth
from bootstrap import *


class CompareFaces:


    def __init__(self,knownImage):
        self.__img1 = knownImage


    def compareImages(self,img2):

        # print(pth.isfile(self.__img1))
        #
        # if not pth.exists(self.__img1) or not pth.exists(self.__img2) :
        #     return None

        known_image = fr.load_image_file(self.__img1)
        unknown_image = fr.load_image_file(img2)

        biden_encoding = None
        unknown_encoding = None

        results = (False)

        if len(known_image)>0:
            biden_encoding = fr.face_encodings(known_image)[0]

        if len(unknown_image)>0:
            unknown_encoding = fr.face_encodings(unknown_image)[0]

        if biden_encoding is not None and unknown_encoding is not None:
            results = fr.compare_faces([biden_encoding], unknown_encoding)

        return results[0]
