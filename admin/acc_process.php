<?php  

include("connection.php");

$selbrand = $_POST['selbrand'];
$selcat = $_POST['selcategory'];
$accname = $_POST['txtaccname'];
$shdesc = $_POST['txtshdesc'];
$desc = $_POST['txtdesc'];
$oprice = $_POST['txtoprice'];
$sprice = $_POST['txtsprice'];
$isinwarrenty = $_POST['selwarrenty'];
$warrentyperiod = $_POST['txtwarrenty'];
$aimage = $_FILES['a_image']['name'];
$submit = $_POST['submit'];

if ($_FILES['a_image']['error'] == 0) {
	move_uploaded_file($_FILES['a_image']['tmp_name'], 'images/'.$_FILES['a_image']['name']);	
}

if($submit == 'submit')
{

	if(!empty($accname) && !empty($aimage) && !empty($shdesc) && !empty($desc) && !empty($oprice) && !empty($sprice) && !empty($warrentyperiod))
	{
		
		
		// file upload

		$qry = "INSERT INTO accessories(brand_id,category_id,acc_name,image,acc_short_desc,acc_desc,offer_price,selling_price,isinwarrenty,warrenty_period) VALUES ('$selbrand','$selcat','$accname','$aimage','$shdesc','$desc','$oprice','$sprice','$isinwarrenty','$warrentyperiod')";
		
		$result = mysqli_query($con,$qry);

		if($result)
		{
			header("location:acc_grid.php");
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

if($submit == 'update' && isset($_POST['acc_id']))
{
	$aid = $_POST['acc_id'];
	if($_FILES['a_image']['size'] == 0){
		$aimage = $_POST['hidnimg'];
	}
	else{
		if ($_FILES['a_image']['error'] == 0) {
		move_uploaded_file($_FILES['a_image']['tmp_name'], 'images/'.$_FILES['a_image']['name']);	
		}
		else{
			$aimage=$_POST['hidnimg'];
		}
		// print_r($_FILES); exit;

	}

	echo $qry = "UPDATE accessories SET brand_id = '$selbrand', category_id = '$selcat', acc_name = '$accname', image = '$aimage', acc_short_desc = '$shdesc', acc_desc = '$desc', offer_price = '$oprice', selling_price = '$sprice', isinwarrenty = '$isinwarrenty', warrenty_period = '$warrentyperiod' WHERE acc_id = '$aid' ";
	
	$result = mysqli_query($con,$qry);

	if($result)
	{
		header("location:acc_grid.php");
	}
	else
	{
		echo "update error";
	}
}

// delete code

if(isset($_REQUEST['did'])){


	$qry = mysqli_query($con,"SELECT * FROM accessories WHERE acc_id =".$_REQUEST['did']);

	$k = mysqli_fetch_assoc($qry);

	$user_image = $k['image'];

	$result = unlink('images/'.$user_image);

	if ($result == true) {	
			if(isset($_GET['delete']))
			{
				
				$qry = "DELETE  FROM accessories WHERE acc_id = ".$_REQUEST['did'];
				
				$result = mysqli_query($con,$qry);

				if($result){
					header("location:acc_grid.php");
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