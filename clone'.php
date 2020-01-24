<?php
class Perso
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="",  $age=25, $sex='Male')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    public function __clone()
    {
        echo __METHOD__."your are cloning the object.<br>";
    }

}

$person22 = new Perso('John'); // Initially assigned.
$person2 = clone $person22;

var_dump('persion1:');
var_dump($person);
echo '<br>';
var_dump('persion2:');
var_dump($person2);