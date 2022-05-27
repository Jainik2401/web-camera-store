<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Lens Form</strong> 
        </div>
        <div class="card-body card-block">
			
            <form method="POST" action="lens_process.php" enctype="multipart/form-data">
                                        <?php 
                                        include("connection.php"); 
                                        if(isset($_GET['id']))
                                            {
                                                $qry = "SELECT * FROM lenses WHERE lens_id = ".$_GET['id'];
                                                $result = mysqli_query($con,$qry);
                                                $lst = mysqli_fetch_array($result);
                                            }

                                            // echo "<input name='lens_id' type='hidden' value='".$lst['lens_id']."'>";
                                        ?>
                                        <div class="row">
                                            
                                            <div class="form-group col-lg-4">
                                                <label>Select Brand</label>
                                                <select name="selbrand" class="form-control col-lg-4" required>
                                                    

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
                                                <label>Image</label>
                                                <input type="file" required name="l_image"  class="form-control" onchange="readURL(this)">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <img id="blah" height="100" width="100" src="images/<?php if(isset($lst['image'])){ echo $lst['image']; } ?>"/>
                                                <input type="hidden" name="hidnimg" value="<?php if(isset($lst['image'])){ echo $lst['image']; } ?>">
                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Model</label>
                                                <input type="textbox" required name="txtmodel" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['model'])){ echo $lst['model']; } ?>" placeholder="Enter Model name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Filter Size</label>
                                                <input type="textbox" required name="txtfsize" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['filtersize'])){ echo $lst['filtersize']; } ?>" placeholder="Enter Filter Size">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Aperture</label>
                                                <input type="textbox" required name="txtaperture" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['aperture'])){ echo $lst['aperture']; } ?>" placeholder="Enter Aperture">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Short Description</label>
                                                <textarea class="form-control"  name="txtshdesc"><?php if(isset($lst['short_desc'])){ echo $lst['short_desc']; } ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Long Description</label>
                                                <textarea class="form-control"  name="txtlgdesc"><?php if(isset($lst['long_desc'])){ echo $lst['long_desc']; } ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Description</label>
                                                <textarea class="form-control"  name="txtdesc"><?php if(isset($lst['description'])){ echo $lst['description']; } ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Offer Price</label>
                                                <input type="textbox" required name="txtoprice" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['offer_price'])){ echo $lst['offer_price']; } ?>" placeholder="Enter Offer Price">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Selling Price</label>
                                                <input type="textbox" required name="txtsprice" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['selling_price'])){ echo $lst['selling_price']; } ?>" placeholder="Enter Selling Price">
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
                                                <input type="textbox" required name="txtwarrenty" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['warrenty_period'])){ echo $lst['warrenty_period']; } ?>" placeholder="Enter Warrenty years">
                                            </div>
                                        </div>

                                        <?php  

                                        if(isset($lst['lens_id']))
                                        {
                                            $value = 'update';
                                        }
                                        else
                                        {
                                            $value = 'submit';
                                        }

                                        ?>

                                       
				<div class="row" style="float: right;" id="frm_">
                	<input type="submit" style="margin-right: 10px;" name="submit" class="btn btn-success" value="<?php echo $value; ?>">
                	<input type="reset" class="btn btn-danger" name="reset">
               </div>
            </form>    
        </div>
	</div>
</div>


<?php include("footer.php"); ?>
