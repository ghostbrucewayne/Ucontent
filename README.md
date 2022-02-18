# Ucontent

## CONNECTION AND DATABASE CONFIGURATION CAN BE CHANGED IN "connection.php" file

$host = "localhost"  
$username = "id11475309_form123"  
$password = "pass@123"  
$dbname = "id11475309_form123"  

### TABLE CONFIGURATION  

#### Create table register with columns:
1. title [varchar (10)], NOT NULL
2. name  [varchar (50)], NOT NULL
3. email [varchar (100)], NOT NULL, PRIMARY KEY
4. mobile [varchar (20)], NOT NULL
5. password [varchar (50)], NOT NULL

#### Create table contentadd with columns:
1. content_id int(10), NOT NULL, PRIMARY KEY, auto_increment
2. contenttype varchar(30), NOT NULL
3. content text, NOT NULL
4. email varchar(30), NOT NULL

##### CHECK HERE: https://ucontent.000webhostapp.com/
