<?php 
include "../../../database/database.php";
echo "<script>confirm('¿Estás seguro que quieres elminar este usuario?');<script>";
	if(isset($_GET['id'])){
		$id=$_GET['id'];

        $sql ="DELETE FROM admin_users WHERE id= $id";

        $result=mysqli_query($conn,$sql);
		header('Location: ../../../class/views/dashboard/showWorkerUsers.php');
	}else{
		header('Location: ../../views/panel.php');
	}

 ?>