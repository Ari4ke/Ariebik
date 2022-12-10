<?php 
include "application/class/controllers/dashboard/login.php";
include "application/database/database.php";

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../../public_html/css/login.scss">
</head>
<body>
    <div class="navbarContent row">
    <nav class="navbar navbar-expand-lg bg-light col-lg-8 offset-lg-2">
        <div class="container-fluid">
        <a class="navbar-brand" href="../../../index.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <div class="d-flex">
                    <a href="login.php">Quienes somos</a>
                </div>
                <div class="d-flex">
                    <a href="register.php">Donde estamos</a>
                </div>
                <div class="d-flex">
                    <a href="login.php">Iniciar sesión</a>
                </div>
                <div class="d-flex">
                    <a href="register.php">Registrarse</a>
                </div> 
        </div>
        </div>
    </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2">
                <div class="loginUserContent">
                    <form action="application/class/controllers/dashboard/login.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inputContents row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="loginTitle">
                                            <h1 class="text-center">Bienvenido al backend de Ariebik</h1>
                                        </div>
                                        <div class="userInfo row">
                                                <input class="col-10 offset-1" type="text" name="email" placeholder="Email">
                                                <input class="col-10 offset-1" type="password" name="password" placeholder="Contraseña">
                                            <div class="logInUser">
                                                <input class="col-6 offset-3 btn-log" type="submit" class="btn btn-primary" name="submit" value="Enviar">
                                            </div>
                                        </div>                        
                                    </div>               
                                </div>
                            </div>
                        </div>
                </form>
                </div> 
            </div>
        </div>
    </div>
    
</body>
</html>