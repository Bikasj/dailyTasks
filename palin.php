<?php
$str="madam";
$flag=0;
$n=strlen($str);
$str1=str_split($str);
for($i=0;$i<$n;$i++)
{
for($j=$n-1;$j>=0;$j--)
	{
		if($str1[$i]=$str1[$j])
			{
			$flag=0;
			}
		else
			{
			$flag=1;
			}
	}
}
if($flag==0)
	echo "Palindrome";
else
	echo "Not palindrome";
	
?>
