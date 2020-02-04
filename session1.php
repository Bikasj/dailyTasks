<?php
session_start();
$_SESSION["firstname"]="Bikas";
$_SESSION["lastname"]="Jaiswal";
echo "Session variables are set<br>";
echo "Click <a href='session2.php'>here </a> to view to go to next page. ";
?>
