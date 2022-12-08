<?php
include "../../database/database.php";
error_reporting(0);
session_start();


if(isset($_POST['submit'])){
    $name_user = $_POST['name'];
    $surname = $_POST['surname'];
    $user_email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "INSERT INTO users VALUES ('','$name_user',
            '$surname','$user_email','$password','')";
  
    $result=mysqli_query($conn,$sql);

    if($result){
      echo "<script> alert('Usuario registrado'); </script>";
    }else{
      echo "<script> alert('Contacte con un administrador'); </script>";
    }
    
    if($_SESSION["email"] = $user_email){
      header("location: ../views/panel.php");
    }
}

?>