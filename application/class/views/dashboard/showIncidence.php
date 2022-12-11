<?php
include("../../controllers/dashboard/incidences.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ariebik Dashboard</title>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
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
                    <h1 class="mt-4">Incidencias de bicicletas</h1>
                    <div class="table-responsive">
                        <table id="incidenceTable" class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Id incidencia</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Id Bicicleta</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Responsable Reparación</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = $result->fetch_array()){
                                ?>
                                <tr class="">
                                    <td>
                                        <a href="showInfo.php?id=<?= $row['id']?>" class="bi bi-search">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </a>
                                    </td>
                                    
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['id_bici'] ?></td>
                                    <td><?= $row['brand_bike'] ?></td>
                                    <td><?= $row['responsable_name'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    
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
<script>
    $(document).ready( function () {
    $('#incidenceTable').DataTable();
} );
</script>