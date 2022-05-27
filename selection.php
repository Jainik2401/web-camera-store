<div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>CHOOSE YOUR CAMERA</h2>
                        <p><span>VNV</span> the most latgest camera store in the wold can serve you latest            qulity of cameras also you can buy here camera lenses & accessories</p>
                    </div>
                    
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="home1">
                            <div class="product-slider-active owl-carousel">
                        <?php 
                                $qry = mysqli_query($con,"SELECT * FROM camera ORDER BY camera_id DESC");
                                while($k = mysqli_fetch_assoc($qry)){
                        ?>
                                <div class="product-wrapper-bundle">
                                    <div class="product-wrapper" style="height: 490px;">
                                        <div class="product-img" style="margin-bottom: 75px;">
                                            <a href="product_details.php?product_id=<?php echo $k['camera_id']; ?>">
                                                <img src="admin/images/<?php echo $k['image']; ?>" alt="" height="350" widht="100">
                                            </a>
                                            
                                            
                                            <div class="product-content-wrapper" style="margin-bottom: -160px;">
                                                <div class="product-title-spreed">
                                                    <h4><a href="product-details.html"><?php echo $k['camera_name'] ?></a></h4>
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