<!--2.3 was to create an  Associative  array  in PHP and  display  the  same.-->
<html>
<head>
	<title> associative array</title>
</head>
<body>
<?php
/* first method to create associative array*/
$salary=array("ridham"=>1000,"rahul"=>5000,"zanib"=>2000);
echo "salary of ridham=".$salary['ridham']. "<br>";
echo "salary of rahul=".$salary['rahul']. "<br>";
echo "salary of zanib=".$salary['zanib']. "<br>";

/*second method to create associative array*/
$salary['ridham']="high";
$salary['rahul']="medium";
$salary['zanib']="low";
echo "salary of ridham=".$salary['ridham']. "<br>";
echo "salary of rahul=".$salary['rahul']. "<br>";
echo "salary of zanib=".$salary['zanib']. "<br>";
?>
</body>
</html>
