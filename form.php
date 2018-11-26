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

<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselId" data-slide-to="1"></li>
                        <li data-target="#carouselId" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" id="imgContainer">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/fotos/2.jpg"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/fotos/3.jpg"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/fotos/4.jpg"
                                 alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-inverse">
                    <img class="card-img-top img-fluid" src="holder.js/100%x180/" alt="">
                    <div class="card-block p-3">
                        <div class="row">
                            <h4 class="col-12">Fecha Entrada</h4>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Dia</label>
                                    <select class="form-control" id="diaEntrada">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Mes</label>
                                    <select class="form-control" id="mesEntrada">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Año</label>
                                    <select class="form-control" id="añoEntrada">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="col-12">Fecha Salida</h4>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Dia</label>
                                    <select class="form-control" id="diaSalida">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Mes</label>
                                    <select class="form-control" id="mesSalida">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <!-- SELECT -->
                                <div class="form-group">
                                    <label for="exampleSelect1">Año</label>
                                    <select class="form-control" id="añoSalida">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>Precio 450€</h2>
                    <button type="submit" class="btn btn-primary">Reserva</button>
                </div>


            </div>
        </div>

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
                            <div class="review-block-description">this was nice in buy. this was nice in buy. this
                                was
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
                                                    <div class="input-group-text"><i
                                                                class="fa fa-star text-main"></i>
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
                                            <div class="input-group-text"><i class="fa fa-comment text-main"></i>
                                            </div>
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
    </div>
</section>
<?php include_once "footer.php" ?>
</body>
</html>