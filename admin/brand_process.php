<?php 

include("connection.php"); 

if(isset($_GET['delete'])){
	$qry = "DELETE FROM brand WHERE brand_id =".$_REQUEST['id'];
	$delete = mysqli_query($con,$qry);
	if($delete){
		header("location:brand_grid.php");
	}
	else{
		echo "error.....";
	}
	exit;
}


$bname = $_POST['txtbname'];
$bcontent = $_POST['txtbdesc'];

if (isset($_POST['bid'])) {
	$bid = $_POST['bid'];

	$qry = "UPDATE brand SET brand_name = '$bname', description = '$bcontent' WHERE brand_id = '$bid' ";
	
} else {

	$qry = 	"INSERT INTO brand (brand_name,description) VALUES('$bname','$bcontent')";
	
}


$isqry = mysqli_query($con,$qry);
if ($isqry) {
	header("location:brand_grid.php");
} else {
	echo "something is wrong...";
}


?>