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
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--styles-->
    <link rel="stylesheet" href="../../../public_html/css/workshop.scss">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

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
                    <a href="login.php" class="btn btn-danger">Cerrar sesión</a>
                </div>
                <div>
                  <a href="panel.php"  class="btn btn-info" >Acceder al panel</a>
              </div>
        </div>
        </div>
    </nav>
    </div>

    <div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-10 col-xl-8 offset-sm-1 offset-xl-2">
            <div class="userWorkFormContainer">
                <form action="../controllers/workshopSys.php" method="POST">
                    <div class="inputContents row">
                        <div class="col-10 offset-1 col-xl-8 offset-xl-2">
                            <div class="loginTitle">
                                <h1 class="text-center">Formulario de taller</h1>
                            </div>
                            <hr>
                            <div class="userInfo">
                                    <input type="hidden" name="bike_id" value="<?= $row['id'] ?>"></input>
                                    <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>"></input>
                                    <h2>Que se le va a hacer</h2>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="mano de obra" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Mano de obra
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="montaje rueda" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Montaje rueda
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Montaje piñon cassette" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Montaje piñon cassette
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Montaje bielas y engrase" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Montaje bielas y engrase
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Limpieza y engrase básico" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Limpieza y engrase básico
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Líquido tubeless rueda" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Líquido tubeless rueda
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Engrase ajuste dirección" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Engrase ajuste dirección
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Montaje bici completa" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Montaje bici completa
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Sustitución horquilla" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Sustitución horquilla
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6"> 
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Montaje cubierta + tubeless" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Montaje cubierta + tubeless
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Engrase básico" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Engrase básico
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Cambio fundas-cables frenos" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cambio fundas-cables frenos
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Cambio cámara" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cambio cámara
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Cambio núcleo" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cambio núcleo
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Cambio fundas-cables transmisión" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Cambio fundas-cables
                                                </label>
                                            </div>
                                            <div>
                                                <input class="form-check-input" type="checkbox" class="inputContents" name="check_list[]" value="Limpieza y engrase premium" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Limpieza y engrase premium
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <hr>
                                        <h2>Comentarios</h2>
                                        <div class="form-group">
                                            <textarea  name="comments" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                        </div>
                                        <div class="logInUser">
                                            <input class="col-3 offset-4 btn-log" type="submit" name="submit" value="Enviar">
                                        </div>
                                    
                            </div>                        
                        </div>               
                    </div>
                </form>
            </div> 
        </div>
    </div>

</body>
</html>