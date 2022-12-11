<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--styles-->
    <link rel="stylesheet" href="public_html/css/index.scss">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Ariebik</title>
</head>
<body>
<div class="navbarContent">
  <nav class="navbar navbar-expand-lg bg-light col-12 col-lg-8 offset-lg-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="public_html/images/Ariebik logos/ATECH.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <div class="d-flex">
                <a href="login.php">Quiénes somos</a>
            </div>
            <div class="d-flex">
                <a href="register.php">Dónde estamos</a>
            </div>
            <div class="startSession">
                <a href="application/class/views/login.php">Iniciar sesión</a>
            </div>
            <div class="register">
                <a href="application/class/views/register.php">Registrarse</a>
            </div>
            <?php if(!empty($_SESSION['email'])){?>
              <div>
                  <a href="application/class/views/panel.php"  class="btn btn-info" >Acceder al panel</a>
              </div>
            <?php } ?>
      </div>
    </div>
  </nav>
</div>
<div class="mainBody">
  <div class="row">
      <div class="col-12 col-sm-10 col-md-8 offset-md-2">
        <div class="row">
          <div class="col-10 offset-1 col-sm-6 offset-sm-0">
            <div class="mainBodyCont">
              <div class="textContainer">
                <h4 class="text-center">Mantenimiento y reparación de bicicletas</h4>
                <hr>
                <p>Bienvenidos a Ariebik la primera página web donde registrar y guardar sus bicicletas de forma completamente online</p>
              </div>   
            </div>
          </div>
          <div class="col-10 offset-1 col-sm-6 offset-sm-0">
            <div class="mainBodyCont">
              <div class="textContainer">
                <h4 class="text-center">Guardado de bicicletas</h4>
                <hr>
                <p>Nuestra página dispone de un sistema de registro de usuarios y un registro de bicicletas para poder enviarlas a taller y repararlas</p>
              </div>   
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
    
</body>
</html>