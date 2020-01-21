<?php 
    if(isset($_POST["submit"]))
    {	$filepath=" images/".$_FILES['file']['name'];
        echo"<table border='5' height='40%' width='70%'><tr>";
        echo "<td> Name :-</td><td>".$_POST['name']."</td></tr>";
        echo "<br><tr><td> Email :-</td><td>".$_POST['email']."</td></tr>";
        echo "<tr><br><td> Address :-</td><td>".$_POST['address']."</td></tr>";
        echo "<tr><br><td> City :-</td><td>".$_POST['city']."</td></tr>";
        echo "<tr><br><td> State :-</td><td>".$_POST['State']."</td></tr>";
        echo "<tr><br><td> Country :-</td><td>".$_POST['Country']."</td></tr>";
echo $_FILES["file"]["name"];
echo $filepath;
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
	echo "<tr><br><td colspan='2'><img src=".$filepath." height=200 width=300 />";
}
	echo "</table>";
        //echo "<br>   THANK YOU!!   ";
    }
    
    ?>
