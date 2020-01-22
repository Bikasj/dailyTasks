<?php
$n=5;
$g=4;
for($i=0;$i<$n;$i++)
{
		for($j=0;$j<$g;$j++ )
		{
			echo"&nbsp;";
		}
		for($j=0;$j<=$i;$j++)
		{
			echo "*&nbsp;";
		}
		echo "<br>";
		$g--;
} 
?>