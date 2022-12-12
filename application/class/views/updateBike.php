<?php
include("../controllers/update.php");

if(!isset($_SESSION['email'])){
    header("location: ../../../index.php");
}
/*Este código lo que hace es realizar una consulta cogieno la id del get y luego se la mete a un input en este caso id para cuando enviemos los datos*/
$id = $_GET['id'];

$sql="SELECT * FROM user_bike WHERE id = $id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="../../../public_html/css/addBike.scss">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!--sweetalert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <a href="">Quiénes somos</a>
            </div>
            <div class="d-flex">
                <a href="">Dónde estamos</a>
            </div>
            <div class="startSession">
                <a href="login.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
            <div>
                <a href="addBikeUser.php"  class="btn btn-info" >Añadir bicicletas</a>
            </div>
      </div>
    </div>
  </nav>
</div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-8 col-xl-6 offset-xl-3 offset-sm-2">
            <div class="loginUserContent">
                <form action="../controllers/update.php" method="POST">
                    <div class="inputContents row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="loginTitle">
                                <h1 class="text-center">Actualizar bici</h1>
                            </div>
                            <div class="userInfo row">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>"></input>
                                    <input class="col-10 offset-1" type="text" name="brand" value="<?= $row['brand_bike'] ?>" placeholder="Marca">
                                    <input class="col-10 offset-1" type="text" name="model" value="<?= $row['model_bike'] ?>" placeholder="Modelo">
                                    <select class="col-10 offset-1" name="bike_type">
                                        <option value="mountain">Montaña</option>
                                        <option value="road">Carretera</option>
                                        <option value="mountain">Hibrida</option>
                                        <option value="electric">Electrica</option>
                                        <option value="bmx">BMX</option>
                                        <option value="triatlon">Triatlon</option>
                                    </select>
                                    <input class="col-10 offset-1" type="text" name="bike_skin" value="<?= $row['bike_skin'] ?>" placeholder="Color o Vinilado">
                                <div class="logInUser">
                                    <input class="col-6 offset-3 btn-log" type="submit" name="submit" value="Enviar">
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
