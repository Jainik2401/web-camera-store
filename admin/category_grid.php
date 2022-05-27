<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Category Table</strong>
                                <a href="category.php"><button class="btn btn-primary btn-sm" style="float: right;">Add</button></a>
                                
                            </div>
                            <div class="card-body">
                                <?php include("connection.php"); 

                                    $qry = "SELECT * FROM category";
                                    $result = mysqli_query($con,$qry);
                                
                                ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                        <tr class="odd gradeX">    
                                            <td class="center"><?php echo $data['category_name']; ?></td>
                                            <td class="center"><img height="150" width="150" src="images/<?php echo $data['category_image']; ?>"></td>
                                            <td class="center"><?php echo $data['category_desc']; ?></td>

                                            <td class="center"><a href="category.php?id=<?php echo$data['category_id']; ?>"><i class="fa fa-edit"></i></a></td>

                                            <td class="center"><a href="category_process.php?delete=1&did=<?php echo $data['category_id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
