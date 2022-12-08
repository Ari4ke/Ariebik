<?php
include "../controllers/panel_controller.php";

echo $_SESSION["email"];
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
    <link rel="stylesheet" href="../../../public_html/css/index.scss">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!--sweetalert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
        <div class="navbarContent row">
        <nav class="navbar navbar-expand-lg bg-light col-lg-8 offset-lg-2">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <div class="d-flex">
                        <a href="login.php">Cerrar sesión</a>
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
        <h1>Hola <?= $name?> !!</h1>
        <a href="addBikeUser.php">Añadir bicis</a>
        <div class="userBikes">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                <h1>Mis bicis</h1>
                <div>
                    <?php 
                    while($row = $result->fetch_array()){
                    ?>
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td><?= $row['brand_bike']?></td>
                                    <td><?= $row['model_bike']?></td>
                                    <td><?= $row['bike_type']?></td>
                                    <td><?= $row['bike_image']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="update.php?id=<?php echo $row['id']; ?>"  class="btn btn-success" >Editar</a>
                                            <a href="../controllers/panel_crud/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
