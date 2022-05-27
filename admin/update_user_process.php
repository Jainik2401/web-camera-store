<?php 

include("connection.php"); 

if(isset($_GET['delete'])){
	$qry = "DELETE FROM users WHERE u_id =".$_REQUEST['id'];
	$delete = mysqli_query($con,$qry);
	if($delete){
		header("location:user_grid.php");
	}
	else{
		echo "error.....";
	}
	exit;
}


$fname = $_POST['txtfname'];
$lname = $_POST['txtlname'];
$email = $_POST['txtemail'];
$pass = md5($_POST['txtpass']);
$cpass = md5($_POST['txtcpass']);
$mobile = $_POST['txtmobile'];
$gender = $_POST['radio2'];
$city = $_POST['selectcity'];
$sadd1 = $_POST['txtsadd1'];
$sadd2 = $_POST['txtsadd2'];
$sstate = $_POST['txtsstate'];
$scity = $_POST['txtscity'];
$spincode = $_POST['txtspin'];
$badd1 = $_POST['txtbadd1'];
$badd2 = $_POST['txtbadd2'];
$bstate = $_POST['txtbstate'];
$bcity = $_POST['txtbcity'];
$bpincode = $_POST['txtbpin'];

$submit = $_POST['submit'];

if($submit == 'submit')
{
	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass) && !empty($mobile) && !empty($gender) && !empty($city))
	{
		
			if($pass == $cpass)
			{
				$qry = 	"INSERT INTO users (fname,lname,email,password,mobile,gender,city) VALUES('$fname','$lname','$email','$pass','$mobile','$gender','$city')";
				$result = mysqli_query($con,$qry);

				
				if($result)
				{
					header("location:user_grid.php?user=success");
				}
				else
				{
					header("location:userform.php?user=error");
				}
			}
			else
			{
				header("location:userform.php?pass=error");
			}
		
		
	} // validation
	else
	{
		header("location:userform.php?field=warning");
	}
	
}


if ($submit == 'update' && isset($_POST['u_id'])) 
{
	$uid = $_POST['u_id'];

	$qry = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', password = '$pass', mobile = '$mobile', gender = '$gender', city = '$city' WHERE u_id = '$uid' ";
	$result  = mysqli_query($con,$qry);

	
	if($result)
	{
		header("location:user_grid.php?user=add");
	}
	else
	{
		header("location:user_grid.php?user=adderr");
	}
	
} 


?>