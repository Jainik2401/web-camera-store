<div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid" style="margin-bottom: -20px;">
                    <div class="latest-product-slider owl-carousel">
                        
                        <?php 

                        $qry = mysqli_query($con,"SELECT * FROM slider");
                        while($k = mysqli_fetch_assoc($qry)){

                        ?>
                        
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="admin/images/<?php echo $k['image']; ?>" alt="image" style="height: 500px; width: 500px;">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content" style="padding-top: 80px;">
                                        <div class="latest-price">
                                            <h3 class="animated"><span><?php echo $k['slider_title'] ?></span></h3>
                                        </div>
                                        <h2 class="animated"><?php echo $k['slider_subtitle'] ?></h2>
                                        <!-- <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p> -->
                                        
                                        <div class="latext-btn">
                                            <a class="animated" href="#" style="font-size: 20px;"><?php echo $k['btn_text'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>
            </div>