<?php  

include("admin/connection.php");
$id = mysqli_real_escape_string($con, $_GET['id']);
mysqli_query($con, "UPDATE users SET verification_status='1' WHERE verification_id='$id'");
echo '<script type="text/javascript">
                alert("Your account is verified");
                location="login.php";
                </script>';

?>