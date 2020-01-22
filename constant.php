<?php
define("hello","Good morning everyone",false);


Class A{

public function mymethod(){
	echo hello;
	
}
}  
$object1=new A();
$object1->mymethod();
?>
