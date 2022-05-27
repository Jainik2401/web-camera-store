<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

include './admin/connection.php';
$uid = $_SESSION['u_id'];
$price = $_SESSION['p_price'];


if (isset($_SESSION['cart'])) {
foreach ($_SESSION['cart'] as $key=>$value) {
	
	$result = mysqli_query($con,$value['qry']);
    $lst = mysqli_fetch_assoc($result);
	$qty = $value['qty'];  
	$name = $value['title'];                                  
    $total = $total + ($lst['price'] * $value['qty']);

	if(isset($_SESSION['u_id'])){
	mysqli_query($con,"INSERT INTO `order_meta`( `meta_table`, `meta_key`,	`image`,`product_name`, `price`, `meta_id`,`user_id`,`qty`,`total`,`payment_method`) VALUES ( '{$value['meta_table']}' , '{$value['meta_key']}','{$lst['img']}', '{$lst['title']}' ,$price,$key , $uid, $qty, $total,'processing')");	

		$last_id = mysqli_insert_id($con);
		$_SESSION['last_o_id'] = $last_id;
	header("location:checkout.php?id=$last_id");
	}
	else
	{
		header("location:login.php");
	}
}
}
unset($_SESSION['cart']);



?>