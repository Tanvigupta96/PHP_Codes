<!--Exercise 4:
4.1 was  to  create  a database  and  connect  to  it using  PHP.-->
<?php
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password);
//check connection
if(!$conn)
	echo "error ".mysqli_connect_error;
else
{
	echo "connected properly";
	echo "<br>";
}

 $sql= "CREATE DATABASE mydb2";

if(mysqli_query( $conn, $sql))
{	echo "database created";
	echo "<br>";
}
else
{
	echo "error".mysqli_error($conn);
}

 mysqli_close($conn);

?>
