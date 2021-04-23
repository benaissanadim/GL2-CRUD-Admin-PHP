<?php
session_start();

$email = $_POST['email'];
$password = $_POST['pwd'];

if (isset($email)&&isset($password)) {
    if ($email == 'nadim.ben.aissaa@gmail.com' && $password == "nadimGL2") {
        $_SESSION['user']="GL2";
        header('location:home.php?ok=WELCOME ADMINISTRATOR');
    } else {
        header('location:login.php?errorMessage=VERIFY YOUR CREDENTIALS');
    }
} else {
    header('location:login.php?errorMessage=VERIFY YOUR CREDENTIALS');
}