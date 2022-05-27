<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Brand Form</strong> 
        </div>
        <div class="card-body card-block">
			<form method="POST" action="brand_process.php" enctype="multipart/form-data">
                                    	<div class="row">
                                    		<?php  

                                    		include("connection.php");

                                    		if(isset($_GET['id']))
                                    		{
                                    			$qry = "SELECT * FROM brand WHERE brand_id = ".$_GET['id'];
                                    			$result = mysqli_query($con,$qry);

                                    			// print_r($result);
                                    			// exit;
                                    			$lst = mysqli_fetch_array($result);

                                    			echo "<input name='bid' type='hidden' value='".$lst['brand_id']."'>";
                                    		}

                                    		?>
	                                        
	                                        
                                            <div class="form-group col-lg-8">
                                                <label>Brand Name</label>
                                                <input type="textbox" name="txtbname" required class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['brand_name'])){ echo $lst['brand_name']; } ?>" placeholder="Enter brand name">
                                            </div>
                                        </div>
	                                    
	                                    <div class="row">
	                                    	<div class="form-group col-lg-8">
	                                    		<label>Brand Description</label>
	                                    		<textarea class="form-control"  name="txtbdesc" placeholder="Enter brand description here"><?php if(isset($lst['description'])){ echo $lst['description']; } ?></textarea>
	                                    	</div>
	                                    </div>
	                                    
	                                    
	                                    <?php  

                                        if(isset($lst['brand_id']))
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
