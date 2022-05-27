<?php include("header.php"); ?>
             <?php  

                    if(isset($_GET['product_id']))
                    {
                        $qry = "SELECT * FROM camera WHERE camera_id =".$_GET['product_id'];
                        $result = mysqli_query($con,$qry);
                        $lst = mysqli_fetch_assoc($result);
                    }
                    elseif (isset($_GET['lens_id'])) 
                    {
                        $qry = "SELECT * FROM lenses WHERE lens_id =".$_GET['lens_id'];
                        $result = mysqli_query($con,$qry);
                        $lst = mysqli_fetch_assoc($result);
                    }
                    elseif(isset($_GET['acc_id']))
                    {
                        $qry = "SELECT * FROM accessories WHERE acc_id =".$_GET['acc_id'];
                        $result = mysqli_query($con,$qry);
                        $lst = mysqli_fetch_assoc($result);
                    }

            ?>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>product details </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>product details </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-details-area fluid-padding-3 ptb-130">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="pro-details1">
                                            <img src="admin/images/<?php echo $lst['image']; ?>" alt="" height="600" width="400">
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2><?php 
                                
                                if(isset($_GET['product_id'])){echo $lst['camera_name'];} 
                                if(isset($_GET['lens_id'])){echo $lst['model'];} 
                                if(isset($_GET['acc_id'])){echo $lst['acc_name'];} 

                                ?></h2>
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <span> ( 01 Customer Review )</span>
                                </div>
                                <div class="product-price">
                                    <span>₹<?php 

                                if(isset($_GET['product_id'])){echo $lst['offer_price'];} 
                                if(isset($_GET['lens_id'])){echo $lst['offer_price'];} 
                                if(isset($_GET['acc_id'])){echo $lst['offer_price'];}

                                    ?></span>
                                    <strike><span style="padding-left: 10px;">₹<?php 

                                if(isset($_GET['product_id'])){echo $lst['selling_price'];} 
                                if(isset($_GET['lens_id'])){echo $lst['selling_price'];} 
                                if(isset($_GET['acc_id'])){echo $lst['selling_price'];}

                                    ?></span></strike>    
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Product Overview</h5>
                                    <p><?php 

                                if(isset($_GET['product_id'])){echo $lst['short_desc'];} 
                                if(isset($_GET['lens_id'])){echo $lst['short_desc'];} 
                                if(isset($_GET['acc_id'])){echo $lst['acc_short_desc'];}

                                    ?></p>
                                </div>

                                <div class="product-overview">
                                    <h5 class="pd-sub-title">More Details</h5>
                                    <p><?php 

                                if(isset($_GET['product_id'])){echo $lst['long_desc'];} 
                                if(isset($_GET['lens_id'])){echo $lst['long_desc'];} 
                                if(isset($_GET['acc_id'])){echo $lst['acc_desc'];}

                                    ?></p><br>
                                    <p><?php 

                                if(isset($_GET['product_id'])){echo $lst['description'];} 
                                if(isset($_GET['lens_id'])){echo $lst['description'];} 

                                    ?></p>

                                </div>
                                
                                <form class="quickview-plus-minus" action="cart.php?add_to_cart" method="post">
                                    <?php 
                                        $meta_table="";
                                        $meta_key="";
                                        $meta_id="";
                                        $qry = "";

                                        if (isset($_GET['product_id'])) {
                                            $meta_table="camera";
                                            $meta_key="camera_id";
                                            $meta_id=$_GET['product_id'];
                                            $qry = "select camera_name title,image img,offer_price price from camera where camera_id=".$_GET['product_id'];
                                        }

                                        elseif (isset($_GET['lens_id'])) {
                                            $meta_table="lenses";
                                            $meta_key="lens_id";
                                            $meta_id=$_GET['lens_id'];
                                            $qry = "SELECT model title, image img , offer_price price FROM lenses where lens_id=".$_GET['lens_id'];
                                        }

                                        elseif (isset($_GET['acc_id'])) {
                                            $meta_table="accessories";
                                            $meta_key="acc_id";
                                            $meta_id=$_GET['acc_id'];
                                            $qry = "SELECT acc_name title , image img ,offer_price price  from accessories WHERE acc_id=".$_GET['acc_id'];
                                        }

                                        $qry=$qry;

                                        // exit();

                                    ?>
                                   

                                    <input type="hidden" name="qry" value="<?php echo $qry; ?>">
                                    <input type="hidden" name="meta_table" value="<?php echo $meta_table; ?>">
                                    <input type="hidden" name="meta_key" value="<?php echo $meta_key; ?>">
                                    <input type="hidden" name="meta_id" value="<?php echo $meta_id; ?>">

                                    <div class="cart-plus-minus">
                                        <input type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <button class="btn-style cr-btn" ><span>add to cart</span></button>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover cr-btn" href="#"><span><i class="icofont icofont-heart-alt"></i></span></a>
                                    </div>
                                </form>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Categories</h5>
                                    <ul>
                                        <li>
                                            <a href="#">cameras ,</a>
                                        </li>
                                        <li>
                                            <a href="#">lenses ,</a>
                                        </li>
                                        <li>
                                            <a href="#">accessories ,</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>