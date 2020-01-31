<?php
$str1="peeksforpeeks";
$n=count($str1);
$z=0;
$st="";
$str=str_split($str1);
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$i;$j++)
	{
		if($str[$i]==$str[$j])
			break;
	}
	if($i==$j)
		$st[$z++]=$str[$i];
		
}
$l=implode("",$st);
echo $l;
?>
