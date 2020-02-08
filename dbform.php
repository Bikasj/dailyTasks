<html>
	<head>
		<title>User_Form</title>
	</head>

<body>
	<center><h2><b><u>REGISTRATION FORM</u></b></h2><br>
			<form action="" method="POST" enctype="multipart/form-data">
				<table border="3" height="30%" width="50%">
			<tr></tr><td>First Name:</td> <td><input type="text" name="firstname" size="35"></td></tr><br><br>
			<tr><td>Last Name :</td> <td><input type="text" name="lastname" size="35"></td></tr><br><br>
			<tr><td>Address :</td> 	<td><input type="text" name="address" size="35"></td></tr><br><br>
			<tr><td>Image :</td> 	<td><input type="file" name="image[]" size="35" multiple></td></tr><br><br>
			<tr><td>Bloodgroup :</td> <td><select name="bloodgroup">
							<option name="none"> Select Bloodgroup </option> 
							<option name="A+"> A+ </option> 
							<option name="A-"> A- </option> 
							<option name="B+"> B+ </option> 
							<option name="B-"> B- </option> 
							<option name="AB+"> AB+ </option> 
							<option name="O+"> O+ </option> 
							<option name="AB-"> AB- </option> 
							<option name="O-"> O- </option> 
							</select></td></tr><br><br><br>
						<tr><td colspan="2"><center><button name="submit">Submit </button></center></td></tr>
				</table>
	</center>
			</form>

<?php
if(isset($_POST['submit']))
{	$flag=1;
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
			 	
	$arr=[];
	if (($_FILES['image']['name']!=""))
			{
			global $count;
			
			$count=count($_FILES['image']['name']);
			
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
			 
		
			if (file_exists($path_filename_ext)) 
				{
					$flag=0;
					break;
				 }
			 else
				 {
					 
				 move_uploaded_file($temp_name,$path_filename_ext);
				 
				 }
				$arr[] = $img_name;
		}
				if($flag==1)
				{
					echo "Congratulations! File Uploaded Successfully.";
				}
				else
				{
					echo "Sorry, file already exists.";
				}
			}	

		$img_name=implode(",",$arr);
		

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
				echo "\nInserted successfully.";

				$sql4="select * from form_data";
				$result=mysqli_query($conn,$sql4);
				while($row=mysqli_fetch_assoc($result))
				{
					$j=0;
				$arr2=explode(",",$row['Image']);
				
					if(count($arr2)>1)
					{

						   while($count>$j)
						   {
							   echo "<div><img src='images/".$arr2[$j++]."' height='110px' width='160px'></div>";
						   }
					}
					else
				{

					echo "<div><img src='images/".$arr2[$j]."' height='110px' width='160px'></div>";
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
