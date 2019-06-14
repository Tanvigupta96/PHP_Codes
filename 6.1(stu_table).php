<?php

//create connection
$conn=mysqli_connect('localhost', 'root', '', 'stu_db'); 

//check connection
if(!$conn)
	echo "error ".mysqli_connect_error();
else
{
	echo "connected properly";
	echo "<br>";
}

//sql to create table
$sql="CREATE TABLE stu_details(
id INT(6) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(12) NOT NULL,
dob VARCHAR(10) NOT NULL,
prog VARCHAR(10) NOT NULL,
email VARCHAR(20) NOT NULL,
num INT(10) NOT NULL,
images_path VARCHAR(100) NOT NULL,
submission_date DATE
)";

//check table
if(mysqli_query($conn,$sql))
{
	echo "<br>"."table created successfully";
}

else
	echo "<br>"."error".mysqli_error($conn);


mysqli_close($conn);

?>
