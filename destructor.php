<?php
Class A{
	private $name;
	private $class;
	public function __construct($name,$class)
	{
	$this->name=$name;
	$this->class=$class;
	
	}
	
	public function __destruct()
	{		//destroys the object after performinng the action
		echo "<br>Destroying the object along with its memory....";
	}
	public function showdetails()
	{
	echo $this->name." studies in class ".$this->class;

	}
} 
$first=new A('Akash','10');
$first->showdetails();
?>