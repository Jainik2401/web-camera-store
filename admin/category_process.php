<?php  

include("connection.php");


// delete code


if(isset($_REQUEST['did'])){


	$qry = mysqli_query($con,"SELECT * FROM category WHERE category_id =".$_REQUEST['did']);

	$k = mysqli_fetch_assoc($qry);

	$user_image = $k['category_image'];

	$result = unlink('images/'.$user_image);

	if ($result == true) {	
			if(isset($_GET['delete']))
			{
				
				$qry = "DELETE  FROM category WHERE category_id = ".$_REQUEST['did'];
				
				$result = mysqli_query($con,$qry);

				if($result){
					header("location:category_grid.php");
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

// Insert and update code

$submit = $_POST['submit'];
$cname = $_POST['txtcname'];
$cdesc = $_POST['txtcdesc'];
$cimage = $_FILES['c_image']['name'];

if ($_FILES['c_image']['error'] == 0) {
	move_uploaded_file($_FILES['c_image']['tmp_name'], 'images/'.$_FILES['c_image']['name']);	
}
else{
	$cimage=$_POST['hidnimg'];
}



if($submit == 'submit')
{

	if(!empty($cname) && !empty($cimage) && !empty($cdesc))
	{
		
		
		// file upload

		$qry = "INSERT INTO category(category_name,category_image,category_desc) VALUES ('$cname','$cimage','$cdesc')";
		
		$result = mysqli_query($con,$qry);

		if($result)
		{
			header("location:category_grid.php");
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


if($submit == 'update' && isset($_POST['category_id']))
{
	$cid = $_POST['category_id'];
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

	$qry = "UPDATE category SET category_name = '$cname', category_image = '$cimage', category_desc = '$cdesc' WHERE category_id = '$cid' ";
	$result = mysqli_query($con,$qry);

	if($result)
	{
		header("location:category_grid.php");
	}
	else
	{
		echo "update error";
	}
}
else
{
	echo "no data";
}







// if(isset($_POST['submitbtn'])){

	
// 	// echo "<pre>";
// 	// print_r($_FILES['c_image']);
// 	// exit;
	

// 	if(isset($_POST['cid']))
// 	{
		
// 	}
// 	else
// 	{
		
// 	}

	

// 	if ($isqry) {
// 		header("location:category_grid.php");
// 	} else {
// 		echo "hello";
// 	}

// }

?>

