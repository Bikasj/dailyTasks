<?php
$num=5;
echo factorial($num);
$res=1;
function factorial($num)
{
	if($num<=1)
	{
		return 1;
	}
	else
	{
	return $num*factorial($num-1);
	
	}
}
?>
