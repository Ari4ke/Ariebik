<?php 
include "../controllers/registerUser.php";
include "../../database/database.php";
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Iniciar sesión</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
        </nav>
        <form action="../controllers/registerUser.php" method="post" class="register">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1 class="text-center">Registrar usuario</h1>
                    <div class="mb-3">
                        <label for="username">Nombre</label>
                        <input type="text" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="username">Apellidos</label>
                        <input type="text" name="surname">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password">
                    </div>
                    <a href="login.php">¿Ya tienes una cuenta?</a> 
                    <div class="offset-lg-6">
                        <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
                    </div>
                </div>                
            </div>
        </form>


</body>
</html>