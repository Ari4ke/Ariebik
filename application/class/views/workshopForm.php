<?php
include("../controllers/workshopSys.php");

/*Este código lo que hace es realizar una consulta cogieno la id del get y luego se la mete a un input en este caso id para cuando enviemos los datos*/
$id = $_GET['id'];

$sql="SELECT id, user_id FROM user_bike WHERE id= $id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
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
                        <a href="login.php">Quienes somos</a>
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
    <div class="row">
        <div class="col-12 col-sm-6 offset-sm-3">
            <div class="userWorkFormContainer">
                <form action="../controllers/workshopSys.php" method="POST">
                    <div class="inputContents row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="loginTitle">
                                <h1 class="text-center">Formulario de taller</h1>
                            </div>
                            <div class="userInfo row">
                                    <input type="hidden" name="bike_id" value="<?= $row['id'] ?>"></input>
                                    <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>"></input>
                                    <h2>Que se le va a hacer</h2>
                                    <div class="form-check"> 
                                        <input class="form-check-input" type="checkbox" name="check_list[]" value="mano de obra" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mano de obra
                                        </label><br>
                                        <input class="form-check-input" type="checkbox" name="check_list[]" value="montaje rueda" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Montaje rueda
                                        </label><br>
                                        <input class="form-check-input" type="checkbox" name="check_list[]" value="montaje piñon casette" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Montaje de piñon y casette
                                        </label><br>
                                        <input class="form-check-input" type="checkbox" name="check_list[]" value="montaje bielas ajuste y engrase" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Montaje bielas ajuste y engrase
                                        </label><br>
                                        <input class="form-check-input" type="checkbox" name="check_list[]" value="limpieza y engrase basico" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Limpieza y engrase básico
                                        </label>
                                    </div>
                                    <h2>Comentarios</h2>
                                    <textarea name="comments" cols="30" rows="10"></textarea>
                                <div class="offset-lg-6">
                                    <input class="col-6 offset-lg-3" type="submit" class="btn btn-primary" name="submit" value="Enviar">
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