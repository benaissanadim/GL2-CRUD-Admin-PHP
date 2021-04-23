<?php
$pageTitle = 'login';
include_once 'fragments/header.php';
?>

<br>
<h3 class="card border-primary mb-3" style="max-width: 200rem;">
    <div class="card-header text-center"><h3>Login Page</div> </h3>
    <div class="card-body">
        <?php
        if (isset($_GET['errorMessage'])) { ?>
        <div class="alert alert-danger">
           <?= $_GET['errorMessage'] ?>
        </div>
        <?php } ?>
        <br>
        <form action="processlogin.php" method="post">
            <div class="form-group">
                 name: <input type="text" name="name" class="form-control"required>
                <br> firstname: <input type="text" name="firstname" class="form-control"required>
                <br> <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                <a href="sign.php"> <button type="button" class="btn btn-primary" name="signup">SIGN UP</button> </a>
                <br>
             </div>
        </form>
