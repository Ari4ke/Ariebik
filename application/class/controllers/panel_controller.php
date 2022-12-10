<?php
include "../../database/database.php";
session_start();
$user_email = $_SESSION["email"];

/* Con esta consulta sacamos la info de la tabla de users*/
$sql="SELECT * from users where email='$user_email'";

$result=mysqli_query($conn,$sql);

while($row = $result->fetch_array()){
    $name = $row['name'];
    $id = $row['id'];
}


/*Aquí vamos a relaizar una consulta para extraer la información d elas bicis que tiene el usuario*/

$sql ="SELECT * from user_bike WHERE user_id= $id";

$result=mysqli_query($conn,$sql);

?>