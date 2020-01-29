<html>
<body>
<form method="POST" action="">
First number :<input type="text" name="num1"><br>
Second number :<input type="text" name="num2"><br>
<input type="submit" value="+" name="add">
<input type="submit" value="-" name="sub">
<input type="submit" value="*" name="mult">
<input type="submit" value="/" name="div">
</form>
</body>

<?php
if((isset($_POST['add'])) || (isset($_POST['sub'])) || (isset($_POST['mult'])) || (isset($_POST['div'])))
{
class calculator{
private $num1;
private $num2;
private $result;
public function addition($num1,$num2)
{
$this->num1=$num1;
$this->num2=$num2;
$result=$this->num1+$this->num2;
echo $result;
}
public function subtraction($num1,$num2)
{
$this->num1=$num1;
$this->num2=$num2;
$result=$this->num1-$this->num2;
echo $result;
}
public function multiplication($num1,$num2)
{
$this->num1=$num1;
$this->num2=$num2;
$result=$this->num1*$this->num2;
echo $result;
}
public function division($num1,$num2)
{
$this->num1=$num1;
$this->num2=$num2;
if($this->num2==0){
echo "Sorry ,Error in input.";}
else{
$result=$this->num1/$this->num2;
echo $result;
}
}
}
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$obj=new calculator;
if(isset($_POST['add']))
{
$obj->addition($n1,$n2);
}
if(isset($_POST['sub']))
{
$obj->subtraction($n1,$n2);
}
if(isset($_POST['div']))
{
$obj->division($n1,$n2);
}
if(isset($_POST['mult']))
{
$obj->multiplication($n1,$n2);
}
}
?>
</html>
