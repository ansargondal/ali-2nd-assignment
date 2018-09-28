<?php require_once "layouts/header.php"; ?>


<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">Post Title</h1>

            <hr>

            <!-- Date/Time -->
            <p class="font-weight-bold">Price: $300</p>

            <hr>

            <!-- Preview Image -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/watch-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/watch-2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/watch-3.jpg" alt="First slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <hr>


            <p class="lead"> sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat
                totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam
                tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae?
                Qui, necessitatibus, est!</p>

            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <section id="demo-right">
                        <form action="#" method="get" id="better-rating-form">
                            <input type="text" name="name" placeholder="Your Name" id="" required>
                            <div class="rating">

                                <i class="fa fa-star" data-rate="1"></i>
                                <i class="fa fa-star" data-rate="2"></i>
                                <i class="fa fa-star" data-rate="3"></i>
                                <i class="fa fa-star" data-rate="4"></i>
                                <i class="fa fa-star" data-rate="5"></i>
                                <input type="hidden" id="rating-count" name="rating" value="0">
                            </div>
                            <textarea name="rate" id="" cols="30" rows="10" required></textarea>
                            <button type="submit" class="btn btn-outline-info">Submit Review</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 pt-4">

            <!-- Categories Widget -->
            <div class="card my-4 mt-5">
                <h4 class="card-header">Average user rating</h4>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="rating-block text-center">
                                <h2 class="bold padding-bottom-7">4.3
                                    <small>/ 5</small>
                                </h2>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h4 class="card-header">Rating breakdown</h4>
                <div class="card-body">
                    <div class="col-sm-12">
                        <div class="pull-left">
                            <div class="pull-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">5 <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                                         aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin-left:10px;">1</div>
                        </div>
                        <div class="pull-left">
                            <div class="pull-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">4 <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                                         aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin-left:10px;">1</div>
                        </div>
                        <div class="pull-left">
                            <div class="pull-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">3 <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                                         aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin-left:10px;">0</div>
                        </div>
                        <div class="pull-left">
                            <div class="pull-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">2 <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                                         aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin-left:10px;">0</div>
                        </div>
                        <div class="pull-left">
                            <div class="pull-left" style="width:35px; line-height:1;">
                                <div style="height:9px; margin:5px 0;">1 <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="pull-left" style="width:180px;">
                                <div class="progress" style="height:9px; margin:8px 0;">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                                         aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin-left:10px;">0</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <hr/>
            <div class="review-block">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/profile_pic.png" class="img-rounded w-50">
                        <div class="review-block-name ml-2"><a href="#">nktailor</a></div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title font-weight-bold mt-3">this was nice in buy</div>
                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice
                            in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                            this was nice in buy
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                        <div class="review-block-name"><a href="#">nktailor</a></div>
                        <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">this was nice in buy</div>
                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice
                            in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                            this was nice in buy
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                        <div class="review-block-name"><a href="#">nktailor</a></div>
                        <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">this was nice in buy</div>
                        <div class="review-block-description mb-5">this was nice in buy. this was nice in buy. this was
                            nice
                            in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy
                            this was nice in buy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<?php require_once "layouts/footer.php"; ?>
