<?php 
Class Parent1{
	private $boy;
	private $girl;
	public function method1($a,$b){
	echo "Parent1 has  ".$a." boys and  ".$b." girls<br>";
	}
}
Class Parent2 extends Parent1{
	private $boy1;
	private $boy2;
	public function method2($a1,$b2){
	echo "Parent2 has ".$a1." boys and ".$b2." girls"; 
	}
}
$Object1=new Parent2();//object created  for child class so that it can also access parent class methods
$Object1->method1(2,3);//Inherited function
$Object1->method2(3,4);
?>
