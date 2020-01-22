<?php
interface first{
	public function method1();
	public function method2();
}
class A implements first{
	public function method1(){
	echo "First method is called <br>";
	}
	public function method2(){
	echo "Second method is called <br>";
	}
}
$obj=new A;
$obj->method1();
$obj->method2();
?>