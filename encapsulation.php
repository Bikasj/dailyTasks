<?php
class first{
	private $firstname;
	private $lastname;
	public function getmethod($firstname,$lastname){
	$this->firstname=$firstname;
	$this->lastname=$lastname;
	}
	public function display(){
	echo "First name is ".$this->firstname." and last name is ".$this->lastname;
	}
}
$obj=new first;
$obj->getmethod("Akash","Sharma");
$obj->display();
//In this,data members are contained inside the class and are accessible to the class methods and not by the outer end-user 
?>