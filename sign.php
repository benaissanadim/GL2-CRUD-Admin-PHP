<?php
$pageTitle = 'sign';
include_once 'fragments/header.php';
?>

<h3 class="card border-primary mb-3" style="max-width: 200rem;">
    <div class="card-header text-center"><h3>SIGN UP</div> </h3> <br>

<?php if (isset($_GET['err'])) {?>
    <div class="alert alert-danger">
        <?= $_GET['err'] ?>
    </div>
<?php } ?>
<div class="card-body">
    <form action="processsign.php" method="post" enctype="multipart/form-data">
        name: <input type="text" name="name" class="form-control"required>
        <br> job: <input type="text" name="job" class="form-control"required>
        <br> age: <input type="number" name="age" class="form-control"required>
        <br> firstname: <input type="text" name="firstname" class="form-control"required>
        <br>  <label for="exampleInputFile">image input: </label>
        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
        <br> <button type="submit" class="btn btn-outline-primary"name="upload">SUBMIT</button>
    </form>
</div>
