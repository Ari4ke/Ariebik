<?php
include("../../../database/database.php");

/*mega consulta para sacar la información más relevante de las bicicletas!!!*/
$sql="SELECT bike_incidence.id, 
users.name, 
bike_incidence.id_bici,
user_bike.brand_bike, 
bike_incidence.id_responsible,
bike_incidence.status 
FROM bike_incidence 
JOIN user_bike ON bike_incidence.id_user = user_bike.user_id
JOIN users ON user_bike.user_id = users.id GROUP BY bike_incidence.id ";

$result=mysqli_query($conn,$sql);

?>