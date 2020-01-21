<?php 
Class Boy{
	public  $name1;
	protected $name2;
	private $name3;
	public function __construct($name1,$name2,$name3)
	{
	$this->name1=$name1;
	$this->name2=$name2;
	$this->name3=$name3;
	}
	public function data1(){
	echo $this->name3."<br>"; //private 
	}}
Class Girl extends Boy{
	public function data2(){
	echo $this->name2."<br>";//protected
	}
}


$ab=new Girl("akash","ajay","amar");
$ab->data1();
$ab->data2();
echo $ab->name1."<br>";//public


?>
