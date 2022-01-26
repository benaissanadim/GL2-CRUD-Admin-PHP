
<?php
session_start();
unset($_SESSION['user']);
header('location:crud/login/login.php');
?>