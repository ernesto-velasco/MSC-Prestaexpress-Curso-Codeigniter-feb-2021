<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title><?= getenv('app.name'); ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');
    </style>
</head>

<body>

    <body>
        <div class="container p-5 ">
            <div class="row">
                <div class="col-lg-12">
                    <h1> <i class="fa-solid fa-gauge-high" aria-hidden="true"></i> Dashboard</h1>
                    <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i></a>
                    <p class="text-muted">
                        Bienvendo <?= session('emp_nombre'); ?>-
                        <?= (session('puestos')[0]['pst_nombre']); ?>
                    </p>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p-2">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title ms-1">Solicitud</h5>
                            <p class="card-text text-muted mb-5 ms-1">Solicitar un nuevo prestamo</p>

                            <a href="<?php echo base_url("/admin/solicitud"); ?>" target="_blank" class="btn btn-outline-primary mb-1 mt-1 btn-sm">Entrar</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p-2">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title ms-1">Reportes</h5>
                            <p class="card-text text-muted mb-5 ms-1">Reportes de los prestamos</p>

                            <a href="<?php echo base_url("/admin/reportes"); ?>" target="_blank" class="btn btn-outline-primary mb-1 mt-1 btn-sm">Entrar</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p-2">
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title ms-1">Préstamos</h5>
                            <p class="card-text text-muted mb-5 ms-1">Lista de préstamos solicitados</p>

                            <a href="<?php echo base_url("/admin/prestamos"); ?>" target="_blank" class="btn btn-outline-primary mb-1 mt-1 btn-sm">Entrar</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p-2">

                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title ms-1">Empleados</h5>
                            <p class="card-text text-muted mb-5 ms-1">Empleados registrados</p>

                            <a href="<?php echo base_url("/admin/empleados"); ?>" target="_blank" class="btn btn-outline-primary btn-sm mb-1 mt-1 ">Entrar</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <footer class="footer fixed-bottom">
            <div class="row text-center p-3">
                <p class="small text-muted">&copy;2022</p>
            </div>
        </footer>
    </body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>