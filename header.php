<?php session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("admin/connection.php");

 ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>VNV-The Camera Store</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/img/fav1.png" sizes="114x114">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>

    <style type="text/css">
        
        .error{
            color: red;
        }

        .success{
            color: green;
        }

        .warning{
            color: orange;
        }

        #pp{
            text-align: center;
            font-size: 25px;
            /*margin-top: -70px;
            margin-bottom: 50px;*/
        }

        #p1{
            text-align: right;
            font-size: 15px;
            margin-bottom: -20px;
        }

        .message{
            color: red;
            margin-bottom: 10px;
            margin-top: -15px;
        }

    </style>

    <body>
        <div class="wrapper">
            <!-- header start -->
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="index.php"><img alt="" src="assets/img/logo/n.png" height="100" width="200" style="margin-top: -30px; color: white;"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US  +91 1234567890</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.php">home</a></li>
                                                    
                                                    <li><a href="product.php">Category</a>
                                                        <ul>
                                                            <li><a data-toggle="tab" href="product.php">Camera</a></li>
                                                            <li><a data-toggle="tab" href="#use-product">Lenses</a></li>
                                                            <li><a data-toggle="tab" href="#accessory-product">Accessories</a></li>
                                                            <!-- <li><a href="#">wishlist</a></li> -->
                                                            
                                                        </ul>
                                                    </li>
                                                    <!-- <li><a href="#">pages</a>
                                                        <ul>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="cart.html">cart page</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                            <li><a href="login-register.html">login</a></li>
                                                            <li><a href="contact.html">contact</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <li><a href="contact.php">contact us</a></li>
                                                    <li><a href="About_us.php">About us</a>
                                                        <ul>
                                                            <li><a  href="policy.php">Privacy Policy</a></li>
                                                            <li><a href="Refund.php">Return And Refund Policy</a></li>
                                                            <li><a href="tandc.php">Terms and conditions</a></li>
                                                            
                                                        </ul>

                                                    </li>

                                            <?php if(isset($_SESSION['u_id'])){ ?>
                                                
                                                   
                                                     <li><a href="#">My Profile</a>
                                                        <ul>
                                                            <li><h4>Welcome <?php echo $_SESSION['fname']; ?></h4></li>
                                                            <li><a href="myprofile.php?profile_id=<?php echo $_SESSION['u_id']; ?>">Update Profile</a></li>
                                                            <li><a href="change_password.php">Change Password</a></li>
                                                            <li><a href="myorders.php">Order History</a></li>
                                                            <!-- <li><a href="#">Wishlist</a></li> -->
                                                        </ul>
                                                    </li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                   
                                            <?php }else{ ?>
                                                
                                                    <li><a href="login.php">Login</a></li>
                                                    <li><a href="register.php">Register</a></li>
                                            <?php } ?>       
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="header-cart cart-small-device">
                                    <button class="icon-cart">
                                        <i class="ti-shopping-cart"></i>
                                        <span class="count-style">02</span>
                                        <span class="count-price-add">$295.95</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                                    <span>Price: $275</span>
                                                    <span>Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Demonissi Gori</a></h3>
                                                    <span>Price: $275</span>
                                                    <span class="qty">Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h3><a href="#">Demonissi Gori</a></h3>
                                                    <span>Price: $275</span>
                                                    <span class="qty">Qty: 01</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>total: <span>$550.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a class="btn-style cr-btn" href="#">checkout</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="index.html">HOME</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="login-register.html">login</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="shop.html">shop</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="blog.html">blog page</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact us</a></li>
                                        </ul>
                                    </nav>							
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                            <button class="icon-cart">
                                <i class="ti-shopping-cart"></i>
                                
                            </button>
                            <div class="shopping-cart-content" style="width: max-content;">
                                <ul>
                                    <?php
                                    $total=0;
                                    if (isset($_SESSION['cart'])) {                                            
                                    foreach ($_SESSION['cart'] as $key=>$value) { 
                                    $result = mysqli_query($con,$value['qry']);
                                    $lst = mysqli_fetch_assoc($result);
                                    
                                    $total = $total + ($lst['price'] * $value['qty']);
                                   

                                    ?>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img src="admin/images/<?php echo $lst['img']; ?>" alt="" height="120" width="120"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#"><?php echo $lst['title']; ?></a></h3>
                                            <span>Price: <?php echo $lst['price'] ?></span>
                                            <span>Qty: <?php echo $value['qty'] ?></span>
                                        </div>
    <!--                                     <div class="shopping-cart-delete">
                                            <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                                        </div> -->
                                    </li>
                                    <?php } } ?>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>total: <span><?php echo $total; ?></span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a class="btn-style cr-btn" href="cart.php">View Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>