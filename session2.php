<?php
session_start();
echo "Your First Name is ".$_SESSION['firstname']." and Last Name is ".$_SESSION['lastname'];
session_destroy();
?>
