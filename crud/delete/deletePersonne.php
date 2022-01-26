<?php
include_once 'crud/autoload.php';
session_start();
if (isset($_GET['id'])) {
    $personne = new Personne();
    $response = $personne->deletePersonne($_GET['id']);
}
header('location:crud/home.php?ok= SUCCESS DELETE');