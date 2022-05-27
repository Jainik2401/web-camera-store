<?php  
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("connection.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = $_POST['txtemail'];
$qry = "SELECT * FROM users WHERE email = '$email' AND is_admin = 1";
$result = mysqli_query($con,$qry);

if(mysqli_num_rows($result) > 0)
{

        if(isset($_POST["txtemail"])){

            $emailTo = $_POST["txtemail"];

            $code = uniqid(true);
            $qry = mysqli_query($con,"INSERT INTO reset_password (code, email) VALUES ('$code', '$emailTo')");
            if(!$qry){
                exit("Error");
            }
           

            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'dakoladiya@gmail.com';                     // SMTP username
                $mail->Password   = 'NBRDA&@2204';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('dakoladiya@gmail.com', 'VNV - The Camera Store');
                $mail->addAddress("$emailTo");     // Add a recipient
                $mail->addReplyTo('no-reply@vnv.com', 'No Reply');

                // Content
                $url = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/change_pass.php?code=$code";
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Your reset password link';
                $mail->Body    = "<h1>You requested to reset password
                                  <a href='$url'>click here</a> to do so";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo '<script type="text/javascript">
                alert("Link has been sent to your Email Id");
                location="index.php";
                </script>';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

}
else{
    echo "error";
}

?>

<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VNV - Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/fav1.png">
    


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body style="background-image: url('images/12.jpg');">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/vvv.png" alt="" style="height: 200px; width: 200px; margin-bottom: -59px;">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="#">
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="txtemail" type="email" class="form-control" placeholder="Email" autocomplete="off">
                        </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
