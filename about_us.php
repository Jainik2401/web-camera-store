<?php include("header.php"); ?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="index.php">home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
</div>




<br><br><br><br><br>
            <?php  

            include("admin/connection.php");

            $qry = "SELECT * FROM page WHERE page_id = 7";
            $result = mysqli_query($con,$qry);
            $lst = mysqli_fetch_array($result);

            ?>        
            <div class="testimonial-area">
                <div class="container" style="margin-top: -120px;">
                    <div class="section-title-2 section-title-position">
                        <h1 style="margin-left: 35px;"><?php echo $lst['page_title']; ?></h1>
                    </div>
                    
                        
                        <div class="single-testimonial">
                            <div class="row justify-content-center">
                                
                                <div class="col-lg-10 col-md-12 col-12 justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><?php echo $lst['content']; ?></p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Varsidh Mangroliya</h4>
                                            <span>DIRECTOR, VNV</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>

                 <div class="team-area pt-120 pb-95">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <h2>Team Member</h2>
                        <p>
                            <span>VNV</span>
                            the most latgest Camera store in the world can serve you latest quality of camera also you can buy lenses and accessories here...
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/nikunj.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4><B>Nikunj Koladiya</B></h4>
                                    <span>Chairmen </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/varsidh.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4><B>Varsidh Mangroliya</B></h4>
                                    <span>Director </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="assets/img/vivek.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4><B>Vivek Radadiya</B></h4>
                                    <span>Manager </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="services-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services orange mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="assets/img/icon-img/3.png">
                                </div>
                                <div class="services-text">
                                    <h5>FREE SHIPPING</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services yellow mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="assets/img/icon-img/4.png">
                                </div>
                                <div class="services-text">
                                    <h5>ONLINE SUPPORT</h5>
                                    <p>Online support 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services purple mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="assets/img/icon-img/5.png">
                                </div>
                                <div class="services-text">
                                    <h5>MONEY RETURN</h5>
                                    <p>Back guarantee under 5 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services sky mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="assets/img/icon-img/6.png">
                                </div>
                                <div class="services-text">
                                    <h5>MEMBER DISCOUNT</h5>
                                    <p>Onevery order over $150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </div>
<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>
          