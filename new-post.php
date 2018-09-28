<?php require_once "layouts/header.php"; ?>

<?php
require_once "includes/config.php";

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    die;
}
?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <div class="card m-5">
                <div class="card-header">
                    <h1 class="card-title mb-3 font-weight-bold">Add New Watch</h1>
                </div>
                <div class="card-body">
                    <form class="new-post-form" method="post" action="includes/post.php">
                        <label for="name" class="sr-only">Brand/Name</label>
                        <input type="text" name="title" id="name" class="form-control w-100" placeholder="Brand / Name"
                               required
                               autofocus><br>
                        <label <label for="name" class="sr-only">Price</label>
                        <input type="number" name="price" id="name" class="form-control w-100" placeholder="Price"
                               required
                               autofocus><br>
                        <label <label for="name" class="sr-only">Watch Image</label>
                        <label <label for="name" class="sr-only">Watch Image</label>
                        <input type="file" name="file" id="name" class="form-control w-100"
                               placeholder="Add a watch image"
                               required
                               autofocus><br>
                        <label
                        <label for="body" class="sr-only">Details</label>
                        <textarea name="body" maxlength="160" class="form-control" placeholder="Details"></textarea>
                        <br>
                        <button class="btn btn-lg btn-outline-info" type="submit">Add Watch</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.container -->

<?php require_once "layouts/footer.php"; ?>
