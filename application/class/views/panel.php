<?php
include "../controllers/panel_controller.php";

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
    <link rel="stylesheet" href="../../../public_html/css/panel.scss">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
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
                        <a href="login.php">Cerrar sesión</a>
                    </div>
                    <div>
                        <a href="addBikeUser.php"  class="btn btn-info" >Añadir bicicletas</a>
                    </div>
            </div>
            </div>
        </nav>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8 col-xl-6 offset-sm-2 offset-xl-3">
                <div class="bodyContents">
                    <div class="container-fluid">
                        <div class="headerContents">
                        <h1 class="text-center">¡Hola <?= $name?> este es tu usuario!</h1>
                        <hr>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Tipo</th>
                                    <th>Color o vinilado</th>
                                </tr>
                            </thead>
                            <tbody>       
                                <?php 
                                while($row = $result->fetch_array()){
                                ?>
                                <tr class="">
                                    <td><?= $row['brand_bike']?></td>
                                    <td><?= $row['model_bike']?></td>
                                    <td><?= $row['bike_type']?></td>
                                    <td><?= $row['bike_skin']?></td>
                                </tr>
                                <tr>
                                    <td class="text-center"colspan="4">
                                        <div class="btn-group">
                                            <a href="../views/updateBike.php?id=<?php echo $row['id']; ?>"  class="btn btn-success" >Editar</a>
                                            <a href="../controllers/panel_crud/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                                            <a href="../views/workshopForm.php?id=<?php echo $row['id']; ?>" class="btn btn-info workshop">Entrada a taller</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
