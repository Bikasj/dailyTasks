<?php
$arr=array(2,4,1,55,33,77);
$count=count($arr);
for($i=0;$i<$count;$i++)
	{
		$key=$arr[$i];
		$j=$i-1;
		while ($j >= 0 && $arr[$j] > $key) 
		{ 
			$arr[$j + 1] = $arr[$j]; 
			$j = $j - 1; 
		} 
		
		$arr[$j + 1] = $key; 
		
	} 
for($i=0;$i<$count;$i++)
	{
		echo $arr[$i]."\n";
	}
		
 
?>
