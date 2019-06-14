<!--2.2)was to create  5  different  classes  and  include  them  in one  file. Create  object  of  the  class  and execute  something  using  their  constructors.-->
<html>
<head>
	<title>
		5 classes
	</title>
</head>
<body>
	<?php
	class first{
		
		#function first(){
		#	echo "you are in the class 1's constructor";
		#}
		function first(&$num){
			$num+=6;
		}
	}

	class second{
		
		function second(){
			echo "you are in the class 2's constructor";
		}
		
	}
	class third{
		function third(){
			echo "you are in the class 3's constructor";
		}
	}


	class fourth{
		function fourth(){
			echo "you are in the class 4's constructor";
		}
	}

	class fifth{
		function fifth(){
			echo "you are in the class 5's constructor";
		}
		
	}


	?>


</body>
</html>

2(ii).obj.php file:
<?php
include("2(ii).php");
$origvalue=10;
$ob2=new first($origvalue);
echo "now the value is:".$origvalue."<br>";
$ob3=new second();echo "<br>";
$ob4=new third();echo "<br>";
$ob5=new fourth();echo "<br>";
$ob6=new fifth();echo "<br>";
?>
