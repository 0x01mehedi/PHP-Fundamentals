<?php session_start();

 unset($_SESSION['user']);
 unset($_SESSION["img"]);
 session_destroy();
 
 header("location:index.php");

?>