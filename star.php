<?php
echo "<form action='' method='POST'>";
echo "<input type='text' name='num' >";
echo "<input type='submit' name='submit'>";
echo "</form>"; 

if(isset($_POST['submit']))
{
$n=$_POST['num'];
$g=$n-1;
for($i=0;$i<$n;$i++)
{
		for($j=0;$j<$g;$j++ )
		{
			echo"&nbsp&nbsp";
		}
		for($j=0;$j<=$i;$j++)
		{
			echo "*&nbsp&nbsp";
		}
		echo "<br>";
		$g--;
}
} 
?>