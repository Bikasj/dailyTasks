<?php
$i=0;
$num1=0;
$num2=1;
echo $num1."<br>".$num2;
fibo($num1,$num2,$i);
function fibo($num1,$num2,$i)
{
	if($i==8)
		{
			return 0;
		}
	else
		{
			$temp=$num1+$num2;
			$num1=$num2;
			$num2=$temp;
			echo "<br>".$temp;
			$i++;
			fibo($num1,$num2,$i);
		}
}


?>
