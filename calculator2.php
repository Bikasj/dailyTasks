<?php
Class Operation{
private $num1;
private $num2;
private $result;
private $operator;
	public function __construct($num1,$num2)
	{
			if($num1>=0 && $num2>=0)
		{$this->num1=$num1;
		$this->num2=$num2;
		
		}
		else
		{echo "Please enter integer values<br>";
		die;
		}
	}
	public function subtract()
	{
		if($this->num1>=$this->num2)
		{
			$res=$this->num1-$this->num2;
			echo "Subtraction is :".$res;
		}
		else
		{
			echo "First number should be greater.<br>";

		}
	}
	public function multiply()
	{
		if($this->num1!=$this->num2)
		{
			$res=$this->num1*$this->num2;
			echo "Multiplication is :".$res;
		}
		else
		{
			echo "Both values should not be equal.<br>";

		}
	}
	public function operator($operator)
	{
		switch($operator)
		{
		Case '+': {$res=$this->num1+$this->num2;
					echo "Addition is ".$res;}
					break;
		Case '/': {$res=$this->num1/$this->num2;
					echo "Division is ".$res;}
					break;
		Case '-': { $this->subtract();}
					break;
		Case '*': {$this->multiply();}
					break;
		default:
					echo "You have not chosen any operator";
	}
		
	}



}
$obj=new Operation(6,3);
$obj->operator('-');


?>
