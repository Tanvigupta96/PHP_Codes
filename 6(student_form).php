<!--6.1 was  to  create  form  to enter  student  information  through  php  including  the 
Following  information :Name,DOB,Programme,Email id,Contact  number  and  Photo-->
<?php 

$conn=mysqli_connect('localhost','root','','stu_db');

// define variables and set to empty values
$nameErr = $dobErr = $emailErr = "";
$_name = $_dob = $_programme = $_email = $_contactno = $file_name = $imagename = $target_path = "";

/*"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" */
if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
  $_name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_name)) {
      $nameErr = "Only letters and white space allowed"; 
    }

$_email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }

$_dob = test_input($_POST["dob"]); //validation required-range

$_programme = test_input($_POST["prog"]);

$_contactno = test_input($_POST["number"]); 

/*if (!empty($_FILES["img"]["name"])) 
{ $file_name=$_FILES["img"]["name"];
$imagename=$_FILES["img"]["tmp_name"];
$target_path = "C:/xampp/htdocs/practicals/uploaded_img/".$file_name;

  if(move_uploaded_file($imagename, $target_path))
   { */
    $query = "INSERT INTO stu_details (name,dob,prog,email,num,submission_date) 
              VALUES ('$_name','$_dob','$_programme','$_email','$_contactno',curdate())";
              
              //check for new record
              if (mysqli_query($conn, $query)) {
              echo "<br>"."Response recorded successfully";
              } else {
               echo "Error: ". "<br>" . mysqli_error();
              }
/*}
else
              {
                echo "Error: ". "<br>" . mysqli_error();
              }

}*/ }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

mysqli_close($conn);
 ?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8" name="Form" autocomplete="on" />
<title>FORM</title>
</head>
<body>
<form action="6(student_form).php" enctype="mutipart/form-data" method="post">

	<table style font =12px Tahoma; border ="1">
		<tbody>
			<tr>
				<td>
	Name:<input type="text" name="name" value="<?php echo $_name;?>" required /><br>
	<span class="error"> <?php echo $nameErr;?></span>
<br>

	
	DOB:<input type="date" name="dob" value="<?php echo $_dob;?>" required /><br>
	<span class="error"> <?php echo $dobErr;?></span>
<br>

	
	Pogramme:<input list="prog" name= "prog" value="<?php echo $_programme;?>" required /> 
<datalist id= "prog">
  <option value= "B.tech CSE">
  <option value= "B.tech IT">
  <option value= "B.tech MECH.">
  <option value= "B.tech ECE">
  <option value= "B.Arch">
  <option value= "MCA IT">
  <option value= "M.Tech">
</datalist> 
<br><br>

select your favourite color: <input type="color" name="favcolor"> <br>

<br>


email: <input type="text" name="email" name="email" value="<?php echo $_email;?>" autocomplete= "off" placeholder= "abc@example.com" required />
<span class="error"> <?php echo $emailErr;?></span> <br>
<br>


password: <input type="password" name="password" maxlength="8"> <br>
<br>

Contact No.: 
<input type="text" pattern="[0-9]{10}" name="number" max= "10" value="<?php echo $_contactno;?>" placeholder= "12345 67890" autocomplete="off" required />
<br>


Photo: <input type="file" name="img" value="<?php echo $_pic;?>" /> <br>
<br>

<input type="reset" name="reset">

<input type="submit" name="submit">
</td>
</tr>
</tbody>
</table>
</form>
</body>
</html>
