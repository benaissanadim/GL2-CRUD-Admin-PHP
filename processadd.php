<?php
include_once 'autoload.php';

$bdd = ConnexionBD::getInstance();
$user=$_POST['name'];
$job= $_POST['job'];
$age=$_POST['age'];
$pwd = $_POST['firstname'];
$imagename = $_FILES['image']['name'];

$image = explode(".",$imagename);
$img = $image[0].uniqid().'jpg';
$type = $image[1];
$extensions = array('jpg', 'png','jpeg');


if(isset($_POST['upload'])) {
if(in_array($type,$extensions)) {

    $target = "web/".basename($img);
    $sql = "INSERT INTO personne (id, nam, job, age, firstname, image) VALUES(NULL, '$user','$job','$age','$pwd','$img')";
    $reponse = $bdd->prepare($sql);
    $ok = $reponse->execute() ;
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)&& $ok) {
        header('location:home.php?ok= SUCCESS ADD');
     }
     else {
        header('location:home.php?err= ECHEC PERSON NOT ADDED');
    }  }  else  {  header('location:home.php?err= ECHEC PERSON NOT EDITED UNVALID TYPE IMAGE');

}}
?>
