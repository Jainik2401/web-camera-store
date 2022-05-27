<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Accessories Form</strong> 
        </div>
        <div class="card-body card-block">
			<form method="POST" action="acc_process.php" enctype="multipart/form-data">
                                        <div class="row">
                                            
                                            <div class="form-group col-lg-4">
                                                <label>Select Brand</label>
                                                <select name="selbrand" class="form-control col-lg-4">
                                                    

                                                    <?php 
                                                    include("connection.php");
                                                    $qry = "SELECT * FROM brand";
                                                    $result2 = mysqli_query($con,$qry);
                                                    while($lst2 = mysqli_fetch_assoc($result2)){
                                                                                                       

                                                    ?>

                                                    <option value="<?php echo $lst2['brand_id'];?>" <?php 
                                                        if ($lst['brand_id']==$lst2['brand_id']) { echo "selected"; }
                                                    ?> ><?php echo $lst2['brand_name'];?></option>
                                                <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="form-group col-lg-4">
                                                <label>Select Category</label>
                                                <select name="selcategory" class="form-control col-lg-4">
                                                    

                                                    <?php 
                                                    include("connection.php");
                                                    $qry = "SELECT * FROM category";
                                                    $result = mysqli_query($con,$qry);
                                                    while($lst = mysqli_fetch_assoc($result)){
                                                                                                       

                                                    ?>

                                                    <option value="<?php echo $lst['category_id'];?>"><?php echo $lst['category_name'];?></option>
                                                <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <?php  
                                        if(isset($_GET['id']))
                                            {
                                                $qry = "SELECT * FROM accessories WHERE acc_id = ".$_GET['id'];
                                                $result = mysqli_query($con,$qry);

                                                // print_r($result);
                                                // exit;
                                                $lst = mysqli_fetch_array($result);

                                            }

                                        echo "<input name='acc_id' type='hidden' value='".$lst['acc_id']."'>";
                                        ?>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Accessories Name</label>
                                                <input type="textbox" name="txtaccname" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['acc_name'])){ echo $lst['acc_name']; } ?>" placeholder="Enter Accessories name" required>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Image</label>
                                                <input type="file" name="a_image"  class="form-control" onchange="readURL(this)" required>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <img id="blah" height="100" width="100" src="images/<?php if(isset($lst['image'])){ echo $lst['image']; } ?>"/>
                                                <input type="hidden" name="hidnimg" value="<?php if(isset($lst['image'])){ echo $lst['image']; } ?>">
                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Short Description</label>
                                                <textarea class="form-control" name="txtshdesc"><?php if(isset($lst['acc_short_desc'])){ echo $lst['acc_short_desc']; } ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Description</label>
                                                <textarea class="form-control" name="txtdesc"><?php if(isset($lst['acc_desc'])){ echo $lst['acc_desc']; } ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Offer Price</label>
                                                <input type="textbox" name="txtoprice" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['offer_price'])){ echo $lst['offer_price']; } ?>" placeholder="Enter Offer Price" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Selling Price</label>
                                                <input type="textbox" name="txtsprice" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['selling_price'])){ echo $lst['selling_price']; } ?>" placeholder="Enter Selling Price" required>
                                            </div>
                                        </div>

                                        <div class="row">                                            
                                            <div class="form-group col-lg-4">
                                                <label>Is In Warrenty?</label>
                                                <select class="form-control" name="selwarrenty" required>
                                                    <option value="1" <?php if(isset($lst['isinwarrenty']) && $lst['isinwarrenty'] == '1'){ ?> selected <?php } ?>>Yes</option>
                                                    <option value="0" <?php if(isset($lst['isinwarrenty']) && $lst['isinwarrenty'] == '0'){ ?> selected <?php } ?>>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Warrenty Period</label>
                                                <input type="textbox" name="txtwarrenty" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['warrenty_period'])){ echo $lst['warrenty_period']; } ?>" placeholder="Enter Warrenty years">
                                            </div>
                                        </div>

                                        <?php  

                                        if(isset($lst['acc_id']))
                                        {
                                            $value = 'update';
                                        }
                                        else
                                        {
                                            $value = 'submit';
                                        }

                                        ?>

                                        <div class="row" align="center">
                                            <input type="submit" name="submit" value="<?php echo $value; ?>" class="btn btn-primary">
                                            <input type="reset" class="btn btn-default" name="reset">
                                        </div>
                                    </form>  
        </div>
	</div>
</div>


<?php include("footer.php"); ?>
