<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Slider Form</strong> 
        </div>
        <div class="card-body card-block">
			<form method="POST" action="slider_process.php" enctype="multipart/form-data">

                                        <?php 
                                        include("connection.php");

                                        if(isset($_GET['id']))
                                            {
                                                $qry = "SELECT * FROM slider WHERE slider_id = ".$_GET['id'];
                                                $result = mysqli_query($con,$qry);

                                                // print_r($result);
                                                // exit;
                                                $lst = mysqli_fetch_array($result);

                                            }

                                        // echo "<input name='slider_id' type='hidden' value='".$lst['slider_id']."'>";
                                        ?>
                                        
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <input type="hidden" name="slider_id" value="<?php echo $lst['slider_id']; ?>">
                                                <label>Slider Title</label>
                                                <input type="textbox" name="txttitle" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['slider_title'])){ echo $lst['slider_title']; } ?>" placeholder="Enter Slider Title" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Slider Sub Title</label>
                                                <input type="textbox" name="txtstitle" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['slider_subtitle'])){ echo $lst['slider_subtitle']; } ?>" placeholder="Enter Slider Sub Title" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Image</label>
                                                <input type="file" id="file-input" name="s_image"  class="form-control-file" onchange="readURL(this)" required>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <img id="blah" height="100" width="100" src="images/<?php if(isset($lst['image'])){ echo $lst['image']; } ?>"/>
                                                <input type="hidden" name="hidnimg" value="<?php if(isset($lst['image'])){ echo $lst['image']; } ?>">
                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Button Text</label>
                                                <input type="textbox" name="txtbtn" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['btn_text'])){ echo $lst['btn_text']; } ?>" required placeholder="Enter Button Text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Button Url</label>
                                                <input type="textbox" name="txturl" class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['btn_url'])){ echo $lst['btn_url']; } ?>" required placeholder="Enter Button Url">
                                            </div>
                                        </div>

                                        <?php  

                                        if(isset($lst['slider_id']))
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
