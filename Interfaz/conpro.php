<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar Productos</title>
    <link rel="stylesheet" href="css/form3.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="productos.php">Sordmark</a>
      </div>
      <h3>Busqueda de producto</h3>
      <form class="form" action="" method="post">
    <input type="text" name="nomb" value="" placeholder="Buscar por nombre">
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
        $nom=$_POST['nomb'];
        $exis=0;
        $r=mysqli_query($conexion,"SELECT * FROM productos WHERE NomProd='$nom'");
        echo"
          <table style=\"width:100%; background-color:#F2F3F4; border-collapse:collapse;\">
          <thead style=\"background-color:#EC7063; border-bottom:solid 5px #943126; color:white;\">
            <tr>
              <td style=\"padding:20px;\">Id Producto</td>
              <td style=\"padding:20px;\">Nomnbre</td>
              <td style=\"padding:20px;\">Tipo</td>
              <td style=\"padding:20px;\">Precio de entrada</td>
              <td style=\"padding:20px;\">Precio de salida</td>
              <td style=\"padding:20px;\">Cantidad</td>
            </tr>";
        while($con=mysqli_fetch_array($r))
        {
          echo"
          <thead>
            <tr>
              <td style=\"padding:20px;\">".$con['IdProd']."</td>
              <td style=\"padding:20px;\">".$con['NomProd']."</td>
              <td style=\"padding:20px;\">".$con['TipoProd']."</td>
              <td style=\"padding:20px;\">".$con['PrecEnt']."</td>
              <td style=\"padding:20px;\">".$con['PrecSal']."</td>
              <td style=\"padding:20px;\">".$con['Cant']."</td>
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

        </div>

  </body>
</html>
