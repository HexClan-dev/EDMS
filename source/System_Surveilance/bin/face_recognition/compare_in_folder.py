

import os
from compare_faces import CompareFaces
from bootstrap import *

'''
 if the pictures is found then it show it & return true 
'''

def compareWithOtherPictures(imageName):

    #initialize the found images with False
    found = False
    fname = ''

    # print(imageName)
    cmpfc = CompareFaces(imageName)


    for file in os.listdir(images_path):
        if file.endswith(".jpg") or file.endswith(".png") or file.endswith(".jpeg"):

            try:
                sim = cmpfc.compareImages(images_path + file)
            except Exception:
                continue

            if sim:
                fname =images_path + file
                # image = imread("./faces/"+file)
                #plt.imshow(image)

                return (True,file)


    if not found:
        return (False)
    return (True,fname)
