
import cv2
import numpy as np
from bootstrap import *

class CompareImages:

    def __init__(self,image1,image2):
        self.__image1 = cv2.imread(image1)
        self.__result = None


    def compare(self,image2):

        image2 = cv2.imread(image2)

        difference = cv2.subtract(self.__image1, image2)

        result = not np.any(difference)
        self.__result = result

        # writing the difference
        cv2.imwrite("./differences/test.jpg", difference)

        return result





