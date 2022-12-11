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
    $password = $_POST['password'];
    
    $sql="SELECT count(*) as contar from admin_users where email='$user_email' AND pasword='$password'";
  
    $result=mysqli_query($conn,$sql);
    
    $array = mysqli_fetch_array($result);

    if($_SESSION["email"] = $user_email && $_SESSION["pasword"] = $password){
      $_SESSION["email"] = $user_email;
      $_SESSION["pasword"] = $password;
      if($array['contar'] > 0){
        header("location: ../../views/dashboard/panel.php");
      }else{
        echo "
      <script>
      alert('Usuario o contraseña incorrectos');
      window.location.replace('../../../../admin.php');
      </script>";
      }
    }else{
      echo "
      <script>
      alert('Usuario o contraseña vacíos');
      window.location.replace('../../../../admin.php');
      </script>";
    }
}

?>
