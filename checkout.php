<?php include("header.php"); ?>

<?php  


  // $qry = "SELECT * FROM order_meta WHERE user_id=".$_SESSION['u_id'];
  // $result = mysqli_query($con,$qry);
  // $lst = mysqli_fetch_array($result);  
    $u_id = $_POST['u_id'];
    $o_id = $_POST['o_id'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $payment = $_POST['paymentmethod'];
    $msg = "";
    if(isset($_POST['submit'])){

            $check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM user_details WHERE order_id = '$o_id'"));
            if($check == 0){

            $sql = mysqli_query($con, "INSERT INTO user_details (u_id,order_id,shipping_add1,shipping_add2,shipping_state,shipping_city,shipping_pincode,payment_method) VALUES ('$u_id', '$o_id', '$add1', '$adordd2', '$state', '$city', '$pincode','$payment')");
            if($sql){
                $_SESSION['payment_method'] = $payment;
                $qry = "UPDATE order_meta SET payment_method='".$_SESSION['payment_method']."' WHERE order_id=$o_id";
                mysqli_query($con,$qry);

                echo '<script type="text/javascript">
                    alert("Your order placed successfully..!!");
                    location="myorders.php";
                    </script>';
            }
        }else{
                $msg = "You have already entered a shipping details..";
        }


    }

?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>Order Shipping Details</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Order Shipping Details</li>
                        </ul>
                    </div>
                </div>
</div>

<div class="blog-area pt-120 pb-130">
                <div class="container">
                    <div class="row ">
                        
                        <div class="col-lg-6 tab-content" style="margin-top: -75px;">
                            <div id="mix" class="blog-details-wrapper res-mrg-top">
                                <div class="blog-reply-wrapper mt-70">
                                    <h4 class="blog-dec-title">Shipping Details</h4>
                                    
                                    <form action="#" method="POST">
                                        <div class="message">
                                                        <?php echo $msg; ?>
                                                    </div>
                                        <div class="row">
                                            
                                                <input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id']; ?>" placeholder="Address 1">
                                                <input type="hidden" name="o_id" value="<?php echo $_SESSION['last_o_id']; ?>" placeholder="Address 1">
                                                <div class="col-md-6">
                                                    <div class="leave-form">
                                                        <input type="text" name="add1" value="" placeholder="Address 1" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="leave-form">
                                                        <input type="text" name="add2" value="" placeholder="Address 2" required="">
                                                    </div>
                                                </div>
                                            
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input type="text" name="state" value="" placeholder="State" required="">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input type="text" name="city" value="" placeholder="City" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="number" name="pincode" value="" placeholder="Pincode" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <h4 class="blog-dec-title">Payment Method</h4>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input style="margin-left: -268px; height: 30px;" type="radio" name="paymentmethod" value="master card" checked>
                                                    <img src="assets/img/mastercard.png" style="margin-left: -220px; margin-top: -20px;" height="100" width="100">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input style="margin-left: -268px; height: 30px;" type="radio" name="paymentmethod" value="maestro card">
                                                    <img src="assets/img/maestro.png" style="margin-left: -220px; margin-top: -20px;" height="100" width="100">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input style="margin-left: -268px; height: 30px;" type="radio" name="paymentmethod" value="visa debit card">
                                                    <img src="assets/img/visa.png" style="margin-left: -220px; margin-top: -20px;" height="100" width="100">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input style="margin-left: -268px; height: 30px;" type="radio" name="paymentmethod" value="paypal">
                                                    <img src="assets/img/paypal.png" style="margin-left: -220px; margin-top: -20px;" height="100" width="100">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input style="margin-left: -268px; height: 30px;" type="radio" name="paymentmethod" value="cash on delivery">
                                                    <img src="assets/img/cod.png" style="margin-left: -220px; margin-top: -20px;" height="100" width="100">
                                                </div>
                                            </div>


                                            
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    
                                                    <div class="button-box">
                                                        <button type="submit" value="submit" name="submit" class="btn-style cr-btn"><span>Place order </span></button>
                                                    </div>
                                                </div>
                                            </div>
                                                    
                                                    
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php  

                        $qry = mysqli_query($con, "SELECT * FROM order_meta WHERE order_id=".$_SESSION['last_o_id']);
                        $row = mysqli_fetch_array($qry);

                        ?>
                        <div class="col-lg-6 tab-content" style="margin-top: -75px;">
                            <div id="mix" class="blog-details-wrapper res-mrg-top">
                                <div class="blog-reply-wrapper mt-70">
                                    <h4 class="blog-dec-title">Order Summery</h4>
                                        <div class="row" style="justify-content: center;">
                                   
                                                <div class="col-md-6">
                                                    <div class="leave-form">
                                                        <a href="#"><img src="admin/images/<?php echo $_SESSION['img']; ?>" alt="" style="margin-left: 65px;
                                                            margin-top: 30px;" height="170" width="170"></a>
                                                    </div>
                                                </div>
                                                <div class="your-order-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name"><h4 class="blog-dec-title">Product :</h4></th>
                                                            <th class="product-total"><?php echo $row['meta_table']; ?></th>
                                                        </tr>                           
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <h4 class="blog-dec-title">Product Name :</h4>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="amount"><?php echo $_SESSION['p_name']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name"><h4 class="blog-dec-title">Price :</h4>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="amount">₹ <?php echo $_SESSION['p_price']; ?></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name"><h4 class="blog-dec-title">Quantity :</h4>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="amount"><?php echo $row['qty']; ?></span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="order-total">
                                                            <th><h4 class="blog-dec-title">Order Total :</h4></th>
                                                            <td><strong><span class="amount">₹ <?php echo $row['total']; ?></span></strong>
                                                            </td>
                                                        </tr>                               
                                                    </tfoot>
                                                </table>
                                            </div>
                                </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>
            