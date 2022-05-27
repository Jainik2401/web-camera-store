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
                        
                        <div class="col-lg-8 tab-content" style="margin-top: -75px;">
                            <div id="mix" class="blog-details-wrapper res-mrg-top">
                                <div class="blog-reply-wrapper mt-70">
                                    <h4 class="blog-dec-title">Change Password</h4>
                                    <?php  

                                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                        if(strpos($fullUrl, "pass=success") == true){
                                            echo "<p id='p1' class='success'>Password changed SuccessFully..</p>";
                                        }
                                        elseif(strpos($fullUrl, "pass=err4") == true){
                                            echo "<p id='p1' class='error'>Something Went Wrong..</p>";
                                        }

                                    ?>
                                    <form action="change_pwd_code.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="password" name="pwd" placeholder="Last Password">
                                                    <?php  

                                                    if(strpos($fullUrl, "pass=err3") == true){
                                                    echo "<p id='p1' class='error'>Please Enter Valid Last Password..!</p>";
                                                    }

                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="password" name="npwd" placeholder="New Password">
                                                    <?php  

                                                    if(strpos($fullUrl, "pass=err2") == true){
                                                    echo "<p id='p1' class='error'>Password Mismatch..!</p>";
                                                    }

                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="leave-form">
                                                    <input type="password" name="ncpwd" placeholder="Repeat password">
                                                </div>
                                            </div>
                                            <div class="button-box col-md-4">
                                                <button type="submit" value="submit" name="submit" class="btn-style cr-btn"><span>Change Password</span></button>
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
            