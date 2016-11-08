
from __future__ import print_function
import MySQLdb
import eyed3
import os
from mutagen import File

db= MySQLdb.connect("localhost","root","","music",charset='utf8',unix_socket="C:/xampp/mysql/mysql.sock")
language ='english'

path = "C:/xampp/htdocs/music/res/Music Albums"
folders = next(os.walk(path))[1]
cusor = db.cursor()

for i in folders:
    filepath = path + "/" + i
    print(filepath)
    filesnames = next(os.walk(filepath))[2]
    for j in filesnames:
        if(j[-1:-4:-1] == "3pm"):
            print(j)
            audio = eyed3.load(filepath+"/"+j)
            artist=audio.tag.artist
            album = audio.tag.album
            pathd =audio.path
            title =audio.tag.title
            artwork =File(filepath+"/"+j).tags['APIC:'].data
            with open(filepath+"/image.jpg", 'wb') as img:
               img.write(artwork) # write artwork to new image
            artPath = filepath+"/image.jpg"


            cusor.execute('''INSERT into songs (Name,Artist,Album,npath,artPath,language)
                              values (%s,%s,%s,%s,%s,%s)''',
                          (title, artist,album,str(pathd),artPath,language))







db.commit()
# Execute the SQL command

# Fetch all the rows in a list of lists.

# disconnect from server
#db.close()
