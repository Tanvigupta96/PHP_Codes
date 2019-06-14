<!--4.2 was  to  create  a table  and  populate  the tables  in  database.-->
<?php
//was to create table


 //create connection
$conn=mysqli_connect('localhost','root','','mydb2');


//check connection
if(!$conn)
	echo "error".mysqli_connect_error();
else
{
	echo "connected properly";
	echo "<br>";
}



//sql to create table

$sql1="CREATE TABLE student(
roll_no INT(6) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(12),
marks INT(6)
)";

if(mysqli_query($conn,$sql1))
{
	echo "table created successfully";
	echo "<br>";

//inserting data into the table
	$sql2="INSERT INTO student(roll_no,name,marks)
	VALUES('NULL','Lidi','79');";

	$sql2 .="INSERT INTO student(roll_no,name,marks)
	VALUES('NULL','kritika','98');";

	$sql2 .="INSERT INTO student(roll_no,name,marks)
	VALUES('NULL','Gunika','88')";

//var_dump($sql2);
	if ($conn->multi_query($sql2) === TRUE) 
	{
		echo "table's multiple records created successfully";
		echo "<br";
	}

	else
	{
		echo "error inserting data into table";
	}


}

else
{
	echo "error".mysqli_error($conn);
}

mysqli_close($conn);
?>
