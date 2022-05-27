<?php include("header.php"); ?>

<?php  
$msg = "";
if(isset($_POST['submit'])){
    
        $email = $_POST['email'];
        $password =md5($_POST['password']);

        $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        $check = mysqli_num_rows($sql);

        if($check > 0){
            $row = mysqli_fetch_assoc($sql);
            $verification_status = $row['verification_status'];

            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['fname'] = $row['fname'];

            if($verification_status == 0){
                $msg = "You have not confirmed your account yet. Please check your inbox and verify your email id.";
            }else{
                echo '<script type="text/javascript">
                alert("You are logged in now!");
                location="index.php";
                </script>';
            }
        }

    
}

?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>login Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>login</li>
                        </ul>
                    </div>
                </div>
</div>

<div class="login-register-area ptb-130" style="margin-top: -70px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper border-primary">
                                
                                <div class="login-register-tab-list nav">

                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4> login </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">

                                        <div class="login-form-container">

                                            <div class="login-form">
                                                <form method="POST">
                                                    
                                                    <input name="email" id="eamil" placeholder="Enter Email" type="email">
                                                    <input type="password" id="password" name="password" placeholder="Enter Password">
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit" value="submit" name="submit" class="btn-style cr-btn"><span>Login</span></button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>


<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>