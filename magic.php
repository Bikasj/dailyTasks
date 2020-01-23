<?php 
//sleep(5);
function first(){
echo $var;
unset($GLOBALS['var']);
}

$var="anything";
echo $var;
first();
echo $var;
?>