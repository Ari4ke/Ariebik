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

if(isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql="SELECT * from admin_users where email='$user_email' AND password='$password'";
  
    $result=mysqli_query($conn,$sql);
    
    if(empty($user_email)){
      echo "<script>alert('Usuario o contraseña vacíos');</script>";
      die(header("location: ../../../../admin.php"));
    }

    if($_SESSION["email"] = $user_email){
      header("location: ../../views/dashboard/panel.php");
    }
}

?>
