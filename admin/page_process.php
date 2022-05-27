<?php 

include("connection.php"); 

if(isset($_GET['delete'])){
	$qry = "DELETE FROM page WHERE page_id =".$_REQUEST['id'];
	$delete = mysqli_query($con,$qry);
	if($delete){
		header("location:page_grid.php");
	}
	else{
		echo "error.....";
	}
	exit;
}


$ptitle = $_POST['txtptitle'];
$pcontent = $_POST['txtpdesc'];

if (isset($_POST['pid'])) {
	$pid = $_POST['pid'];

	$qry = "UPDATE page SET page_title = '$ptitle', content = '$pcontent' WHERE page_id = '$pid' ";
	
} else {

	$qry = 	"INSERT INTO page (page_title,content) VALUES('$ptitle','$pcontent')";
	
}


$isqry = mysqli_query($con,$qry);
if ($isqry) {
	header("location:page_grid.php");
} else {
	echo "something is wrong...";
}


?>