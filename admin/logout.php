<?php
session_start();
session_destroy();

unset($_SESSION['u_id']);

header("location:index.php");

 ?>