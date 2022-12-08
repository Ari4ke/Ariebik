<?php
include "../../../database/database.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Cliente</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/estilo.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar" style="background-color:#014572;">
			<div class="container">
				<a class="" href="index.php">
					<img src="../../logo.png" width="200" height="47" style="margin-right:50px">
				</a>
				<h1 style="margin-right:30px; color:white;">Sistema de monitorización bultos Baltrans</h1>
			</div>
        </nav>
		<h2>Modificación de bulto</h2>
		<div class="row">
		<form action="" method="post">
			<div class="form-group">
				Codigo de barras: <input type="text" name="codigo_barras" value="<?php if($resultado) echo $resultado['codigo_barras']; ?>" class="input__text"><br>
				Altura: <input type="text" name="alto" value="<?php if($resultado) echo $resultado['alto']; ?>" class="input__text">
			</div>
			<div class="form-group">
				Ancho: <input type="text" name="ancho" value="<?php if($resultado) echo $resultado['ancho']; ?>" class="input__text"><br>
				Profundidad: <input type="text" name="profundidad" value="<?php if($resultado) echo $resultado['profundidad']; ?>" class="input__text">
			</div>
			<div class="form-group">
				Peso: <input type="text" name="peso" value="<?php if($resultado) echo $resultado['peso']; ?>" class="input__text">
			</div>
			<div class="btn-group" role="group" aria-label="Basic mixed styles example">
				<a href="index.php" class="btn btn-danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn-success">
			</div>
		</form>
		</div>
	</div>
</body>
</html>