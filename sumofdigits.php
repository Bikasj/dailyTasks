<?php

echo "<form action='' method='POST'>";
echo "Enter any number: <br>";
echo "<input type='text' name='num'><br>";
echo "<input type='submit' name='submit'><br></form>";

if(isset($_POST['submit']))
{
$num=$_POST['num'];
$r=0;
$rem=0;
while($num>0)
{
	$rem=$num%10;
	$r=$r+$rem;
	$num=$num/10;
}
echo "Sum of digits is :".$r;
}


 
?>