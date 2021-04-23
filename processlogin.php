<?php
session_start();
/*
 * 1- Récupérer les identifiants
 * Tester si le login et le mot de passe correspondent
 * Si oui
 *  Redirige vers la page d'accueil
 * Si non
 *  Redirgie vers la page login avec un message d'erreur
 * */

//1
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