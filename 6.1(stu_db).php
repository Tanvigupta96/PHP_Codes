<?php

//WAS to create a database and connect to it using php

$servername='localhost';
$username='root';
$password='';

//create connection
$conn=mysqli_connect($servername, $username, $password);

//check connecion
if(!$conn)
	echo "error ".mysqli_connect_error();
else
{
	echo "connected properly";
	echo "<br>";
}

// Create database
$sql = "CREATE DATABASE stu_db";
if (mysqli_query($conn, $sql)) {
    echo "<br>"."Database created successfully";
} else {
    echo "<br>"."Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
