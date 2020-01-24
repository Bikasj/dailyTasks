<?php
Class A{
	static $var;
	public static function increement(){
	  return self::$var++;
	}
}
A::$var=1;
for($i=0;$i<5;$i++)
{
	echo A::increement();
	echo "<br>";
}

?>