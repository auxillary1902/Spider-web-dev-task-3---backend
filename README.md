Overview:
This is a online notice board for students of Nit. It has a simple user interface where any registered member can either add,delete a notice or simply view the notices present based on their status-as either an administrator or a student.This was completely devoloped using PhP, Html and Css for a little bit of styling for the front end part of the website. Since this is a back end task, i've kept the front end pretty simple and functional.


Server routes:





Database And the tables used for storing data:
Only one database called 'studentinfo' was used  on MySql. This contained 2 tables used by the web service- 1)'studentdata': This table was used for storing the details including Name,Roll number,Username,hashed password,Department and the Status of every person having access to the web service including administrators. 2)'noticeboard' : This table was used to store the details of the various notices added by administrators including Notice Number,Notice Type and the notice itself. This table can only be changed by administrators who can add and delete existing notices while students can only view the data on the noticeboard.

Build instructions For Setting up the Wamp server to make it work:
1)Clone the github repository to a local folder on your computer.
2)install WAMP server and set it up using instructions from the link:
https://make.wordpress.org/core/handbook/tutorials/installing-a-local-server/wampserver/
3)Make sure that before you install the WAMP server you download and install Microsoft c++ redistributable files upto year 2015,both 32 and 64 bit versions, otherwise upon installation the WAMP server will not load. Also after installing make sure Apps like Skype are closed else all the services of the server will not work as it does have a port previously occupied by ,say Skype.
4)go the installation directory/www folder/. create a new folder and name it anything.(say studentassignments).Open the folder and paste the html and php files of the repository inside this.
5)Open the web browser used in installing the WAMP server, go to localhost/phpmyadmin/ and login using the username 'root' with no password.Click on the Database and create a new database called 'studentinfo'. Inside it, create the 2 tables mentioned above with the following attributes:

table 'studentdata' fields are:
1)FirstName   - Varchar(100)
2)LastName   - Varchar(100)
3)RollNo   - INT(PRIMARY KEY)
4)Department - Varchar(25)
5)Username - Varchar(100)
6)Password - Varchar(100)
7)Status - Varchar(100) default value- 'student'

table 'noticeboard' fields are:
1)Type  - Varchar(25)
2)Notice - text
3)NoticeNo  - INT(PRIMARY KEY)



6)Once the required sql tables have been created open the browser and go to : localhost/studentassignments/openingpage.html and follow the links and instructions given further to register yourself as a student or login as an admin.

Atleast one person the studentdata table needs to be an admin as only admins can post notices and has the ability to change the status of a student to an admin. Also when you register yourself, you get only a 'student' status by default which can only be changed by an admin, if there was no admin, no body can be an admin after that.
to insert one entry to the 'studentdata' table, open the table options via localhost/phpmyadmin/ and go to the insert option. Give values to other fields and set the Status field to 'admin'. After this go to the browser and try to login using the admin id. then you can either create a new account and view notices or login using this admin account to add and delete notices.
(or)Mysql query:INSERT INTO studentdata VALUES('Sudarshan','Parthasarathy','106116095','CSE','cr7suna98','c6628b95ef29fdef512c455ecb86c40e','admin');

screenshots of the various pages in the service are:

![](/screenshots/loginpage.png)
![](/screenshots/adminloginpage.png)
![](/screenshots/adminpanelpage.png)
![](/screenshots/noticeboard.png)
![](/screenshots/openingpage.png)
![](/screenshots/signuppage.png)
![](/screenshots/studentdashboard.png)
![](/screenshots/studentlist.png)
![](/screenshots/admindashboard.png)
![](/screenshots/adddeleteadmin.png)