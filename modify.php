<?php
include_once 'isAuthenticated.php';
include_once 'autoload.php';

$bdd = ConnexionBD::getInstance();
$pdoStat = $bdd->prepare('Select * FROM personne WHERE id=:id');
$pdoStat->bindValue('id',$_GET['id'],PDO::PARAM_INT);
$execute = $pdoStat->execute();
$pers = $pdoStat->fetch();

$pageTitle = 'modify';
include_once 'fragments/header.php';
?>
<table class="table table-hover text-center">
    <tbody  class="table-primary">
    <tr >
        <td>   <a class="nav-link " href="home.php"><i class="fas fa-house-user fa-3x"></i>  <br>  </a>  RETURN HOME </td>
        <td></td>
        <td> <a class="nav-link my-2 my-sm-0 " href="logout.php"><i class="fas fa-sign-out-alt fa-3x"></i><br></a> LOG OUT</td>
    </tr>
    </tbody>
</table>
<h3 class="card border-primary mb-3" style="max-width: 200rem;">
    <div class="card-header text-center"><h3>Modify existing Person</div>
</h3>
<div class="card-body">
    <br>
    <form action="processmodify.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" class="form-control" value="<?=$pers['id']?>"required>
             name: <input type="text" name="name" class="form-control"value="<?=$pers['nam']?>"required>
        <br> job: <input type="text" name="job" class="form-control"value="<?=$pers['job']?>"required>
        <br> age: <input type="number" name="age" class="form-control"value="<?=$pers['age']?>"required>
        <br> firstname: <input type="text" name="firstname" class="form-control" value="<?=$pers['firstname']?>"required>
        <label for="exampleInputFile"><br>image input: </label>
        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"required>
        <br> <button type="submit" class="btn btn-outline-primary"name="upload2">EDIT</button>
    </form>
</div>
