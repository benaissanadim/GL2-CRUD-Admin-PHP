<?php
include_once 'autoload.php';

$bdd = ConnexionBD::getInstance();

$id=$_POST['id'];
$user=$_POST['name'];
$job= $_POST['job'];
$age=$_POST['age'];
$pwd = $_POST['firstname'];

$imagename = $_FILES['image']['name'];
$image = explode(".",$imagename);
$img = $image[0].uniqid();
$type = $image[1];
$extensions = array('jpg', 'png','jpeg');

if(isset($_POST['upload2'])) {
    if(in_array($type,$extensions)) {
        $target = "web/".basename($img);
        $sql = "UPDATE personne SET  nam='$user', job='$job', age='$age', firstname='$pwd',image='$img' where id='$id'";
        $reponse = $bdd->prepare($sql);
        $ok = $reponse->execute() ;
        if (move_uploaded_file($_FILES['image']['tmp_name'],$target)&& $ok) {
            header('location:home.php?ok= SUCCESS EDIT');
        }
        else header('location:home.php?err= ECHEC PERSON NOT EDITED') ; }
    else  {  header('location:home.php?err= ECHEC PERSON NOT EDITED UNVALID TYPE IMAGE');
    }}
?>
