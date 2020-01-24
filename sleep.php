<?php
class Person
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

    
    public function __sleep() {
        echo "It is called when the serialize() method is called outside the class.<br>";
        $this->name = base64_encode($this->name);
        //echo $this->name;
        return  array('name' , 'age');
        //return array('name','age');
        }
    public function __wakeup() {
            echo "It is called when the unserialize() method is called outside the class.<br>";
            // $this->name = 2;
            // $this->sex = 'Male';
            // There is no need to return an array here.
        
    }

}

$person = new Person('John'); // Initially assigned.
$data= serialize($person);
var_dump(unserialize($data));
echo '<br/>';
?>