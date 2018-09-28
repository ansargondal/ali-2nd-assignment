<?php require_once "includes/config.php"; ?>
<?php require_once "layouts/header.php"; ?>

<!-- Page Content -->
<div class="container">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Incredible Watches</h1>
            <p class="lead text-muted">We are designing sleek, modern and innovative watches. Feel free to review them
                and let us know
                your thoughts on that. Your reviews are really helpful for our customers.</p>
            <p>
                <a href="#watches-section" class="btn btn-primary my-2">Review Watches</a>
            </p>
        </div>
    </section>
</div><!--!container-->

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h1 class="display-4 font-weight-bold text-info mt-5 text-center">Review Watches</h1>
            </div>
        </div>
        <div class="row mt-5 pt-5 pb-5" id="watches-section">
            <?php

            $stmt = $db->prepare('SELECT * FROM  posts
                      JOIN users  where (posts.user_id = users.id)    order by post_date desc limit 10');
            $stmt->execute();
            $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

            foreach ($posts

                     as $post): ?>

                <div class="col-md-4 ">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             src="img/watch-1.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h3><?= $post->title ?></h3>
                            <p class="card-text"><?= substr($post->body, 0, 150) . '...' ?></p>
                            <div class="ratings mb-4">
                            <span>Average Ratings
                                &nbsp;
                            </span>
                                <span class="float-right">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-full" aria-hidden="true"></i>
                            </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="review.php" class="btn btn-sm btn-outline-info">Rate this Watch</a>
                                <small class="text-muted mr-4 font-weight-bold">Price: $300</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            ?>
        </div>
    </div>
</section>


<?php require_once "layouts/footer.php"; ?>

