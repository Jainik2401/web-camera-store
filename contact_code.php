<?php  

include("admin/connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];
$submit = $_POST['submit'];

if ($submit) 
{
	$qry = "INSERT INTO contact_us(name,email,subject,content) VALUES ('$name','$email','$sub','$message')";
	$result = mysqli_query($con,$qry);

	if ($result) {
		header("location:contact.php");
	}
	else{
		echo "Something is wrong";
	}
}

?>