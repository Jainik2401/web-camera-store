<?php  

include("connection.php");

$selbrand = $_POST['selbrand'];
$cameraname = $_POST['txtcname'];
$shdesc = $_POST['txtshdesc'];
$lgdesc = $_POST['txtlgdesc'];
$desc = $_POST['txtdesc'];
$oprice = $_POST['txtoprice'];
$sprice = $_POST['txtsprice'];
$isinwarrenty = $_POST['selwarrenty'];
$warrentyperiod = $_POST['txtwarrenty'];
$cimage = $_FILES['c_image']['name'];
$submit = $_POST['submit'];

if ($_FILES['c_image']['error'] == 0) {
	move_uploaded_file($_FILES['c_image']['tmp_name'], 'images/'.$_FILES['c_image']['name']);	
}

if($submit == 'submit')
{

	if(!empty($cameraname) && !empty($shdesc) && !empty($lgdesc) && !empty($desc) && !empty($oprice) && !empty($sprice) && !empty($warrentyperiod))
	{
		
		
		// file upload

		$qry = "INSERT INTO camera(brand_id,camera_name,image,short_desc,long_desc,description,offer_price,selling_price,isinwarrenty,warrenty_period) VALUES ('$selbrand','$cameraname','$cimage','$shdesc','$lgdesc','$desc','$oprice','$sprice','$isinwarrenty','$warrentyperiod')";

		
		$result = mysqli_query($con,$qry);
		print_r($result);


		if($result)
		{
			header("location:camera_grid.php");
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

if($submit == 'update' && isset($_POST['camera_id']))
{
	$cid = $_POST['camera_id'];
	if($_FILES['c_image']['size'] == 0){
		$cimage = $_POST['hidnimg'];
	}
	else{
		if ($_FILES['c_image']['error'] == 0) {
		move_uploaded_file($_FILES['c_image']['tmp_name'], 'images/'.$_FILES['c_image']['name']);	
		}
		else{
			$cimage=$_POST['hidnimg'];
		}
		// print_r($_FILES); exit;

	}

	$qry = "UPDATE camera SET brand_id = '$selbrand', camera_name = '$cameraname', image = '$cimage', short_desc = '$shdesc',long_desc = '$lgdesc', description = '$desc', offer_price = '$oprice', selling_price = '$sprice', isinwarrenty = '$isinwarrenty', warrenty_period = '$warrentyperiod' WHERE camera_id = '$cid' ";
	
	$result = mysqli_query($con,$qry);

	if($result)
	{
		header("location:camera_grid.php");
	}
	else
	{
		echo "update error";
	}
}

// delete code

if(isset($_REQUEST['did'])){


	$qry = mysqli_query($con,"SELECT * FROM camera WHERE camera_id =".$_REQUEST['did']);

	$k = mysqli_fetch_assoc($qry);

	$user_image = $k['image'];

	$result = unlink('images/'.$user_image);

	if ($result == true) {	
			if(isset($_GET['delete']))
			{
				
				$qry = "DELETE  FROM camera WHERE camera_id = ".$_REQUEST['did'];
				
				$result = mysqli_query($con,$qry);

				if($result){
					header("location:camera_grid.php");
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