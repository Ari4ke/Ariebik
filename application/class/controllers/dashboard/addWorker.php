<?php
include("../../../database/database.php");

$sql="SELECT * FROM admin_users";

$result=mysqli_query($conn,$sql);

if(isset($_POST['submit'])){
    $role = $_POST['role_type'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO admin_users 
    values('','$role','$name', '$surname','$password', '$telephone','$email','')";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location: ../../../class/views/dashboard/showWorkerUsers.php");
    }
}
?>