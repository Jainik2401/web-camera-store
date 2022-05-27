<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>
    <?php  

        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl, "user=success") == true){
        echo "<p id='pp' class='success'>Register SuccessFully..</p>";
        }

    ?>
     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">User Table</strong>
                                <a href="userform.php"><button class="btn btn-primary btn-sm" style="float: right;">Add</button></a>
                                
                            </div>
                            <div class="card-body">
                                <?php include("connection.php"); 

                                    $qry = "SELECT * FROM users";
                                    $result = mysqli_query($con,$qry);

                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>E-mail</th>
                                            <th>Mobile</th>
                                            <th>Gender</th>
                                            <th>City</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                        <tr class="odd gradeX">    
                                            <td class="center"><?php echo $data['fname'] ?></td>
                                            <td class="center"><?php echo $data['lname'] ?></td>
                                            <td class="center"><?php echo $data['email'] ?></td>
                                            <td class="center"><?php echo $data['mobile'] ?></td>
                                            <td class="center"><?php echo $data['gender'] ?></td>
                                            <td class="center"><?php echo $data['city'] ?></td>
                                            
                                            
                                            <td class="center"><a href="userform.php?id=<?php echo$data['u_id']; ?>"><i class="fa fa-edit"></i></a></td>

                                            
                                            
                                            <td class="center"><a href="update_user_process.php?delete=1&id=<?php echo$data['u_id']; ?>"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

<?php include("footer.php"); ?>
