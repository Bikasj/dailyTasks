<?php 
Class first{

	function method1($par)
	{
	echo "Method1 is called by ".$par;
	}
	function method2($par2)
	{
	echo "<br> Method1 is called by ".$par2;
	}
}
$a=new first();
$a->method1('A');
$a->method2('B');
?>