<!--2.1 was  to  create  function  in  php  and  call  that  function  in  the  page. 
-->

<html>
<head>
	<title>
function
</title>
	
</head>
<body>
	<?php
	//defining a php function
	function writemessage()
	{
		echo "a function to print something on the output screen";
	}

	function addfunction($num1,$num2)
	{
		echo "<br>passing arguements in function:";
		$sum=$num1+$num2;
		print "<br>sum of these two numbers is:";
		print "$sum";
	}


	function addfive(&$num){
	$num+=5;
	print "<br>now,the number is: $num";
	}

	function addsix(&$num){
	$num+=6;
	print "<br>now,the number is: $num";
	}

	function sumfunction($num1,$num2,$num3){
		$summ=$num1+$num2+$num3;
		return $summ;
	}	

	function printme($param = NULL)
	{
		print $param;
	}

	function sayhello()
	{
		print "say_hello";
	}




	//calling a php funciton 

	writemessage();
	addfunction(10,20);
	$orignum=10;
	addfive($orignum);
	addsix($orignum);
	$summ=sumfunction(10,20,30);
	print "<br>the sum of three numbers is:$summ";
	print "<br>this is a test";
	printme();
	print "<br>dynamic function call:";
	$function_holder="sayhello";
	$function_holder();
	?>

</body>
</html>
