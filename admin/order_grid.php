<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

     <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Order Table</strong>
                                
                                
                            </div>
                            <div class="card-body">
                                <?php include("connection.php"); 

                                        $qry = "SELECT * FROM order_meta";
                                        $result = mysqli_query($con,$qry);

                                        

                                        ?>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>Order No</th>
                                                <th>Product Id</th>
                                                <th>User id</th>                       
                                                <th>Order Type</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Total Amount</th>
                                                <th>Payment Method</th>
                                                <th>Order Date-Time</th>
                                                <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($data = mysqli_fetch_assoc($result)){ ?>
                                        <tr class="odd gradeX">    
                                            <td class="center"><?php echo $data['order_id'] ?></td>
                                                <td class="center"><?php echo $data['meta_id'] ?></td>
                                                <td class="center"><?php echo $data['user_id'] ?></td>
                                                <td class="center"><?php echo $data['meta_table'] ?></td>
                                                <td class="center"><img height="150" width="150" src="images/<?php echo $data['image']; ?>"></td>
                                                <td class="center"><?php echo $data['qty'] ?></td>
                                                
                                                <td class="center"><?php echo $data['total'] ?></td>
                                                <td class="center"><?php echo $data['payment_method'] ?></td>
                                                <td class="center"><?php echo $data['order_date'] ?></td>
                                                
                                                <td class="center"><a href="order_process.php?delete=1&id=<?php echo$data['order_id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
