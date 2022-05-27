<?php  

include("connection.php");
if(!isset($_GET["code"])){
    exit("can't find page");
}

$code = $_GET["code"];

$getemailqry = mysqli_query($con, "SELECT email FROM reset_password WHERE code='$code'");
if(mysqli_num_rows($getemailqry) == 0){
    exit("can't find page");
}

if(isset($_POST["submit"])){

    $pw = md5($_POST['pwd']);
    $rpw = md5($_POST['rpwd']);

    $row = mysqli_fetch_array($getemailqry);
    $email = $row["email"];

    if($pw == $rpw){

        $qry = mysqli_query($con, "UPDATE users SET password='$pw' WHERE email='$email'");

        if($qry){
            $qry = mysqli_query($con, "DELETE FROM reset_password WHERE code='$code'");
            header("location:index.php");
        }
        else{
            echo "something went wrong";
        }

    }
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
                            <label>Reset Password</label>
                        </div>
                        <div class="form-group">
                            <!-- <label>Enter New Password</label> -->
                            <input name="pwd" type="password" class="form-control" placeholder="new Password">
                        </div>

                        <div class="form-group">
                            <!-- <label>Enter Repeat Password</label> -->
                            <input name="rpwd" type="password" class="form-control" placeholder="repeat Password">
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
