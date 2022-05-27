<?php  

include("connection.php");

$stitle = $_POST['txttitle'];
$ssubtitle = $_POST['txtstitle'];
$btntext = $_POST['txtbtn'];
$btnurl = $_POST['txturl'];
$simage = $_FILES['s_image']['name'];
$submit = $_POST['submit'];

if ($_FILES['s_image']['error'] == 0) {
	move_uploaded_file($_FILES['s_image']['tmp_name'], 'images/'.$_FILES['s_image']['name']);	
}

if($submit == 'submit')
{

	if(!empty($stitle) && !empty($ssubtitle) && !empty($btntext) && !empty($btnurl) && !empty($simage))
	{
		
		
		// file upload

		$qry = "INSERT INTO slider(slider_title,slider_subtitle,image,btn_text,btn_url) VALUES ('$stitle','$ssubtitle','$simage','$btntext','$btnurl')";
		
		$result = mysqli_query($con,$qry);

		if($result)
		{
			header("location:slider_grid.php");
		}
		else
		{
			echo "insert error";
		}
	}
	else
	{
		echo "ffff";
	}
}

if($submit == 'update' && isset($_POST['slider_id']))
{
	$sid = $_POST['slider_id'];
	if($_FILES['s_image']['size'] == 0){
		$simage = $_POST['hidnimg'];
	}
	else{
		if ($_FILES['s_image']['error'] == 0) {
		move_uploaded_file($_FILES['s_image']['tmp_name'], 'images/'.$_FILES['s_image']['name']);	
		}
		else{
			$simage=$_POST['hidnimg'];
		}
		// print_r($_FILES); exit;

	}

	echo $qry = "UPDATE slider SET slider_title = '$stitle', slider_subtitle = '$ssubtitle', image = '$simage', btn_text = '$btntext', btn_url = '$btnurl' WHERE slider_id = '$sid' ";
	
	$result = mysqli_query($con,$qry);

	if($result)
	{
		header("location:slider_grid.php");
	}
	else
	{
		echo "update error";
	}
}

// delete code

if(isset($_REQUEST['did'])){


	$qry = mysqli_query($con,"SELECT * FROM slider WHERE slider_id =".$_REQUEST['did']);

	$k = mysqli_fetch_assoc($qry);

	$user_image = $k['image'];

	$result = unlink('images/'.$user_image);

	if ($result == true) {	
			if(isset($_GET['delete']))
			{
				
				$qry = "DELETE  FROM slider WHERE slider_id = ".$_REQUEST['did'];
				
				$result = mysqli_query($con,$qry);

				if($result){
					header("location:slider_grid.php");
				}
				else{
					echo "error.....";
				}
				exit;
			}
			exit;
		}
		else{
			echo "Hekllo";
			exit;
		}

}

?>