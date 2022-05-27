<?php  

session_start();
include("admin/connection.php");

$oldpwd = md5($_POST['pwd']);
$newpwd = md5($_POST['npwd']);
$newcpwd = md5($_POST['ncpwd']);

	$qry="SELECT * FROM users WHERE u_id=".$_SESSION['u_id'];
	$result=mysqli_query($con,$qry);
	$lst=mysqli_fetch_array($result);

	if($oldpwd == $lst['password'])
	{
		if($newpwd == $newcpwd)
		{
			$qry1="UPDATE users SET password='".$newpwd."'WHERE u_id=".$_SESSION['u_id'];
			$result1=mysqli_query($con,$qry1);

			if($result1)
			{
				header("location:change_password.php?pass=success");
			}
			else
			{
				header("location:change_password.php?pass=err4");
			}
		}
		else
		{
			header("location:change_password.php?pass=err2");
		}
	}
	else
	{
		header("location:change_password.php?pass=err3");
	}

?>