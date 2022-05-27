
<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>



<?php  

$qry1 = "SELECT * FROM users";
$res1 = mysqli_query($con,$qry1);
$row1 = mysqli_num_rows($res1);

$qry2 = "SELECT * FROM camera";
$res2 = mysqli_query($con,$qry2);
$row2 = mysqli_num_rows($res2);

$qry3 = "SELECT * FROM lenses";
$res3 = mysqli_query($con,$qry3);
$row3 = mysqli_num_rows($res3);

$qry4 = "SELECT * FROM accessories";
$res4 = mysqli_query($con,$qry4);
$row4 = mysqli_num_rows($res4);

$qry5 = "SELECT * FROM order_meta";
$res5 = mysqli_query($con,$qry5);
$row5 = mysqli_num_rows($res5);

?>

<div class="content mt-3">


			<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $row1; ?></span>
                        </h4>
                        <p class="text-light">New Users</p>

                        
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $row2; ?></span>
                        </h4>
                        <p class="text-light">Cameras</p>

                        
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $row3; ?></span>
                        </h4>
                        <p class="text-light">Lenses</p>

                        
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $row4; ?></span>
                        </h4>
                        <p class="text-light">Accessories</p>

                        
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"><?php echo $row5; ?></span>
                        </h4>
                        <p class="text-light">Orders</p>

                        
                    </div>

                </div>
            </div>

</div>
<?php include("footer.php"); ?>
