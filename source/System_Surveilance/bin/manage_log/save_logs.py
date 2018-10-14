
import os
import datetime
from bootstrap import *


log_name = datetime.date.today()
write = None

if os.path.exists(logs_path+str(log_name)):
    file = open(logs_path+str(log_name), 'w+')
    file.close()

# the the logs to the file
TOEDIT = False

def save_start_end_log(start=None,end=None):
    global write,log_name,TOEDIT
    print("Saving the logs"+logs_path+str(log_name))

    while TOEDIT:
        pass

    TOEDIT = True

    write = open(logs_path+str(log_name), 'a')

    line = ''

    if start is not None:
        line = "the system started up at time -> " + str(datetime.datetime.now())+'\n'
    if end is not None:
        line = "the system ended at time -> " + str(datetime.datetime.now())+'\n'

    write.writelines(line)

    write.close()

    TOEDIT = False


def save_messaes_to_logs(messages):
    global write,log_name,TOEDIT

    print("Saving the logs"+logs_path+str(log_name))

    while TOEDIT:
        pass

    TOEDIT = True

    write = open(logs_path+str(log_name), 'a')

    line = "!->   \t  "+str(messages)+ '\t:\t'+ str(datetime.datetime.now())+'\n'

    write.writelines(line)

    write.close()

    TOEDIT = False



def save_log(persons_name,time):
    global write,log_name,TOEDIT
    print("Saving the logs"+logs_path+str(log_name))

    while TOEDIT:
        pass

    TOEDIT = True

    write = open(logs_path+str(log_name), 'a')

    line = "person:"+persons_name+" time:"+time+'\n'
    write.writelines(line)

    write.close()

    TOEDIT = False



'''
    Read all the lines and return all of them
'''


def read_log(persons_name,time):
    global write

    if write is None:
        write = open(logs_path+str(log_name), 'r+')

    ln = ''

    for line in write:
        ln += line

    write.close()
    return ln




