
import sqlite3
import save_logs
from bootstrap import *


def get_the_name_for_found_image_name(image_name):
    try:
        connection = sqlite3.connect(db_path)
        # enable the cursor
        cursor = connection.cursor()
        save_logs.save_messaes_to_logs('It is fetching data from the database')

    except Exception as e:
        save_logs.save_messaes_to_logs(" An erroe occered : \t"+str(e))

        return None


    sql_member = "SELECT name,surname FROM members WHERE image = '"+str(image_name)+"';"

    cursor.execute(sql_member)

    person = cursor.fetchone()

    if len(person) == 0:
        return None

    return str(person[0])+"  "+str(person[1])




