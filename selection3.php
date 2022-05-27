<div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>CHOOSE YOUR LENSES</h2>
                        <p><span>VNV</span> the most latgest camera store in the wold can serve you latest            qulity of cameras also you can buy here camera lenses & accessories</p>
                    </div>
                    
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="home1">
                            <div class="product-slider-active owl-carousel">
                        <?php 
                                $qry = mysqli_query($con,"SELECT * FROM lenses ORDER BY lens_id DESC");
                                while($k = mysqli_fetch_assoc($qry)){
                        ?>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper" style="height: 390px;">
                                        <div class="product-img" style="margin-bottom: 75px;">
                                            <a href="product_details.php?lens_id=<?php echo $k['lens_id']; ?>">
                                                <img src="admin/images/<?php echo $k['image']; ?>" alt="" height="250" weidh="100">
                                            </a>
                                            
                                            <div class="product-action" style="margin-bottom: -150px;">
                                              <!--   <a class="action-plus-2" title="Add To Cart" href="#">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a> -->
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper" style="margin-bottom: -150px;">
                                                <div class="product-title-spreed">
                                                    <h4><a href="product-details.html"><?php echo $k['model'] ?></a></h4>
                                                    <span><?php echo $k['short_desc'] ?></span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                        <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>