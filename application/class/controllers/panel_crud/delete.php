<?php 
include "../../../database/database.php";

	if(isset($_GET['id'])){
		$id=$_GET['id'];

        $sql ="DELETE FROM user_bike WHERE id= $id";

        $result=mysqli_query($conn,$sql);
		header('Location: ../../views/panel.php');
	}else{
		header('Location: ../../views/panel.php');
	}

    var_dump("dfhiopgs");
 ?>