# pvtsummer2.0
yii framework


how to start:   
copy paste basic.zip to /var/www/html folder. (u might require permissions if u dont have it already)  
extract it there.   
if http://localhost/html/basic/web/ page comes up everything is working fine ad u hav all the necessary tools required.
This url opens up the homepage index.php from which you can navigate to mentor,company or student modules.
eg: http://localhost/basic/web/index.php?r=mentor%2Fcreate

The permission of web/uploads folder should be changed using the command: chmod 777 -R uploads/
The permission of web/uploadsmentor folder should be changed using the command: chmod 777 -R uploadsmentor/

For certain extensions to work download and install composer and use it to generate composer.json file in the basic folder .
refer: https://getcomposer.org/doc/03-cli.md
run the command: composer require 2amigos/yii2-date-picker-widget:~1.0 
so that the datepicker extension is added.


To access the database created in phpmyadmin from yii framework:

open the /var/www/html/basic/config file.   
change the dbname to the name of db u r currently using(doingiteasy).   
change the username and password to ur username and password.
The sql dump is present in doingiteasy.sql file.Import it.


