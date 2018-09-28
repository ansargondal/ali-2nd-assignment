<?php
require_once 'includes/config.php';

//check if user is logged in
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

    <title>Socio Trill | Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto ">
            <div class="card m-5">
                <div class="card-header">
                    <h1 class="h3 mb-3 font-weight-bold">Sign Up for Trill Account</h1>
                </div>
                <div class="card-body">
                    <form class="form-signin" action="includes/register.php" method="post">

                        <?php
                        if (isset($_SESSION['errors'])) {
                            ?>
                            <div class="alert alert-warning text-left" role="alert">
                                <h4 class="alert-heading">Please Fix the following errors:</h4>
                                <hr>
                                <?php
                                $errors = $_SESSION['errors'];
                                foreach ($errors as $error) {
                                    echo '<p class="">*' . $error . '</p>';
                                }

                                if (isset($_SESSION['post'])) {
                                    $post = $_SESSION['post'];
                                } else {
                                    $post = '';
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <label for="name" class="sr-only">Username</label>
                        <input type="text" name="username" id="name" class="form-control" placeholder="Username"
                               required
                               autofocus
                               value="<?php echo isset($post['username']) ? $post['username'] : '' ?>"><br>
                        <label
                                for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email"
                               required
                               autofocus value="<?php echo isset($post['email']) ? $post['email'] : '' ?>"><br>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                               required>
                        <label for="password" class="sr-only">Confirm Password</label><br>
                        <input type="password" name="confirm_password" id="password" class="form-control"
                               placeholder="Confirm Password"
                               required><br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                        <?php
                        $_SESSION[] = null;
                        session_destroy();
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>