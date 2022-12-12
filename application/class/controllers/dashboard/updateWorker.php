<?php
include("../../../database/database.php");
session_start();

$sql="SELECT * FROM admin_users";

$result=mysqli_query($conn,$sql);

if(isset($_POST['submit'])){
    $role = $_POST['role_type'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE admin_users SET 
    role = '$role', 
    name = '$name', 
    surname = '$surname',
    pasword = '$password', 
    telephone= '$telephone',
    email = '$email'  
    WHERE id = $id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location: ../../../class/views/dashboard/showWorkerUsers.php");
    }
}
?>