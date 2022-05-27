<?php  


include("connection.php"); 

if(isset($_GET['delete'])){
	$qry = "DELETE FROM order_meta WHERE order_id =".$_REQUEST['id'];
	$delete = mysqli_query($con,$qry);
	if($delete){
		header("location:order_grid.php");
	}
	else{
		echo "error.....";
	}
	exit;
}

?>