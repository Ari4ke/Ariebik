<?php
include_once("../../controllers/dashboard/showiIncidenceBike.php");
session_start();
$user_email = $_SESSION["email"];

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $status = $_POST['status_type'];
    $id_incidence = $_POST['id'];
    
    $sql = "UPDATE bike_incidence SET 
    status = '$status'
    WHERE id = $id_incidence";
    var_dump($sql);
    $result=mysqli_query($conn,$sql);
    
}

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
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="../../../../public_html/css/dashboard/dashboard.scss">
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
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                    <div class="container">
                        <div class="header"><span>Información Usuario</span>
                        </div>
                        <div class="content">
                            <ul>
                            <h3>Nombre Cliente: <?= $row['name']?></h3>
                            <h3>Apellidos: <?= $row['surname']?></h3>
                            <h3>Número de teléfono: </h3>
                            <h3>Email: <?= $row['email']?></h3>
                            </ul>
                        </div>
                    </div>
                </div>
 
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                    <div class="container">
                        <div class="header"><span>Información Bicicleta</span>
                        </div>
                        <div class="content">
                            <ul>
                            <h3>Marca bicicleta: <?= $row['brand_bike']?></h3>
                            <h3>Modelo: <?= $row['model_bike']?></h3>
                            <h3>Tipo de bicicleta: <?= $row['bike_type']?></h3>
                            <h3>Color: <?= $row['bike_skin']?></h3>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col">
                    <div class="container">
                        <div class="header"><span>Información Incidencia</span>

                        </div>
                        <div class="content">
                            <ul>
                            <h3>¿Que le hará?: <?= $row['what_to_do']?></h3>
                            <h3>Comentarios del cliente: <?= $row['comments']?></h3>
                            <h3>Estado de la incidencia: <?= $row['status']?></h3>
                            <h3>Encargado: <?= $row['responsable_name']?></h3>
                            </ul>
                            <form action="showInfo.php?id=<?= $row['id'] ?>" method="POST">
                            <div>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>"></input>
                            <select class="col-lg-3" style="margin-left:30px;" name="status_type">
                                <option value="Asignada">Asignada</option>
                                <option value="Reparada">Reparada</option>
                                <option value="En progreso">En progreso</option>
                                <option value="Finalizado">Finalizado</option>
                                <option value="Anulado">Anulado</option>
                                <option value="En espera">En espera</option>
                                <option value="Entregado">Entregado</option>
                                <option value="Incidencia en estudio">Incidencia en estudio</option>
                            </select>
                            <input type="submit" value="Actualizar" name="submit">
                            </div>
                            </form>
                        </div>
                    </div>
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

$(".header").click(function () {
$header = $(this);
$content = $header.next();
$content.slideToggle(500, function () {
});

});
</script>