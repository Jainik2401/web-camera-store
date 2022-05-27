<?php  
session_start();
include("connection.php");

$email = $_POST['email'];
$pass = md5($_POST['passwd']);
$submit = $_POST['submit'];

if($submit)
{
	$qry = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' AND is_admin = 1";
	$result = mysqli_query($con,$qry);
	$lst = mysqli_fetch_assoc($result);
	
	if (mysqli_num_rows($result) > 0) {

		$_SESSION['u_id'] = $lst['u_id'];
		$_SESSION['user'] = $email;
		$_SESSION['fname'] = $lst['fname']; 
		$_SESSION['lname'] = $lst['lname']; 
		header("location:home.php");
	} else 
	{
		header("location:index.php?loginerr=danger"); // Login Error..
	}
}



?>