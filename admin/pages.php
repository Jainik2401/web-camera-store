<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>

<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>Page Form</strong> 
        </div>
        <div class="card-body card-block">
			<form method="POST" action="page_process.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <?php  

                                            include("connection.php");

                                            if(isset($_GET['id']))
                                            {
                                                $qry = "SELECT * FROM page WHERE page_id = ".$_GET['id'];
                                                $result = mysqli_query($con,$qry);

                                                // print_r($result);
                                                // exit;
                                                $lst = mysqli_fetch_array($result);

                                                echo "<input name='pid' type='hidden' value='".$lst['page_id']."'>";
                                            }

                                            ?>
                                            <div class="form-group col-lg-4">
                                                <label>Page Title</label>
                                                <input type="textbox" name="txtptitle" required class="form-control" id="exampleInputEmail1" value="<?php if(isset($lst['page_title'])){ echo $lst['page_title']; } ?>" placeholder="Enter page title">
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-8">
                                                <label>Content</label>
                                                <textarea class="form-control"  name="txtpdesc" placeholder="Enter page content here"><?php if(isset($lst['content'])){ echo $lst['content']; } ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <?php  

                                        if(isset($lst['page_id']))
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
