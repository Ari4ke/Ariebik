<?php
include "../../database/database.php";
error_reporting(0);
session_start();

if(isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql="SELECT * from users where email='$user_email' AND password='$password'";
  
    $result=mysqli_query($conn,$sql);

    if(empty($user_email)){
      echo "
      <script>
      alert('Usuario o contraseña vacíos');
      window.location.replace('../views/login.php');
      </script>";
    }

    if($_SESSION["email"] = $user_email){
      header("location: ../views/panel.php");
    }
}

?>
