<?php
include("../../../database/database.php");
session_start();

$sql="SELECT * FROM admin_users";

$result=mysqli_query($conn,$sql);

?>