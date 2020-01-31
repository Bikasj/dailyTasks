<?php 
interface first{
	public function method1();
	public function method2();
}
abstract class A{
abstract function method3();
}
class B extends A implements first{
	
	function method1(){
		echo "Interface method is called.\n";
		
	}
	function method2(){
		echo "Interface method is called.\n";
		
	}
	function method3(){
		echo "Abstract method is called.\n";
						}
}
$obj=new B();
$obj->method1();
$obj->method2();
$obj->method3();

?>
