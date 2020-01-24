<?php
class Person
{                             
    function say()
    {
           echo "Hello, world!<br>";
    }     

    function __call($funName, $arguments)
    {
          echo "The function you called：" . $funName ; 
          print_r($args); 
          echo "does not exist!！<br>";                   
    }                                         
}
$Person = new Person();       
$Person->run("teacher");
$Person->eat("ajay", "vijay");             
$Person->say();