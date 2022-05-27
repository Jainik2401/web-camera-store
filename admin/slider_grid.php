<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Slider Table</strong>
                                <a href="slider.php"><button class="btn btn-primary btn-sm" style="float: right;">Add</button></a>
                                
                            </div>
                            <div class="card-body">
                                <?php include("connection.php"); 

                                    $qry = "SELECT * FROM slider";
                                    $result = mysqli_query($con,$qry);

                                    

                                    ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Slider Title</th>
                                            <th>Slider Sub Title</th>
                                            <th>Image</th>
                                            <th>Button Text</th>
                                            <th>Button URL</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                        <tr class="odd gradeX">    
                                            <td class="center"><?php echo $data['slider_title']; ?></td>
                                            <td class="center"><?php echo $data['slider_subtitle']; ?></td>
                                            <td class="center"><img height="150" width="150" src="images/<?php echo $data['image']; ?>"></td>
                                            <td class="center"><?php echo $data['btn_text']; ?></td>
                                            <td class="center"><?php echo $data['btn_url']; ?></td>
                                            
                                            <td class="center"><a href="slider.php?id=<?php echo$data['slider_id']; ?>"><i class="fa fa-edit"></i></a></td>

                                            <td class="center"><a href="slider_process.php?delete=1&did=<?php echo $data['slider_id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
