<!--5.2 was  to  make  the  form  editable  by  displaying   the  old  information  and  saving  the  updated  information  in the database-->
<?php
//was to update information in php


//establish connection
$conn=mysqli_connect("localhost","root","","mydb2");

//check connection
if(!$conn)
{
	echo "error".mysqli_error();
}
else
{
	echo "connected properly";
	echo "<br>";
}	

$sql="UPDATE student set name='doe' where roll_no=10";

if(!mysqli_query($conn,$sql))
{
	echo "error".mysqli_error($sql);
}

else
	{echo "record updated successfully";
}

mysqli_close($conn);
?>
