<!--Exercise 5:
5.1 was  to retrieve  the  information  from  the  database  and  display.-->
<?php
//wap to retrieve information from database and display
$servername="localhost";
$username="root";
$password="";
$dbname="mydb2";

//create connection
$conn=mysqli_connect("localhost","root","","mydb2");

//check connection
if(!$conn)
{

	echo "error".mysqli_connect_error();
}

else
{
	echo "connected properly";
	echo "<br>";
}

$sql="SELECT roll_no,name,marks FROM student";
$result=mysqli_query($conn,$sql); //or i can use $result=$conn->query($sql);

if(mysqli_num_rows($result) > 0)     //function num_rows checks if there are more than 0 rows returned
{ 				
	//output data of each row
	echo "roll_no &nbsp;&nbsp;&nbsp name &nbsp;&nbsp;&nbsp; marks ";
	echo "<br>";
	while($row = mysqli_fetch_assoc($result))
	{
		echo $row["roll_no"].$row["name"].$row["marks"]."<br>";
	}
}
else
{
	echo "0 results";
}

$conn->close();
?>
