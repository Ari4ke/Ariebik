<?php
include("../../controllers/dashboard/showWorkersCode.php");
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
                            <a class="dropdown-item" href="showAllUsers.php">Usuarios</a>
                            <a class="dropdown-item" href="#!">Añadir nuevo usuario</a>
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
                    <h1 class="mt-4">Usuarios</h1>
                    <div class="table-responsive">
                        <table id="incidenceTable" class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Id Usario</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = $result->fetch_array()){
                                ?>
                                <tr class=""> 
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['role'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['surname'] ?></td>
                                    <td><?= $row['telephone'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="../../views/dashboard/updateWorkerView.php?id=<?php echo $row['id']; ?>"  class="btn btn-success" >Editar</a>
                                            <a href="../controllers/panel_crud/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
