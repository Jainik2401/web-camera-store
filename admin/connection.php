<?php 

$con = mysqli_connect('localhost','root','','VNV');

if(!$con){
	die("connection error...".mysqli_connect_error());
}

// function delete($id,$tbl_name,$field){

// 	return $qry = "DELETE FROM $tbl_name WHERE $field=".$id;
// }

?>
