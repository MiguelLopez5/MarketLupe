<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Inventario</title>
    <link rel="stylesheet" type="text/css" href="css/estiloPro.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Inventario</h1>
        <?php
          include_once('funciones.php');
          acceso_ext_pag()
        ?>
      </div>
    </header>
    <div id="menop">
      <div class="bot1"><a href="regpro.php">Crear</a></div>
      <div class="bot2"><a href="actpro.php">Editar</a></div>
      <div class="bot3"><a href="conpro.php">Buscar</a></div>
      <div class="bot4"><a href="delpro.php">Eliminar</a></div>
    </div>
    <div id="conpad">
      <div id="contener">
       <?php
          include("conexion.php");
          $resu=mysqli_query($conexion,"SELECT * FROM productos");
          echo"
          <table width=\"100%\" style=\"background-color: #F2F3F4; border-collapse: collapse;\">
          <thead style=\"background-color: #EC7063; border-bottom: solid 5px #943126; color: white;\">
          <tr>
            <td style=\"padding: 20px\";>Id Producto</td>
            <td style=\"padding: 20px\";>Nombre</td>
            <td style=\"padding: 20px\";>Tipo</td>
            <td style=\"padding: 20px\";>Precio de entrada</td>
            <td style=\"padding: 20px\";>Precio de salida</td>
            <td style=\"padding: 20px\";>Cantidad</td>
          </tr>";
          while($consulta=mysqli_fetch_array($resu))
          {
            echo"<thead>
            <tr>
            <td style=\"padding: 20px\";>".$consulta['IdProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['NomProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['TipoProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['PrecEnt']."</td>
            <td style=\"padding: 20px\";>".$consulta['PrecSal']."</td>
            <td style=\"padding: 20px\";>".$consulta['Cant']."</td>
            </tr>";
          }
          echo"</table>";
        ?>
      </div>
    </div>
</body>
</html>
