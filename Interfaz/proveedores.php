<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Proveedores</title>
    <link rel="stylesheet" type="text/css" href="css/estprov.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/menup.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Proveedores</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="productos.php">Inventario</a>
          <a href="ingresos.php">Ingresos</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="adminuser.php">Administrar usuarios</a>
          <a href="">Editar perfil</a>
          <a href="cerrar.php">Cerrar sesión</a>
        </nav>
      </div>
    </header>
    <div id="menop">
      <div class="bot1"><a href="regprov.php">Registrar</a></div>
      <div class="bot2"><a href="conprov.php">Buscar</a></div>
      <div class="bot3"><a href="actprov.php">Editar</a></div>
      <div class="bot4"><a href="delprov.php">Eliminar</a></div>
        </div>
          <div id="conpad">
            <div id="contener">
            <?php
              include("conexion.php");
              $resu=mysqli_query($conexion,"SELECT * FROM proveedor");
              echo"
              <table width=\"100%\" style=\"background-color: ; border-collapse: collapse;\">
              <thead style=\"background-color:#DC7633 ; border-bottom: solid 5px #935116  ; color: white;\">
                  <tr>
                    <td style=\"padding: 20px\";>Id Proveedor</td>
                    <td style=\"padding: 20px\";>Nombre</td>
                    <td style=\"padding: 20px\";>Apellido</td>
                    <td style=\"padding: 20px\";>Teléfono</td>
                    <td style=\"padding: 20px\";>Correo electrónico</td>
                  </tr>";
              while($consulta=mysqli_fetch_array($resu))
              {
                  echo"<thead>
                  <tr>
                    <td style=\"padding: 20px\";>".$consulta['IdProve']."</td>
                    <td style=\"padding: 20px\";>".$consulta['NomProve']."</td>
                    <td style=\"padding: 20px\";>".$consulta['ApelProve']."</td>
                    <td style=\"padding: 20px\";>".$consulta['TelProve']."</td>
                    <td style=\"padding: 20px\";>".$consulta['EmailProve']."</td>
                  </tr>";
              }
              echo"</table>";
            ?>
          </div>
       </div>
  </body>
</html>
