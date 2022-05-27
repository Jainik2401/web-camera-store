<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Category Form</strong> 
        </div>
        <div class="card-body card-block">
			<form method="POST" action="category_process.php" enctype="multipart/form-data">
                                    	<div class="row">
                                    		<?php  

                                    		include("connection.php");

                                    		if(isset($_GET['id']))
                                    		{
                                    			$qry = "SELECT * FROM category WHERE category_id = ".$_GET['id'];
                                    			$result = mysqli_query($con,$qry);

                                    			// print_r($result);
                                    			// exit;
                                    			$lst = mysqli_fetch_array($result);

                                    			echo "<input name='category_id' type='hidden' value='".$lst['category_id']."'>";
                                    		}

                                    		?>
	                                        <div class="form-group col-lg-4">
	                                            <label>Category name</label>
	                                            <input type="textbox" required name="txtcname" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['category_name'])){ echo $lst['category_name']; } ?>" placeholder="Enter category name">
	                                        </div>
	                                        <div class="form-group col-lg-4">
	                                            <label>Category Image</label>

	                                           	<input type="file" <?php if(!isset($lst['category_id'])){ ?> required <?php } ?> id="file-input" name="c_image"  class="form-control-file">
	                                        </div>
	                                        <div class="form-group col-lg-4">
	                                        	<img id="blah" src="images/<?php if(isset($lst['category_image'])){ echo $lst['category_image']; } ?>"/>
                                                <input type="hidden" name="hidnimg" value="<?php if(isset($lst['category_image'])){ echo $lst['category_image']; } ?>">
	            
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                    	<div class="form-group col-lg-8">
	                                    		<label>Description</label>
	                                    		<textarea class="form-control"  name="txtcdesc"><?php if(isset($lst['category_desc'])){ echo $lst['category_desc']; } ?></textarea>
	                                    	</div>
	                                    </div>
	                                    <?php  

                                        if(isset($lst['category_id']))
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
