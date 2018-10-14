

import os
from send_to_web import *
from bootstrap import *

# TODO not working, check it again // or it works only for outside servers

def ping_server():

    '''
    http://127.0.0.1:8000/report/server
    '''
    response = os.system("ping -c 1 " + url)

    # check if there was found any
    if response == 0:
        return True
    else:
        return False



'''
:returns dict,bool
'''
def sendToServer(messages):

    # isReachable = ping_server()
    #
    # if not isReachable:
    #     return False

    # add a list with messages to encrypt, in order to make a more secured system

    st_to = {'enc': "Te kam sjelle nje mesazh nga serveri!"}

    for k,v in messages.items():
            st_to[k] = v


    val = 0
    try:
        val = send_data_to_main_server(st_to)

        # print(val)
        # return a  json reson response
        return val
    except Exception:
        print("Sorry there was a problem with the server       \t")
        # print(val)
        return False


def sendImagesToServer(imagename):
    send_image_to_main_server(imagename)



# example of the usage
# print(sendToServer({'data':"asigja"}))
