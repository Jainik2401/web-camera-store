<?php  

include("admin/connection.php");
 

if(isset($_POST['submit'])){
	
        $email = $_POST['email'];
        $password =md5($_POST['password']);


        $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        $check = mysqli_num_rows($sql);

        if($check > 0){
        	echo "hii";
            $row = mysqli_fetch_assoc($sql);
            $verification_status = $row['verification_status'];

            if($verification_status == 0){
                echo "You have not confirmed your account yet. Please check your inbox and verify your email id.";
            }else{
                echo "login success";
                header("location:index.php");
            }
        }

    
}

?>

