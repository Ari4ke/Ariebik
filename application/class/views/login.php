<?php 
include "../controllers/loginUser.php";
include "../../database/database.php";

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
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<div class="navbarContent">
  <nav class="navbar navbar-expand-lg bg-light col-12 col-lg-8 offset-lg-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../../index.php">
        <img src="../../../public_html/images/Ariebik logos/ATECH.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span>Menu</span>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <div class="d-flex">
                <a href="login.php">Quiénes somos</a>
            </div>
            <div class="d-flex">
                <a href="register.php">Dónde estamos</a>
            </div>
            <div class="startSession">
                <a href="login.php">Iniciar sesión</a>
            </div>
            <div class="register">
                <a href="register.php">Registrarse</a>
            </div> 
      </div>
    </div>
  </nav>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-8 col-xl-6 offset-xl-3 offset-sm-2">
                <div class="loginUserContent">
                    <form action="../controllers/loginUser.php" method="POST" id="startSession">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inputContents row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="loginTitle">
                                            <h1 class="text-center">Iniciar sesión con Ariebik</h1>
                                        </div>
                                        <div class="userInfo row">
                                                <input class="col-10 offset-1" type="text" class="email" id="email" name="email" placeholder="Email">
                                                <span class="errorEmail" id="email_error"></span>
                                                <input class="col-10 offset-1" type="password" class="password" name="password" placeholder="Contraseña">
                                                <span class="errorPassword" id="error_password"></span>
                                            <a class="col-10 offset-1" href="register.php">¿Aún no te has registrado?</a> 
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
<script>
    $(document).ready(function(){
        $('#startSession input').keyup(function(){
                if(validateEmail()){
                    $("#email").css("border", "2px solid green");
                }else{
                    $("#email").css("border", "2px solid red");
                }
        });
    });

    function validateEmail(){
        var email= $('#email').val();
        var reg = /^ w+( .- w+)*@ w+( .- w+)*( . w 2 3 )+$/;
        if(reg.test(email)){
            return true;
        }else{
            return false;
        }
    }
</script>