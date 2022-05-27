<?php include("header.php"); ?>

<?php 

$msg = "";
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = md5($_POST['pwd']);
    $mobile = $_POST['txtmobile'];
    $gender = $_POST['radio2'];
    $city = $_POST['selectcity'];

    $check = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users WHERE email = '$email'"));
    if($check > 0){
        $msg = "Email already Exist";
    }else{

        $verification_id = rand(111111111,999999999);

        mysqli_query($con,"INSERT INTO users (fname,lname,email,password,mobile,gender,city,verification_id,verification_status) VALUES('$fname','$lname','$email','$pass','$mobile','$gender','$city',$verification_id,0)");

        $msg = "We've just sent a verification link to <strong>$email</strong>. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.";

        $mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://localhost/vnv/check.php?id=$verification_id'>http://localhost/vnv/check.php?id=$verification_id</a>";

        smtp_mailer($email,'Account Verification',$mailHtml);

    }
}

function smtp_mailer($to,$subject, $msg){
    require_once("smtp/class.phpmailer.php");
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 1; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'TLS'; 
    $mail->Host = "smtp.sendgrid.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "dakoladiya@gmail.com";
    $mail->Password = "Nikunj&@22";
    $mail->SetFrom("dakoladiya@gmail.com");
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);
    if(!$mail->Send()){
        return 0;
    }else{
        return 1;
    }
} 

?>

<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>Register Page</h2>
                        <ul>
                            <li>
                                <a href="index.php">home</a>
                            </li>
                            <li>Register</li>
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
                                        <h4> Register </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    
                                    <div id="lg1" class="tab-pane active">

                                        <div class="login-form-container">

                                            <div class="login-form">
                                                <form action="#" method="POST">
                                                    <div class="message">
                                                        <?php echo $msg; ?>
                                                    </div>
                                                    <input type="text" name="fname" placeholder="First name" required>
                                                    <input type="text" name="lname" placeholder="Last name" required>
                                                    <input name="email" placeholder="Email" type="email" required>
                                                    <input type="password" name="pwd" placeholder="Password"required>
                                                    <input type="tel" name="txtmobile" id="telNo" pattern="[0-9]{10}" placeholder="(+91)9998843823" required>
                                                    <label>Gender</label><br>
                                                    <div class="row">
                                                        <input class="col-sm-3" type="radio" id="radio4" name="radio2" value="Male" checked style="height: 17px; margin-left: -45px; "><label class="col-sm-3" style="margin-left: -60px;">Male</label>
                                                        <input class="col-sm-3" type="radio" id="radio5" name="radio2" value="Female" style="height: 17px; margin-left: -120px;"><label class="col-sm-3" style="margin-left: -60px;">Female</label>
                                                    </div>
                                                    <label>City</label>
                                                    <select name="selectcity" required>
                                                        <option value="surat">surat</option>
                                                        <option value="ahemdabad">ahemdabad</option>
                                                        <option value="bharuch">bharuch</option>
                                                        <option value="vadodara">vadodara</option>
                                                        <option value="navsari">navsari</option>
                                                    </select><br><br>
                                                    <div class="button-box">
                                                        <button type="submit" value="submit" name="submit" class="btn-style cr-btn"><span>Register</span></button>
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