<?php
include "../../database/database.php";
error_reporting(0);
session_start();
/*Este código es importante puesto que nos servirá para extraer de sql los datos de la tabla usuarios*/

$user_email = $_SESSION["email"];

/*Consulta general para extraer cualquier tipo de datos*/

$sql="SELECT * from users where email='$user_email'";

$result=mysqli_query($conn,$sql);

while($row = $result->fetch_array()){
    $id = $row['id'];
}

/* Vamos a extraer la id del usuario para así luego de hacer el $_POST y extraer la info del formulario asignarle a la bici la id del usuario que tiene*/

if(isset($_POST['submit'])){
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $bike_type = $_POST['bike_type'];
    $bike_image = $_POST['bike_image'];
    
    $sql = "INSERT INTO user_bike VALUES ('','$brand',
            '$model','$bike_type','','$bike_image','','$id')";
    var_dump($sql);
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location: ../views/panel.php");
    }
}

?>