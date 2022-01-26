<?php
include_once 'crud/autoload.php';
include_once 'crud/isAuthenticated.php';


$personne = new Personne();
$personnes = $personne->findAll();
$pageTitle = 'home';
include_once 'fragments/header.php';
?>
<table class="table table-hover text-center">
    <tbody  class="table-primary">
    <tr >
        <td> <a class="nav-link" href="home.php"><i class="fas fa-house-user fa-3x"></i> <br>  </a>  <?=$_SESSION['user']?> Home </td>
        <td><a class="nav-link" href="add/add.php?val=1"> <i class="fas fa-plus-square fa-3x"></i> <br> </a> ADD PERSON </td>
        <td><a class="nav-link my-2 my-sm-0" href="logout.php"><i class="fas fa-sign-out-alt fa-3x"></i><br></a> LOG OUT</td>
    </tr>
    </tbody>
</table>

    <?php if (isset($_GET['err'])) {?>
        <div class="alert alert-danger">
            <?= $_GET['err'] ?>
        </div>
    <?php } ?>

    <?php if (isset($_GET['ok'])) {?>
        <div class="alert alert-success" role="alert">
            <?= $_GET['ok'] ?>
        </div>
    <?php } ?>

<table class="table text-center">
    <tr >
        <th>NAME</th>
        <th>FIRSTNAME</th>
        <th>AGE</th>
        <th>JOB</th>
        <th>IMAGE</th>
        <th>DELETE</th>
        <th>EDIT</th>
    </tr>
    <?php foreach ($personnes as $pers) {?>
        <tr>
            <th><?= $pers->nam ?></th>
            <th><?= $pers->firstname ?></th>
            <th><?= $pers->age ?></th>
            <th><?= $pers->job ?></th>
            <th> <img src = "web/<?= $pers->image ?> " width="200" height="200"></th>
            <th><a href="delete/deletePersonne.php?id=<?=$pers->id ?>"><i class="fa fa-trash fa-3x" aria-hidden="true"></i></a></th>
            <th><a href="update/update.php?id=<?=$pers->id ?>"><i class="fas fa-user-edit fa-3x"></i></a></th>
        </tr>
    <?php } ?>
</table>

