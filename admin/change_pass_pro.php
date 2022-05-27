<?php  

session_start();
include("connection.php");

$oldpwd = md5($_POST['pwd']);
$newpwd = md5($_POST['npwd']);
$newcpwd = md5($_POST['ncpwd']);

	$qry="SELECT * FROM users WHERE email=".$_SESSION['forget'];
	echo "<pre>";
	print_r($qry);
	exit;
	$result=mysqli_query($con,$qry);
	$lst=mysqli_fetch_array($result);

	if($oldpwd == $lst['password'])
	{
		if($newpwd == $newcpwd)
		{
			$qry1="UPDATE users SET password='".$newpwd."'WHERE email=".$_SESSION['forget'];
			$result1=mysqli_query($con,$qry1);

			if($result1)
			{
				header("location:index.php");
			}
			else
			{
				echo '<script type="text/javascript">
				alert("Password not changed");
				location="change_pass.php";
				</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">
			alert("Password Mismatch");
			location="change_pass.php";
			</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">
		alert("Please enter valid last password");
		location="forget_pass.php";
		</script>';
	}

?>