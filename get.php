<?php
class foo
{
    function __get($n)
    {
        print_r($n);
    }
    function __set($m, $a)
    {
    	/*$this->m=$a;
        echo $this->m;*/
    }
}

$test = new foo;
//$var = 'value got by magic get function';
//$test->
$test->$var='aa';
$test->$c='value got by magic get function';
//$test->$var();
?>