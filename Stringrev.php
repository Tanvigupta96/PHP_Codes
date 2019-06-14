<!--To  perform  the  following  operations  on  the  strings:
a)reverse  a string
b)palindrome
c)CamilCase Display of  string  input through keyboard.-->


<?php
$string = "Tannu";
print "The string you entered is:";
print $string;
print "<br>";
$len=strlen($string);
print "The revese of the string is:";
for( $i = $len-1; $i>=0; $i-- )
{
	print $string[$i];
}
?>

