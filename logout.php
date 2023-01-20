<?php 


session_id($_SESSION['Session_id']);

session_start();

session_destroy();

header('location:index.php');


?>