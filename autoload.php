<?php
function  __autoload($className) {
    include 'newfolder/'.$className.'.php';
    /*if (is_readable($filePath)) {
        require($filePath);*/
    }



    $a = new A();
	$a->s();

?>