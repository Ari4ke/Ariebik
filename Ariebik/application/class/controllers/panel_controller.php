<?php
include "../../database/database.php";
session_start();
$user_email = $_SESSION["email"];

$sql="SELECT name from users where email='$user_email'";

$result=mysqli_query($conn,$sql);

var_dump($sql['name']);



?>