<?php 
/ set connection variables
db_host = 'localhost';
db_user = 'root';
db_password = 'root';
db_db = 'dbc'


/connection to server & database 
 connection = mysqli_connect(db_host, db_user, db_password, db_db);
 /check connection
 if(mysqli_connect()):
 	printf("connect failed: %s\n", mysqli_connect())
 	exit();
 endif;

 v1 = post['v1'];
 v2 = post['v2'];
 v3 = post['v3'];
 v4 = post['v4'];
 v5 = post['v5'];
 v6 = post['v6'];

 if(isset(post['save'])){
 	echo "<br>";
 	mysql_query ="";
 	mysql_query = "select * from dbc WHERE 1 ";
 	result = mysqli_query(connection, mysql_query);
    
    mysql_query = "INSERT INTO dbc (v1, v2, v3, v4, v5, v6) values ('v"

 }

 ?>