<?php
$pageTitle = 'login';
include_once 'fragments/header.php';
?>

<br>
<h3 class="card border-primary mb-3" style="max-width: 200rem;">
    <div class="card-header text-center"><h3>Login Page</div> </h3>
    <div class="card-body">
        <?php
        if (isset($_GET['errorMessage'])) {

            ?>
            <div class="alert alert-danger">
                <?= $_GET['errorMessage'] ?>
            </div>
            <?php
        }
        ?>
        <form action="processLogin.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                        type="email"
                        name="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <br>
                <label for="Password">Password </label>
                <div class="wrapper">
                <input type="password" name="pwd" class="form-control" value="" id="password" placeholder="Password " required >
                    <small id="pwdHelp" class="form-text text-muted"><i class="far fa-eye fa-1x" id="togglePassword">   </i>  Show Or Hide Password
                    </small>
                    </label>
                <br>  </div>

                <button type="submit" class="btn btn-primary">LOG IN</button>
        </form>
    </div>
<script src="../../js/app.js">
</script>
</body>
</html>