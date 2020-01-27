<?php
$arr=array("Apple","Ball","Cat");
echo $arr[1];
echo $arr[2];
echo "<br>";
print_r($arr);
echo "<br>";
$arr1=array("1"=>"Apple","2"=>"Ball","3"=>"Cat");
foreach($arr1 as $key=>$value)
{
	echo $key." and ".$value."<br>";
}

$arr2=array(array("x","y","z"),"a","b","c");
echo $arr2[0][2];


?>