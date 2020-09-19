<?php
	function verificar_sesion()
	{
		if(!isset($_SESSION['usuario'])){
			unset($_SESSION);
			echo '<script>alert("Por favor inicia sesion para continuar");<script>';
			header("Refresh:0; url=inicio.html");
		}
	}

	function acceso_info()
	{
		include("conexion.php");
		$iden=$_SESSION['usuario'];
		$r=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
		while ($crol=mysqli_fetch_array($r)){
			$vrol=$crol['IdRol'];
		}
		if ($vrol==1){
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<h1>Administrador</h1>
		        <input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"Ventas.php\">Ventas</a>
		          <a href=\"proveedores.php\">Proveedores</a>
		          <a href=\"adminuser.php\">Administrar usuarios</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
		else if($vrol==2){
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<h1>Almacenista</h1>
		        <input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"proveedores.php\">Proveedores</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
		elseif ($vrol==3) {
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<h1>Vendedor</h1>
		        <input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"Ventas.php\">Ventas</a>
		          <a href=\"detfac.php\">Detalle Factura</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
	}

	function acceso_ext_pag()
	{
		include("conexion.php");
		$iden=$_SESSION['usuario'];
		$r=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
		while ($crol=mysqli_fetch_array($r)){
			$vrol=$crol['IdRol'];
		}
		if ($vrol==1){
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"admin.php\">Inicio</a>
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"Ventas.php\">Ventas</a>
		          <a href=\"proveedores.php\">Proveedores</a>
		          <a href=\"adminuser.php\">Administrar usuarios</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
		else if($vrol==2){
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"almace.php\">Inicio</a>
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"proveedores.php\">Proveedores</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
		elseif ($vrol==3) {
			$res=mysqli_query($conexion,"SELECT e.*, a.*, r.* FROM empleados AS e INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl INNER JOIN roles AS r ON a.IdRol=r.IdRol WHERE e.IdEmpl='$iden'");
			while ($con=mysqli_fetch_array($res)){
			echo "<input type=\"checkbox\" id=\"menu-bar\">
		        <label class=\"icon-menu\" for=\"menu-bar\"></label>
		        <nav class=\"menu\">
		          <a href=\"vende.php\">Inicio</a>
		          <a href=\"productos.php\">Inventario</a>
		          <a href=\"Ventas.php\">Ventas</a>
		          <a href=\"detfac.php\">Detalle Factura</a>
		        </nav>
				<input type=\"checkbox\" id=\"usu-menu\">
				<label id=\"conimg\" for=\"usu-menu\"><img src=\"uno.png\"></label>
				<div id=\"conten\">
					<div id=\"info\">
						<img src=\"uno.png\">
		                <nav>
		                    <h2>".$con['NomEmpl']." ".$con['ApelEmpl']."</h2>
		                    <h3>".$con['NomRol']."</h3>
		                </nav>
					</div>
						<ul>
		            		<a href=\"editPe.php\" class=\"one\">Editar perfil</a>
		            		<a href=\"cerrar.php\" class=\"two\">Cerrar sesión</a>
						</ul>
				</div>";
			}
		}
	}
?>