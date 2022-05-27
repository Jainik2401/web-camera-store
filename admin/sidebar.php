<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);



if(!isset($_SESSION['u_id'])){
    header('location:index.php');
}



?>
<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
<?php
                    function displayAlert($text, $type) {
                    echo "<div class=\"alert alert-".$type."\" role=\"alert\">
                            <p>".$text."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button></p>
                          </div>";
                    }
        ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VNV-Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/fav1.png">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <style type="text/css">
        #frm_{
            padding-left: 22px;
            padding-right: 22px;
        }
    </style>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color: #191717;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #191717;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./" style="padding-right: 24px; font-family: serif;"><strong>VNV - Admin</strong></a>
                
                <a class="navbar-brand hidden" href="./" style="padding-right: 24px; font-family: serif;"><strong>VNV</strong></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse" style="background-color: #191717;">
                <ul class="nav navbar-nav" style="background-color: #191717;">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="user_grid.php"> <i class="menu-icon fa fa-user"></i>User </a>
                    </li>
                    <li>
                        <a href="Category_grid.php"> <i class="menu-icon fa fa-list-ol"></i>Category </a>
                    </li>
                    <li>
                        <a href="brand_grid.php"> <i class="menu-icon fa fa-user"></i>Brand </a>
                    </li>
                    <li>
                        <a href="camera_grid.php"> <i class="menu-icon fa fa-camera"></i>Camera </a>
                    </li>
                    <li>
                        <a href="lens_grid.php"> <i class="menu-icon fa fa-bullseye"></i>Lens </a>
                    </li>
                    <li>
                        <a href="acc_grid.php"> <i class="menu-icon fa fa-cogs"></i>Accessories </a>
                    </li>
                    <li>
                        <a href="order_grid.php"> <i class="menu-icon fa fa-list-alt"></i>Orders </a>
                    </li>
                    <li>
                        <a href="slider_grid.php"> <i class="menu-icon fa fa-sliders"></i>Slider </a>
                    </li>
                    <li>
                        <a href="page_grid.php"> <i class="menu-icon fa fa-file"></i>Pages </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->