<?php include("header.php"); ?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>Return And Refund Policy</h2>
                        <ul>
                            <li>
                                <a href="index.php">home</a>
                            </li>
                            <li>Return And Refund Policy</li>
                        </ul>
                    </div>
                </div>
</div>




<br><br><br><br><br>
            <?php  

            include("admin/connection.php");

            $qry = "SELECT * FROM page WHERE page_id = 6";
            $result = mysqli_query($con,$qry);
            $lst = mysqli_fetch_array($result);

            ?>        
            <div class="testimonial-area">
                <div class="container" style="margin-top: -120px;">
                    <div class="section-title-2 section-title-position">
                        <span><h1 style="margin-left: -85px;"><?php echo $lst['page_title']; ?></h1></span>
                    </div>
                    
                        
                        <div class="single-testimonial">
                            <div class="row justify-content-center">
                                
                                <div class="col-lg-10 col-md-12 col-12 justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><?php echo $lst['content']; ?></p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Nikunj Koladiya</h4>
                                            <span>CHAIRMAN, VNV</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>

                 <div class="team-area pt-120 pb-95">
                
            </div>

             
  </div>
<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>
          