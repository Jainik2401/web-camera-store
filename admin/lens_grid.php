<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lens Table</strong>
                                <a href="lens.php"><button class="btn btn-primary btn-sm" style="float: right;">Add</button></a>
                                
                            </div>
                            <div class="card-body">
                                <?php include("connection.php"); 

                                    $qry = "SELECT * FROM lenses, brand WHERE lenses.brand_id = brand.brand_id";
                                    $result = mysqli_query($con,$qry);

                                    

                                    ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Brand name</th>
                                            <th>Image</th>
                                            <th>Model Name</th>
                                            <th>Filter Size</th>
                                            <th>Aperture</th>
                                            <th>Short Description</th>
                                            <th>Long Description</th>
                                            <th>Description</th>
                                            <th>Offer Price</th>
                                            <th>selling Price</th>
                                            <th>Is In Warrenty?</th>
                                            <th>Warrenty Period</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                        <tr class="odd gradeX">    
                                            <td class="center"><?php echo $data['brand_name']; ?></td>
                                            <td class="center"><img height="150" width="150" src="images/<?php echo $data['image']; ?>"></td>
                                            <td class="center"><?php echo $data['model']; ?></td>
                                            <td class="center"><?php echo $data['filtersize']; ?></td>
                                            <td class="center"><?php echo $data['aperture']; ?></td>
                                            <td class="center"><?php echo $data['short_desc']; ?></td>
                                            <td class="center"><?php echo $data['long_desc']; ?></td>
                                            <td class="center"><?php echo $data['description']; ?></td>
                                            <td class="center"><?php echo $data['offer_price']; ?></td>
                                            <td class="center"><?php echo $data['selling_price']; ?></td>
                                            <td class="center"><?php echo $data['isinwarrenty']; ?></td>
                                            <td class="center"><?php echo $data['warrenty_period']; ?></td>

                                            <td class="center"><a href="lens.php?id=<?php echo$data['lens_id']; ?>"><i class="fa fa-edit"></i></a></td>

                                            <td class="center"><a href="lens_process.php?delete=1&did=<?php echo $data['lens_id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
