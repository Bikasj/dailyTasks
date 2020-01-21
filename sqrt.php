<?php
echo "<form action='' method='POST'>";
echo "Enter any number: <br>";
echo "<input type='text' name='num'><br>";
echo "<input type='submit' name='submit'><br></form>";

if(isset($_POST['submit']))
{
$num=$_POST['num'];
if($num==0 || $num==1)
	echo "Square root of number".$num." is :".$num;
else
{
	$n=1;$res=0;
	while($num!=$res) 
	{	$n++;
		$res=$n*$n;
		
	}
	echo "Square root of number ".$num." is :".$n;
}
}

?>
