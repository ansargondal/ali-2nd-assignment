<?php require_once "includes/config.php"; ?>

<?php
if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    die;
}
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign In to Incredible Watch</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sign In to Incredible Watch Account</h3>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_SESSION['error'])) {
                        ?>
                        <div class="alert alert-warning text-left" role="alert">
                            <p><?php echo $_SESSION['error'] ?></p>
                        </div>
                        <?php
                        $_SESSION['error'] = null;
                    }
                    ?>
                    <form class="form-signin" method="post" action="includes/login.php">
                        <label for="inputEmail" class="sr-only">Username</label>
                        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username"
                               required
                               autofocus><br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" name="password"
                               placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>