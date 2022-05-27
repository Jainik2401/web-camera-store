<?php include("sidebar.php"); ?>

<?php include("header.php"); ?>
									<?php  

                                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                        if (strpos($fullUrl, "user=error") == true) {
                                            echo "<p id='err' class='error'>Something Wrong..Try again!!</p>";
                                        }
                                        elseif (strpos($fullUrl, "pass=error") == true) {
                                            echo "<p id='err' class='error'>Password Mismatch...!!</p>";
                                        }
                                        elseif (strpos($fullUrl, "field=warning") == true) {
                                            echo "<p id='err' class='warning'>Please fill all the fields.</p>";
                                        }
                                        elseif (strpos($fullUrl, "email=error") == true) {
                                            echo "<p id='err' class='error'>Email already exist..!!</p>";
                                        }
                                        
                                    ?>
<div class="col-lg-12">
	<div class="card">
        <div class="card-header">
            <strong>User Form</strong> 
        </div>

        <div class="card-body card-block">
			<form method="POST" action="update_user_process.php" class="was-validated">
				<div class="row">
	                <div class="form-group col-lg-4">
	                    <strong><label>First name</label></strong>
	                    <?php 
		                    if(isset($_GET['id']))
		                    {
							$qry = "SELECT * from users where u_id=".$_GET['id'];
																					
								$result = mysqli_query($con,$qry);
								$lst = mysqli_fetch_array($result); 

								
								echo "<input type='hidden' name='u_id' value='".$lst['u_id']."'>";
		                    }
						?>

	                    <input type="textbox" name="txtfname" value="<?php if(isset($lst['fname'])){echo $lst['fname']; } ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter firstname" required>
	                                            
	                </div>
	                <div class="form-group col-lg-4">
	                    <label>Last name</label>
	                    <input type="textbox" name="txtlname" value="<?php if(isset($lst['lname'])){echo $lst['lname']; } ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter lastname" required>
	                </div>
	                <div class="form-group col-lg-4">
	                    <label for="exampleInputEmail1">Email address</label>


	                    <input type="email" id="email-input" name="txtemail" class="form-control"	value="<?php if(isset($lst['email'])){echo $lst['email']; } ?>" id="exampleInputEmail1" placeholder="Enter email">
	                </div>
	            </div>
	            <div class="row">     
	                <div class="form-group col-lg-4">
	                    <label>Password</label>
	                    <input type="password" name="txtpass" value="<?php if(isset($lst['password'])){echo $lst['password']; } ?>" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	                </div>
	                <?php if(!isset($lst['u_id'])){ ?>
	                <div class="form-group col-lg-4">
	                    <label>Conform Password</label>
	                    <input type="password" name="txtcpass" class="form-control" id="exampleInputPassword1" placeholder="Conform Password" required>
	                </div>
	             <?php } ?>
	                <div class="form-group col-lg-4">
	                    <label>Mobile</label>
	                    <input type="tel" name="txtmobile"	value="<?php if(isset($lst['mobile'])){echo $lst['mobile']; } ?>" class="form-control" id="telNo" pattern="[0-9]{10}" placeholder="(+91)9998843823" required>
	                </div>
	            </div>
                <div class="row">
	                <div class="form-gruop col-lg-4">
	                    <label>Gender</label><br>
		                <div>
		                <div class="radio3 radio-check radio-inline">
		                    <input type="radio" id="radio4" name="radio2" value="male" <?php if(isset($lst['gender']) && $lst['gender'] == 'male'){ ?> checked <?php } ?> required checked>
		                    <label>male</label>
		                </div>
		                <div class="radio3 radio-check radio-inline">
		                    <input type="radio" id="radio5" name="radio2" value="female" <?php if(isset($lst['gender']) && $lst['gender'] == 'female'){ ?> checked <?php } ?>>
		                    <label>female</label>
		                </div>
		                 
		                </div>
	                </div>
	                <div class="form-group col-lg-4">
	                    <label>City</label>
	                    <select class="form-control" name="selectcity" required>
	                     	<option <?php if(isset($lst['city']) && $lst['city'] == 'surat'){ ?> selected <?php } ?> value="surat">surat</option>
	                     	<option <?php if(isset($lst['city']) && $lst['city'] == 'ahemdabad'){ ?> selected <?php } ?> value="ahemdabad">ahemdabad</option>
	                     	<option <?php if(isset($lst['city']) && $lst['city'] == 'bharuch'){ ?> selected <?php } ?> value="bharuch">bharuch</option>
	                     	<option <?php if(isset($lst['city']) && $lst['city'] == 'vadodara'){ ?> selected <?php } ?> value="vadodara">vadodara</option>
	                     	<option <?php if(isset($lst['city']) && $lst['city'] == 'navsari'){ ?> selected <?php } ?> value="navsari">navsari</option>
	                    </select>
	                </div>
	            </div>
	                                    
	           <?php  

	           if(isset($lst['u_id']))
	           {
	            $value = "update";
	           }
	           else
	           {
	            $value = "submit";
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
