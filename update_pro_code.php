<?php  

session_start();
include("admin/connection.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['txtmobile'];
$gender = $_POST['radio2'];
$city = $_POST['selectcity'];
$uid = $_POST['u_id'];
$submit = $_POST['submit'];

if(isset($_SESSION['u_id']))
{
	
		$qry = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', mobile = '$mobile', gender = '$gender', city = '$city' WHERE u_id = '$uid' ";
		
		$result  = mysqli_query($con,$qry);

		
		if($result)
		{
			header("location:myprofile.php?update=success");
		}
		else
		{
			header("location:myprofile.php?update=error");
		}
}	
else
{
	header("location:myprofile.php?detail=error");
}

?>