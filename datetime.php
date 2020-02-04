<?php
Class datetime{
	public function getdatee()
	{
	echo date("Y-M-D");
	}
	public function gettime()
	{
	print_r(gettime());
	}
}
$obj=new datetime();
$obj->getdatee();
//$obj->gettime();

?>