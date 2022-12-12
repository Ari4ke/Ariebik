<?php
include("../../../database/database.php");
session_start();

if(isset($_POST['submit'])){
    $status = $_POST['status_type'];
    $id_incidence = $_POST['id'];
    
    $sql = "UPDATE bike_incidence SET 
    status = '$status'
    WHERE id = $id_incidence";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("location: ../../../class/views/dashboard/showInfo.php");
    }
}
?>