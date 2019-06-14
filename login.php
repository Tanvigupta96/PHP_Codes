<!--Exercise 3:
3.1 was  to   create  a  simple  login  form  in   PHP   and  post  the  information  on  another  page  for  display.-->
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="POST" action="3(i)show.php">
<b>username:</b><input type="string" name="str">
<br><b>password:</b><input type="password" name="pass">
<input type="submit" name="submit">
</form>
</body>
</html>

3.1(i)show.php file
<?php
if(isset($_POST["str"]) && isset($_POST["pass"]))
{
	$string=$_POST["str"];
	$password=$_POST["pass"];
	if(!empty($string) && !empty($password))
		{
			print "form submitted successfully";
		} 
	
	else{
		print "please fill the deatils";
}
		}
   ?>
