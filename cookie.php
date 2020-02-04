<?php
$cookie_name="kumar";
$cookie_value="Bikassssssssssssssssss";
setcookie("name","Bikaaas",time() + 3600,"/","",0); 
//setcookie($cookie_name,$cookie_value,time() + 36000000,"/","",0); 
echo "Cookie is set for username ".$_COOKIE["name"] ;

print_r($_COOKIE);print_r($_COOKIE["name"]);


?>
