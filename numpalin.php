<?php
$num=1001;
$num2=$num;
$rem=0;
$r=0;
while($num2>0)
	{
		$rem=$num2%10;
		$r=$rem+$r*10;
		$num2=(int)($num2/10);
		
		
	}
		
	if($num==$r)
	{  echo "Palindrome";//palindrome
	}
	else
	{echo "Not palindrome"; 
	}
?>
