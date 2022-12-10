<?php
include("../../../database/database.php");

$id = $_GET['id'];
$sql="SELECT * 
FROM bike_incidence 
JOIN user_bike ON bike_incidence.id_user = user_bike.user_id
JOIN users ON user_bike.user_id = users.id WHERE bike_incidence.id = $id GROUP BY bike_incidence.id ";

$result=mysqli_query($conn,$sql);

$row = $result->fetch_array();
?>