<?php 
abstract class A{
abstract function method1();

}
class B extends A{
	function method1(){
		echo "Abstract method is called.";
						}
}
$obj2=new B();
$obj2->method1();

?>
