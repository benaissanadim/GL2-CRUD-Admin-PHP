<?php
include_once 'autoload.php';
session_start();
$personne = new Personne();

$user = $personne->login($_POST['name'],$_POST['firstname']);
if ($user)
    {$_SESSION['user'] = $user->nam;
        header('location:home.php?ok= WELCOME HOME');
    }
    else {
        header('location:login.php?errorMessage= VERIFY YOUR DATA');
    }
