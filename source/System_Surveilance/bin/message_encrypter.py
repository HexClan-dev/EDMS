from Crypto.Cipher import DES3
import base64

import math as m
import hashlib
from bootstrap import *


def save_the_key_to_a_binary_file(key_tow):
    with open(key,'wb') as keyfile:
        keyfile.write(key_tow)


def countWords(text):

    text_length = len(text)

    ck = (text_length / 8.0)

    if ck.is_integer():
        return text
    else:
        rnd = m.ceil(ck)
        toAdd = ""
        for i in range(int(rnd * 8 - text_length)):
            toAdd += " "
        return (text + toAdd)



def encrypt_3des(clear_text):
    global key

    with open(key, 'rb') as keyfile:
        key = keyfile.read()

        key_byte = key.encode('utf-8')
        key_byte = key_byte.ljust(24, "\0".encode('utf-8'))
        if len(key_byte) > 24:
            key_byte = key_byte[:24]

        # PKCS#5
        pad_len = 8 - len(clear_text) % 8
        padding = chr(pad_len) * pad_len
        clear_text += padding

        cryptor = DES3.new(key_byte, DES3.MODE_ECB)
        data = cryptor.encrypt(clear_text)

        return base64.b64encode(data).decode('utf-8')



def decrypt_3des(data):
    global key

    with open(key, 'rb') as keyfile:
        key = keyfile.read()

        data_byte = base64.b64decode(data.encode('utf-8'))
        key_byte = key.encode('utf-8')
        key_byte = key_byte.ljust(24, "\0".encode('utf-8'))
        if len(key_byte) > 24:
            key_byte = key_byte[:24]

        cryptor = DES3.new(key_byte, DES3.MODE_ECB)
        c_text = cryptor.decrypt(data_byte)

        # PKCS#5
        pad_len = ord(c_text.decode('utf-8')[-1])
        clear_text = c_text.decode('utf-8')[:-pad_len]

        return clear_text


def hand_shake_endcrypt_md5(message):

    m = hashlib.md5()
    m.update(message.encode("utf8"))
    return m.hexdigest()

