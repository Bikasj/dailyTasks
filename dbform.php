<html>
<head>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
First Name: <input type="text" name="firstname"><br>
Last Name : <input type="text" name="lastname"><br>
Address : 	<input type="text" name="address"><br>
Image : 	<input type="file" name="image"><br>
Bloodgroup : <select name="bloodgroup">
				<option name="none"> Select Bloodgroup </option> 
				<option name="A+"> A+ </option> 
				<option name="A-"> A- </option> 
				<option name="B+"> B+ </option> 
				<option name="B-"> B- </option> 
				<option name="AB+"> AB+ </option> 
				<option name="O+"> O+ </option> 
				<option name="AB-"> AB- </option> 
				<option name="O-"> O- </option> 
				</select><br>
			<button name="submit">Submit </button>
</form>

<?php
if(isset($_POST['submit']))
{
	$servername="localhost";
	$username="root";
	$password="1234";
	$dbname="learn";
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$address=$_POST['address'];
	$image=$_POST['image'];
	$bloodgroup=$_POST['bloodgroup'];
	$tbname="form_data";


if (($_FILES['image']['name']!=""))
		{

		 $target_dir = "images/";
		 $file = $_FILES['image']['name'];
		 $path = pathinfo($file);
		 $filename = $path['filename'];
		 $ext = $path['extension'];
		 $temp_name = $_FILES['image']['tmp_name'];
		 echo $path_filename_ext = $target_dir.$filename.".".$ext;

		/*if (file_exists($path_filename_ext)) 
			{
			 echo "Sorry, file already exists.";
			 }*/
		 	/*else
			 {*/
			 move_uploaded_file($temp_name,$path_filename_ext);
			 echo "Congratulations! File Uploaded Successfully.";
			 /*}*/

}


	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$conn )
	{
		die ("Connection failed.".mysqli_connect_error());
	}
        $sql="CREATE DATABASE IF NOT EXISTS ".$dbname;

	if(!mysqli_query($conn,$sql))
	{
		echo "Sorry,error in creating database.".mysqli_error($conn);
	}
mysqli_select_db($dbname, $conn);

		$sql2="CREATE TABLE IF NOT EXISTS ".$tbname."  (FirstName char(20),LastName char(20),Address varchar(30),Image varchar(40), BloodGroup varchar(5))";

	if(!mysqli_query($conn,$sql2))
	{
		echo "Error in creating table .".mysqli_error($conn);
	}
        $sql3="INSERT INTO ".$tbname."(FirstName,LastName,Address,Image,Bloodgroup) values('".$first_name."','".$last_name."','".$address."','".$image."','".$bloodgroup."')";

	if(mysqli_query($conn,$sql3))
	{
		echo "Inserted successfully.";
		//header('Location :'.$url);
	}
	else
	{
		echo "Error in inserting.".mysqli_error($conn);
	}
mysqli_close($conn);
}



?>
</body>

</html>