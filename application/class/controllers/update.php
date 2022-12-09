<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ariebik";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

error_reporting(0);
session_start();

/* Vamos a extraer la id del usuario para así luego de hacer el $_POST y extraer la info del formulario asignarle a la bici la id del usuario que tiene*/


if(isset($_POST['submit'])){
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $bike_type = $_POST['bike_type'];
    $bike_image = $_POST['bike_image'];
    $skin = $_POST['bike_skin'];
    $id = $_POST['id'];
    
    $sql = "UPDATE user_bike SET 
    brand_bike = '$brand', 
    model_bike= '$model', 
    bike_type= '$bike_type',
    bike_skin= '$skin', 
    bike_image= '$bike_image'  
    WHERE id = $id";

    $result=mysqli_query($conn,$sql);

    if($result){
        header("location: ../../class/views/panel.php");
    }
}

?>