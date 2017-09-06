# CSC-4996-TODO-Application
Pooja Chaku
fh0865
CSC 4996/7

Name of task: TODO Application
Estimated # of hours: 30hr
Actual time spent: 25hr
Issues: Had a decent amount of trouble figuring out all the technology to use and how to use it. Took me a while to 

understand how a server worked locally along with my PHP code. At one point XAMPP would not allow me to start the MySQL 

server becuase I had a different server already occupying that port, that issue took the longest to solve because I didn't 

know what was happening.

__________________________________________________________________________________________________
Deployment Guide:

1. Download:
  -Eclipse Neon
  -XAMPP
  -MySQL
  -Apache
2. Start XAMPP, click start on the MySQL and Apache servers.
3. Click ADMIN on next to eh MySQL in XAMPP.
4. Press the "SQL" tab on the Admin page and enter this line of code:
	create table tasks (task_num int auto_increment primary key, task varchar(100));
   then press go.
5. Star Eclipse, have all the PHP files loaded on here.
6. Click the green play button while on the "main.php" file.
7. The app should have sucessfully started.
____________________________________________________________________________________________________

Notes:
The app works just as the problem statement describes. However, it does not contain three tables or three classes like the 

documentation asked for, only one table and no classes. So, as Prof. Sam requested, I have included the three classes and 

extra two tables in the diagrams to show what they would be if I were to impliment them.



