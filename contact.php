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
    <div class="container py-3">
        <form action="mail.php" method="post" class="card-form form-signin">

            <div class="card card-form">
                <div class="card-header p-0">
                    <div class="bg-gradient text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                        <p class="m-0">Con gusto te ayudaremos</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-main"></i></div>
                            </div>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                   placeholder="Nombre y Apellido" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-main"></i></div>
                            </div>
                            <input type="email" class="form-control" id="nombre" name="email"
                                   placeholder="ejemplo@gmail.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-main"></i></div>
                            </div>
                            <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Enviar" class="btn btn-primary btn-block rounded-3 py-2">
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>

<?php include_once "footer.php" ?>
</body>
</html>