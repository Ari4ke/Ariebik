<?php
include("../../controllers/dashboard/updateWorker.php");

/*Este código lo que hace es realizar una consulta cogieno la id del get y luego se la mete a un input en este caso id para cuando enviemos los datos*/
$id = $_GET['id'];

$sql="SELECT * FROM admin_users WHERE id = $id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ariebik Dashboard</title>
        
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            label{
                margin-top: 10px !important;
                font-size: 20px;
            }

            .btn-success{
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
    <div class="d-flex" id="wrapper">
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Ariebik Dash</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="showIncidence.php">Incidencias</a>
                    <a class="nav-link dropdown-toggle list-group-item list-group-item-action list-group-item-light p-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#!">Usuarios</a>
                        </div>
                    </a>
                    <a class="nav-link dropdown-toggle list-group-item list-group-item-action list-group-item-light p-3" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administración</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="showWorkerUsers.php">Usuarios</a>
                            <a class="dropdown-item" href="addWorkerView.php">Añadir nuevo usuario</a>
                        </div>
                    </a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-light navbar-toggler-icon" id="sidebarToggle"></button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="../../../../admin.php">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h1 class="mt-4">Editar Usuario</h1>
                    <div class="row">
                    <div class="col-12 col-sm-6 offset-sm-3">
                        <div class="loginUserContent">
                            <form action="../../controllers/dashboard/updateWorker.php" method="POST">
                                <div class="inputContents row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="loginTitle">
                                        </div>
                                        <div class="userInfo row">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>"></input>
                                                <label for="role">Rol</label>
                                                <select class="col-10" name="role_type">
                                                    <option value="admin">Administrador</option>
                                                    <option value="worker">Trabajador</option>
                                                </select>
                                                <label for="name">Nombre:</label>
                                                <input class="col-10" id="name" type="text" name="name" value="<?= $row['name'] ?>">
                                                <label for="name">Apellidos</label>
                                                <input class="col-10" type="text" name="surname" value="<?= $row['surname'] ?>">
                                                <label for="name">Contraseña</label>
                                                <input class="col-10" type="text" name="password" value="<?= $row['pasword'] ?>">
                                                <label for="name">Teléfono</label>
                                                <input class="col-10" type="text" name="telephone" value="<?= $row['telephone'] ?>">
                                                <label for="name">Email</label>
                                                <input class="col-10" type="text" name="email" value="<?= $row['email'] ?>">
                                                <input class="col-4 offset-3 btn btn-success" type="submit" name="submit" value="Enviar">
                                        </div>                        
                                    </div>               
                                </div>
                        </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
