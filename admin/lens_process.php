<?php  

include("connection.php");

$selbrand = $_POST['selbrand'];
// $lensname = $_POST['txtlname'];
$model = $_POST['txtmodel'];
$filtersize = $_POST['txtfsize'];
$aperture = $_POST['txtaperture'];
$shdesc = $_POST['txtshdesc'];
$lgdesc = $_POST['txtlgdesc'];
$desc = $_POST['txtdesc'];
$oprice = $_POST['txtoprice'];
$sprice = $_POST['txtsprice'];
$isinwarrenty = $_POST['selwarrenty'];
$warrentyperiod = $_POST['txtwarrenty'];
$limage = $_FILES['l_image']['name'];
$submit = $_POST['submit'];

if ($_FILES['l_image']['error'] == 0) {
	move_uploaded_file($_FILES['l_image']['tmp_name'], 'images/'.$_FILES['l_image']['name']);	
}

if($submit == 'submit')
{

	if(!empty($model) && !empty($filtersize) && !empty($aperture) && !empty($shdesc) && !empty($lgdesc) && !empty($desc) && !empty($oprice) && !empty($sprice) && !empty($warrentyperiod))
	{
		
		
		// file upload

		$qry = "INSERT INTO lenses(brand_id,image,model,filtersize,aperture,short_desc,long_desc,description,offer_price,selling_price,isinwarrenty,warrenty_period) VALUES ('$selbrand','$limage','$model','$filtersize','$aperture','$shdesc','$lgdesc','$desc','$oprice','$sprice','$isinwarrenty','$warrentyperiod')";

		
		$result = mysqli_query($con,$qry);
		print_r($result);


		if($result)
		{
			header("location:lens_grid.php");
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

if($submit == 'update' && isset($_POST['lens_id']))
{
	$lid = $_POST['lens_id'];
	if($_FILES['l_image']['size'] == 0){
		$aimage = $_POST['hidnimg'];
	}
	else{
		if ($_FILES['l_image']['error'] == 0) {
		move_uploaded_file($_FILES['l_image']['tmp_name'], 'images/'.$_FILES['l_image']['name']);	
		}
		else{
			$aimage=$_POST['hidnimg'];
		}
		// print_r($_FILES); exit;

	}

	echo $qry = "UPDATE lenses SET brand_id = '$selbrand', image = '$limage',model = '$model',filtersize = '$filtersize',aperture = '$aperture', short_desc = '$shdesc',long_desc = '$lgdesc', description = '$desc', offer_price = '$oprice', selling_price = '$sprice', isinwarrenty = '$isinwarrenty', warrenty_period = '$warrentyperiod' WHERE lens_id = '$lid' ";
	
	$result = mysqli_query($con,$qry);

	if($result)
	{
		header("location:lens_grid.php");
	}
	else
	{
		echo "update error";
	}
}

// delete code

if(isset($_REQUEST['did'])){


	$qry = mysqli_query($con,"SELECT * FROM lenses WHERE lens_id =".$_REQUEST['did']);

	$k = mysqli_fetch_assoc($qry);

	$user_image = $k['image'];

	$result = unlink('images/'.$user_image);

	if ($result == true) {	
			if(isset($_GET['delete']))
			{
				
				$qry = "DELETE  FROM lenses WHERE lens_id = ".$_REQUEST['did'];
				
				$result = mysqli_query($con,$qry);

				if($result){
					header("location:lens_grid.php");
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