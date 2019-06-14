<?php
$conn=mysqli_connect('localhost','root','','mydb2');
if(!$conn)
	{  echo "Error";
mysqli_connect_error();
}
else { echo "Connection established";}
//$imagename=date("d-m-Y")."-".time().$ext;
//var_dump($_FILES);
if (!empty($_FILES["abc"]["name"])) 
{ 
	$file_name=$_FILES["abc"]["name"];
	$imagename=$_FILES["abc"]["tmp_name"];
	$target_path = "C:/xampp/htdocs/tannuproject/uploaded_image/".$file_name;

//$dataTime = date("Y-m-d H:i:s");
	if(move_uploaded_file($imagename, $target_path)) {

		$query = "INSERT INTO student VALUES('NULL','pp','80' ,'".$target_path."')";
		//var_dump(mysqli_query($conn,$query));
		if(mysqli_query($conn, $query)) {
			echo "<br>". "File successfully uploaded.";
		}
		else
		{
			echo "<br>". "Error saving file to database";
		}
	}
	
}
else echo "<br>". "Please upload a file";
?>
