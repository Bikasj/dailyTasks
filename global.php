
<?php

$a;
$b=1;
function method1()
{
 global $b;
$GLOBALS['a']="nothing works";
}
method1();
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $a;
echo $b;
?>