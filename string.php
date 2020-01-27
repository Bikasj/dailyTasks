<?php 
echo stripos("I love php, I love php too!","PHP");
echo "<br>";
echo strlen("Hello");
echo "<br>";
echo strnatcasecmp("2Hello world!","10Hello WORLD!");
echo "<br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
echo "<br>";
echo strpos("I love php, I love php too!","php");
echo "<br>";
echo stristr("qq Hello world tt!","hello");echo "<br>";
echo strtolower("Hello WORLD.");echo "<br>";
echo strtoupper("Hello WORLD!");
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo "<br>";
$x = 4;
$y = 4;
print $x + $y;
if (($x == $y) and print("It's true")) {
echo "great";
}

?>