<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscar Ventas</title>
    <link rel="stylesheet" href="css/estiloCV.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">
        <a class="g" href="Ventas.php">Sordmark</a>
      </div>
      <h3>Busqueda de ventas</h3>
      <form class="form" action="" method="post">
    <input type="date" name="fecven" value="" placeholder="Buscar por fecha">
    <input class="be" type="submit" name="consu" value="Buscar">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
      if(isset($_POST['consu']))
      {
        include("conexion.php");
        $fv=$_POST['fecven'];
        $exis=0;
        $r=mysqli_query($conexion,"SELECT * FROM ventas WHERE FechaVen='$fv'");
        echo"
          <table style=\"width:100%; background-color:#F2F3F4; border-collapse:collapse;\">
          <thead style=\"background-color:#EC7063; border-bottom:solid 5px #943126; color:white;\">
            <tr>
            <td style=\"padding: 20px\";>Id Venta</td>
            <td style=\"padding: 20px\";>Id Empleado</td>
            <td style=\"padding: 20px\";>Fecha de venta</td>
            <td style=\"padding: 20px\";>Precio total</td>
            <td style=\"padding: 20px\";>Id cliente</td>
            </tr>";
        while($con=mysqli_fetch_array($r))
        {
          echo"
          <thead>
            <tr>
            <td style=\"padding: 20px\";>".$con['IdVenta']."</td>
            <td style=\"padding: 20px\";>".$con['IdEmpl']."</td>
            <td style=\"padding: 20px\";>".$con['FechaVen']."</td>
            <td style=\"padding: 20px\";>".$con['PrecTotal']."</td>
            <td style=\"padding: 20px\";>".$con['IdCli']."</td>
            </tr>
          </table>";
          $exis++;
        }
        if($exis==0)
        {
          echo"<h2>El producto no esta registrado</h2>";
        }
      }
    ?>
  </div>
  </form>
  </body>
</html>
