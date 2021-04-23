<?php
$pageTitle = 'add';
include_once 'fragments/header.php';
?>

<table class="table table-hover text-center">
    <tbody  class="table-primary">
    <tr>
        <td>  <a class="nav-link" href="home.php"><i class="fas fa-house-user fa-3x"></i>  <br>  </a>  RETURN HOME </td>
        <td></td>
        <td><a class="nav-link my-2 my-sm-0" href="logout.php"><i class="fas fa-sign-out-alt fa-3x"></i><br></a> LOG OUT</td>
    </tr>
    </tbody>
</table>
<h3 class="card border-primary mb-3" style="max-width: 200rem;">
    <div class="card-header text-center"><h3>Add new Person</div> </h3> <br>

<?php if (isset($_GET['err'])) {?>
    <div class="alert alert-danger">
        <?= $_GET['err'] ?>
    </div>
    <?php } ?>
<div class="card-body">
    <form action="processadd.php" method="post" enctype="multipart/form-data">
        name: <input type="text" name="name" class="form-control"required>
        <br> job: <input type="text" name="job" class="form-control"required>
        <br> age: <input type="number" name="age" class="form-control"required>
        <br> firstname: <input type="text" name="firstname" class="form-control"required>
        <br>  <label for="exampleInputFile">image input: </label>
        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
        <br> <button type="submit" class="btn btn-outline-primary"name="upload">ADD</button>
    </form>
</div>
