<?php  
session_start();
include("connection.php");

$email = $_POST['txtemail'];
$submit = $_POST['submit'];

if($submit)
{
	$qry = "SELECT * FROM users WHERE email = '$email' AND is_admin = 1";
	$result = mysqli_query($con,$qry);
	$lst = mysqli_fetch_assoc($result);
	
	if (mysqli_num_rows($result) > 0) { 
		$_SESSION['forget'] = $email;
		header("location:change_pass.php");
	} else 
	{
		echo '<script type="text/javascript">
		alert("Wrong email entered.. Please enter registered email..");
		location="forget_pass.php";
		</script>';
		// header("location:forget_pass.php");

	}
}


?>