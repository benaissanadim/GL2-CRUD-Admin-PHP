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
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pwd" class="form-control" value="" id="exampleInputPassword1" placeholder="Password" required><br>
                <label for="check">
                <input type="checkbox" class="form-check-input" id="check" onclick="myFunction()">Show Password </label>
                <br> <br>
                    <button type="submit" class="btn btn-primary">LOG IN</button>
        </form>

    </div>
<script> src="app.js"
 </script>
</body>
</html>