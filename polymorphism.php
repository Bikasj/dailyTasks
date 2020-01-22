<?php
class maiin{
	function draw(){
	}
}
class A extends maiin{
	function draw(){
		echo "Class A method is called <br>";
	}
}
class B extends maiin{
	function draw(){
		echo "Class B method is called <br>";
	}
}
class C extends maiin{
	function draw(){
		echo "Class C method is called <br>";
	}
}
class D extends maiin{
	function draw(){
		echo "Class D method is called <br>";
	}
}
$obj=array(4);
$obj[0]=new A;
$obj[1]=new B;
$obj[2]=new C;
$obj[3]=new D;
for($i=0;$i<4;$i++)
{
	$obj[$i]->draw();
}



?>