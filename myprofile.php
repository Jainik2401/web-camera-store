<?php include("header.php"); ?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>My Profile</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>My Profile</li>
                        </ul>
                    </div>
                </div>
</div>

<div class="blog-area pt-120 pb-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php  

                            if(isset($_SESSION['u_id']))
                            {
                                $qry = "SELECT * FROM users WHERE u_id=".$_SESSION['u_id'];
                                $result = mysqli_query($con,$qry);
                                $lst = mysqli_fetch_array($result);

                                // echo "<input type='hidden' name='u_id' value='".$lst['u_id']."'>";
                            }

                        ?>
                        <div class="col-lg-8 tab-content" style="margin-top: -75px;">
                            <div id="mix" class="blog-details-wrapper res-mrg-top">
                                <div class="blog-reply-wrapper mt-70">
                                    <h4 class="blog-dec-title">Update Profile</h4>
                                    <?php  

                                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                        if(strpos($fullUrl, "update=success") == true){
                                            echo "<p id='pp' class='success'>Profile Updated SuccessFully..</p>";
                                        }
                                        elseif (strpos($fullUrl, "update=error") == true) {
                                            echo "<p id='pp' class='error'>Something Wrong..!!</p>";
                                        }
                                        elseif (strpos($fullUrl, "detail=error") == true) {
                                            echo "<p id='pp' class='error'>Profile not found..!!</p>";
                                        }
                                        
                                    ?>
                                    <form action="update_pro_code.php" method="POST">
                                        <input type='hidden' name='u_id' value="<?php echo $lst['u_id']; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input type="text" name="fname" value="<?php if(isset($lst['fname'])){echo $lst['fname']; } ?>" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="leave-form">
                                                    <input type="text" name="lname" value="<?php if(isset($lst['lname'])){echo $lst['lname']; } ?>" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="email" name="email" value="<?php if(isset($lst['email'])){echo $lst['email']; } ?>" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <label>Gender</label><br>
                                                    <div class="row">
                                                        <input class="col-sm-3" type="radio" id="radio4" name="radio2" value="Male" <?php if(isset($lst['gender']) && $lst['gender'] == 'Male'){ ?> checked <?php } ?> checked style="height: 17px; margin-left: -75px; "><label class="col-sm-3" style="margin-left: -95px;">Male</label>

                                                        <input class="col-sm-3" type="radio" id="radio5" name="radio2" value="Female" <?php if(isset($lst['gender']) && $lst['gender'] == 'Female'){ ?> checked <?php } ?> style="height: 17px; margin-left: -190px;"><label class="col-sm-3" style="margin-left: -95px;">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="tel" name="txtmobile" id="telNo" pattern="[0-9]{10}" value="<?php if(isset($lst['mobile'])){echo $lst['mobile']; } ?>" placeholder="(+91)9998843823" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <label>City</label>
                                                    <select name="selectcity" required>
                                                        <option <?php if(isset($lst['city']) && $lst['city'] == 'surat'){ ?> selected <?php } ?> value="surat">surat</option>
                                                        <option <?php if(isset($lst['city']) && $lst['city'] == 'ahemdabad'){ ?> selected <?php } ?> value="ahemdabad">ahemdabad</option>
                                                        <option <?php if(isset($lst['city']) && $lst['city'] == 'bharuch'){ ?> selected <?php } ?> value="bharuch">bharuch</option>
                                                        <option <?php if(isset($lst['city']) && $lst['city'] == 'vadodara'){ ?> selected <?php } ?> value="vadodara">vadodara</option>
                                                        <option <?php if(isset($lst['city']) && $lst['city'] == 'navsari'){ ?> selected <?php } ?> value="navsari">navsari</option>
                                                    </select><br><br>
                                                    <div class="button-box">
                                                        <button type="submit" value="submit" name="submit" class="btn-style cr-btn"><span>Update Details</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                                    
                                                    
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>
            