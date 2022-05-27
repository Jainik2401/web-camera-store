<?php include("header.php"); ?>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>Shop Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper fluid-padding-2 pt-120 pb-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-sidebar-area pr-60">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Products...">
                                            <button><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Lenses</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">by brands</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Fujifilm</a></li>
                                            <li><a href="#">Canon</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="shop-topbar-wrapper">
                                <div class="grid-list-options">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-sorting">
                                    <div class="shop-product-sorting nav">
                                        <a class="active" data-toggle="tab" href="#new-product">CAMERAS</a>
                                        <a  data-toggle="tab" href="#use-product"> LENSES </a>
                                        <a data-toggle="tab" href="#accessory-product">ACCESSORIES</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="grid-list-product-wrapper tab-content">
                                <div id="new-product" class="product-grid product-view tab-pane active">
                                    <div class="row">
                            <?php 
                                $qry = mysqli_query($con,"SELECT * FROM camera ORDER BY camera_id DESC");
                                while($k = mysqli_fetch_assoc($qry)){
                            ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35">
                                                <div class="product-img" style="margin-bottom: 75px;">
                                                    <a href="product_details.php?product_id=<?php echo $k['camera_id']; ?>">
                                                        <img src="admin/images/<?php echo $k['image']; ?>" alt="">
                                                    </a>
                                                    
                                                    <!-- <div class="product-action" style="margin-bottom: -100px;">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div> -->
                                                    <div class="product-content-wrapper" style="margin-bottom: -100px;">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product_details.php" style="color: black;"><?php echo $k['camera_name'] ?></a></h4>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product_details.php"><?php echo $k['camera_name'] ?></a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$ <?php echo $k['offer_price'] ?></span>
                                                    </div>
                                                    <p><?php echo $k['description'] ?></p>
                                                    <!-- <div class="shop-list-cart">
                                                        <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                            <?php } ?>       
                                        
                                    </div>
                                </div>
                                <div id="use-product" class="product-grid product-view tab-pane">
                                    <div class="row">
                                <?php 
                                    $qry = mysqli_query($con,"SELECT * FROM lenses ORDER BY lens_id DESC");
                                    while($k = mysqli_fetch_assoc($qry)){
                                ?>
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35" style="height: 360px;">
                                                <div class="product-img" style="padding: 25px;">
                                                    <a href="product_details.php?lens_id=<?php echo $k['lens_id']; ?>">
                                                        <img src="admin/images/<?php echo $k['image']; ?>" alt="" height="250" weidh="100">
                                                    </a>
                                                    
                                                    <div class="product-action" style="margin-bottom: -75px;">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper" style="margin-bottom: -80px;">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product_details.php" style="color: black;"><?php echo $k['model'] ?></a></h4>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product_details.php"><?php echo $k['model'] ?></a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$ <?php echo $k['offer_price'] ?></span>
                                                    </div>
                                                    <p><?php echo $k['long_desc'] ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php } ?>
                                    </div>
                                </div>
                                <div id="accessory-product" class="product-grid product-view tab-pane">
                                    <div class="row">
                                <?php 
                                    $qry = mysqli_query($con,"SELECT * FROM accessories ORDER BY acc_id DESC");
                                    while($k = mysqli_fetch_assoc($qry)){
                                ?>       
                                        <div class="product-width col-md-6 col-xl-4 col-lg-6">
                                            <div class="product-wrapper mb-35" style="height: 410px;">
                                                <div class="product-img">
                                                    <a href="product_details.php?acc_id=<?php echo $k['acc_id']; ?>">
                                                        <img src="admin/images/<?php echo $k['image']; ?>" alt="" height="250" width="100">
                                                    </a>
                                                    
                                                    <div class="product-action" style="margin-bottom: -90px;">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart" href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                            <i class=" ti-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                    <div class="product-content-wrapper" style="margin-bottom: -120px;">
                                                        <div class="product-title-spreed">
                                                            <h4><a href="product_details.php" style="color: black;"><?php echo $k['acc_name'] ?></a></h4>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a href="product_details.php"><?php echo $k['acc_name'] ?></a></h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$ <?php echo $k['offer_price'] ?></span>
                                                    </div>
                                                    <p><?php echo $k['acc_desc'] ?></p>
                                                    <div class="shop-list-cart">
                                                        <a href="cart.php"><i class="ti-shopping-cart"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php } ?>       
                                    </div>
                                </div>
                            </div>
                            <div class="paginations text-center mt-20">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php include("newsletter.php"); ?>

<?php include("footer.php"); ?>            