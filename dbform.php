<html>
<head>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
First Name: <input type="text" name="firstname"><br>
Last Name : <input type="text" name="lastname"><br>
Address : 	<input type="text" name="address"><br>
Image : 	<input type="file" name="image[]" multiple><br>
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
/*
$arr = [];
for($i = 0;$i < 2;$i++){
$image_name = time();
$arr[] = $image_name;
	
}

echo "<pre>";print_r($arr);die;*/
error_reporting(E_ALL);	
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
	if (!is_dir("images")) 
			{	
				 mkdir("/var/www/html/learning/images");
			 }
			 //echo "<pre>";
			 //print_r($_FILES);
				
	$arr=[];
if (($_FILES['image']['name']!=""))
		{
		$count=count($_FILES['image']['name']);
		//echo $count;
		
			//print_r($_FILES);
		 $target_dir = "images/";
		 
	for($i = 0;$i < $count;$i++){

		 
		 $temp=strtotime("now");
		 $file = $_FILES['image']['name'][$i];
		 $path = pathinfo($file);
		 $filename = $path['filename'];
		 $ext = $path['extension'];
		 $temp_name = $_FILES['image']['tmp_name'][$i];
		 $img_name=$filename.$temp.".".$ext;
		 $path_filename_ext = $target_dir.$img_name;
		 
	//$image_name = time();
		if (file_exists($path_filename_ext)) 
			{
			 echo "Sorry, file already exists.";
			 }
		 else
			 {
			 move_uploaded_file($temp_name,$path_filename_ext);
			 echo "Congratulations! File Uploaded Successfully.";
			 }
			$arr[] = $img_name;
	}
}
print_r($arr);

		$img_name=implode(",",$arr);
		//echo $image_name;

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
        $sql3="INSERT INTO ".$tbname."(FirstName,LastName,Address,Image,Bloodgroup) values('".$first_name."','".$last_name."','".$address."','".$img_name."','".$bloodgroup."')";

	if(mysqli_query($conn,$sql3))
	{	
		echo "Inserted successfully.";
		//header('Location :'.$url);
			
			$count=2;
		$j=0;
		$sql4="select * from form_data";
		$result=mysqli_query($conn,$sql4);
		while($row=mysqli_fetch_assoc($result))
		{
			
			if(count($row['Image'])>1)
			{
				   $arr2[]=explode(",",$row['Image']);
				   while($count>$j)
				   {
					   echo "<div><img src='images/".$arr2[$j++]."' height='110px' width='160px'></div>";
				   }
			}
			else
		{
			
			
			echo "<div><img src='images/".$row['Image']."' height='110px' width='160px'></div>";
		}
		
	}
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
