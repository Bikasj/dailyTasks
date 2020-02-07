<?php
$myfile=fopen("newfile.txt","r+") or die("Unable to open file");
$txt="Hello everyone!\n";
echo fread($myfile,filesize("newfile.txt"));
fwrite($myfile,$txt);

fclose($myfile);


?>
