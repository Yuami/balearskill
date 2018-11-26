<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/font-awesome.js"></script>
</head>
<body>

<?php include_once "header.php" ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-3" id="container-pro">
                <div class="rating-block"><h4>Media de valoraciones</h4>
                    <h2 class="bold padding-bottom-7">2
                        <small>/ 5</small>
                    </h2>
                    <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                    <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                    <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                    <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                    <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                </div>
            </div>

            <div class="col-md-8 my-3">
                <div class="review-block" id="review-block">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016</div>
                        </div>
                        <div class="col-md-9">
                            <div class="review-block-rate">
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was
                                nice in buy. this was nice in buy this was nice in buy this was nice in buy this was
                                nice in buy this was nice in buy
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-md-9">
                            <div class="review-block-rate">
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was
                                nice in buy. this was nice in buy this was nice in buy this was nice in buy this was
                                nice in buy this was nice in buy
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">nktailor</a></div>
                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-md-9">
                            <div class="review-block-rate">
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                                <i class="fa fa-star star-empty mr-1" aria-hidden="true"></i>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this
                                was
                                nice in buy. this was nice in buy this was nice in buy this was nice in buy this was
                                nice in buy this was nice in buy
                            </div>
                        </div>
                    </div>
                </div>

                <!--  REVIEW   -->
                <div class="container py-3">
                    <form action="mail.php" method="post" class="card-form form-signin">

                        <div class="card card-form">
                            <div class="card-header p-0">
                                <div class="bg-gradient text-white text-center py-2">
                                    <h3><i class="fa fa-star"></i> Review</h3>
                                    <p class="m-0">Comenta sobre este sitio</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->

                                <div class="row">
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-user text-main"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="nombre" name="nombre"
                                                       placeholder="Nombre" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-lg-3">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-star text-main"></i>
                                                    </div>
                                                </div>
                                                <select class="form-control" id="valoracion" name="valoracion">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="nombre" name="email"
                                               placeholder="Titulo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-main"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Envianos tu review"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar"
                                           class="btn btn-primary btn-block rounded-3 py-2">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>

</section>
<section>

</section>
<?php include_once "footer.php" ?>
</body>
</html>