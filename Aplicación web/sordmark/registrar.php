<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloregis.css">
	<title>Regístrate</title>
</head>
<body>
	<header>
       <div class="contenedor">
        <h1>Sordmark</h1>
      <nav class="menu">
        <a href="index.html">Volver al inicio</a>
        </nav>
        </div>
      </header>

	<div id="conpad">
	<div id="cuad">
		<form id="regis" action="" method="POST">
			Nombre<br>
			<input class="campo" type="text" name="nom" required><br>
			Apellidos<br>
			<input class="campo" type="text" name="apel" required><br>
			Edad<br>
			<input class="campo" type="text" name="ed" required><br>
			Teléfono<br>
			<input class="campo" type="text" name="telfon" required><br>
			Contraseña<br>
			<input class="campo" type="password" name="contra" required><br>
			Selecciona tu rol:<br>
			<select class="roles" name="rol" size="1" required>
				<option value="1">Administrador</option>
				<option value="2">Almacenista</option>
				<option value="3">Vendedor</option>
			</select><br>
	</div>
	<div id="opci">
		<div id="cancel">
			<a href="inicio.html">Cancelar</a>
		</div>
		<div id="resal">
			<input id="botreg" type="submit" name="regiusu" value="Registrar">
		</div>
	</div>
	<?php
			if(isset($_POST['regiusu']))
			{
				include("conexion.php");
				$nombre = $_POST['nom'];
				$apellido = $_POST['apel'];
				$edad = $_POST['ed'];
				$telefono = $_POST['telfon'];
				$contrasena = $_POST['contra'];
				$rol = $_POST['rol'];

				$resu1 = mysqli_query($conexion,"INSERT INTO empleados (NomEmpl,ApelEmpl,Edad,NumTel) VALUES ('$nombre','$apellido','$edad', '$telefono')");
				$resun=mysqli_query($conexion,"SELECT * FROM empleados WHERE NomEmpl='$nombre' AND ApelEmpl='$apellido' AND Edad='$edad' AND NumTel='$telefono'");
				while($consul=mysqli_fetch_array($resun))
				{
					$idemp=$consul['IdEmpl'];
				}
				$resu2=mysqli_query($conexion,"INSERT INTO users (IdEmpl,Passw) VALUES ('$idemp','$contrasena')");
				$fecha=date("Y-m-d");
				$resu3=mysqli_query($conexion,"INSERT INTO asignacion (IdEmpl,IdRol,FechaAsig) VALUES ('$idemp','$rol','$fecha')");

				if(($resu1)&&($resu2)&&($resu3)){
						echo "<script>alert('usuario registrado correctamente por favor inicia sesión para continuar')</script>";
						header("Refresh:0; url=inicio.html");
				}else{
					echo "<script>alert('Error al registrar')</script>";
						header("Refresh:0; url=inicio.html");
				}
			}
	?>
	</form>
	</div>
</body>
</html>
