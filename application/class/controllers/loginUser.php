<?php
include "../../database/database.php";
error_reporting(0);
session_start();

if(isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql="SELECT count(*) as contar from users where email='$user_email' AND password='$password'";
  
    $result=mysqli_query($conn,$sql);

    $array = mysqli_fetch_array($result);
    
    if($_SESSION["email"] = $user_email && $_SESSION["password"] = $password){
      $_SESSION["email"] = $user_email;
      $_SESSION["password"] = $password;
      if($array['contar'] > 0){
        header("location: ../views/panel.php");
      }else{
        echo "
      <script>
      alert('Usuario o contraseña incorrectos');
      window.location.replace('../views/login.php');
      </script>";
      }
    }else{
      echo "
      <script>
      alert('Usuario o contraseña vacíos');
      window.location.replace('../views/login.php');
      </script>";
    }
}

?>
