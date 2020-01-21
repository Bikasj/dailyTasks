<?php
Class A{
	private $name;
	private $class;
	public function __construct($name,$class)
	{
		//Initialising the variables used in the class
		//it is called as soon as the object is created
	$this->name=$name;
	$this->class=$class;
	
	}
	public function showdetails()
	{
	echo $this->name." studies in class ".$this->class;

	}
} 
$first=new A('Akash','10');
$first->showdetails();
?>