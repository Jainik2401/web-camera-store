<?php  
session_start();
include("admin/connection.php");
$u_id = $_SESSION['u_id'];
$o_id = $_REQUEST['id'];
if(isset($_GET['delete'])){

	$qry = "DELETE FROM order_meta WHERE order_id=$o_id AND user_id=$u_id";
	$delete = mysqli_query($con,$qry);
	if($delete){
		header("location:myorders.php");
	}
	else{
		echo "error.....";
	}

}

?>