<?php
$string1="malayalam";
$j=0;
$string2=$string1;
print "the string u entered is: $string1";
$len=strlen($string1);
for( $i=$len-1; $i>=0; $i-- )
{
	$string1[$i];

}

print "<br>the string after reverse is: $string1";

if($string1==$string2)
	{
		print "<br>string you entered is palindrome";

	}
	else
		print "<br>string is not palindrome";
?>
