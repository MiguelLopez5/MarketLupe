<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ingresos</title>
    <link rel="stylesheet" type="text/css" href="css/estilosinve3.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/menu2.css">
  </head>

    <body>
      <header>

      <div class="contenedor">
        <h1>Ingresos</h1>
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
      <div class="bot1"><a href="regven.php">Registrar</a></div>
      <div class="bot2"><a href="conven.php">Buscar</a></div>
      <div class="bot4"><a href="delven.php">Eliminar</a></div>
        </div>
          <div id="conpad">
            <div id="contener">
              <?php
                include("conexion.php");
                $resu=mysqli_query($conexion,"SELECT * FROM ventas");
                echo"
                <table width=\"100%\" style=\"background-color: #F2F3F4; border-collapse: collapse;\">
                <thead style=\"background-color: #5DADE2; border-bottom: solid 5px #21618C; color: white;\">
                    <tr>
                      <td style=\"padding: 20px\";>Id Venta</td>
                      <td style=\"padding: 20px\";>Id Empleado</td>
                      <td style=\"padding: 20px\";>Fecha de venta</td>
                      <td style=\"padding: 20px\";>Precio total</td>
                      <td style=\"padding: 20px\";>Id cliente</td>
                    </tr>";
                while($consulta=mysqli_fetch_array($resu))
                {
                    echo"<thead>
                    <tr>
                      <td style=\"padding: 20px\";>".$consulta['IdVenta']."</td>
                      <td style=\"padding: 20px\";>".$consulta['IdEmpl']."</td>
                      <td style=\"padding: 20px\";>".$consulta['FechaVen']."</td>
                      <td style=\"padding: 20px\";>".$consulta['PrecTotal']."</td>
                      <td style=\"padding: 20px\";>".$consulta['IdCli']."</td>
                    </tr>";
                }
                echo"</table>";
              ?>
          </div>
        </div>
  </body>
</html>
