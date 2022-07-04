<?php 
session_start();
unset($_SESSION['connecteNemail']);
session_destroy();
header('Location: ../login.php');
?>