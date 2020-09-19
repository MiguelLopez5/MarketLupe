<!DOCTYPE html>
<html>
<head>
  <title>idea</title>
</head>
<body>
<div id="conpad">
      <hr>
      <h3>Eliminar directamente</h3>
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
            <td style=\"padding: 20px\";> </td>
          </tr>";
          while($consulta=mysqli_fetch_array($resu))
          {
            $idcon=$consulta['IdProd'];
            $nomcon=$consulta['NomProd'];
            echo"<thead>
            <tr>
            <td style=\"padding: 20px\";>".$consulta['IdProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['NomProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['TipoProd']."</td>
            <td style=\"padding: 20px\";>".$consulta['PrecEnt']."</td>
            <td style=\"padding: 20px\";>".$consulta['PrecSal']."</td>
            <td style=\"padding: 20px\";>".$consulta['Cant']."</td>
            <td style=\"padding: 20px\";><form action=\"\" method=\"POST\">
            <input type=\"submit\" id=\"bot-menu\" name=\"supri\">
            <label for=\"bot-menu\"><img class=\"equis\" src=\"ima/suprim.jpg\"></label></form>";
            if(isset($_POST['supri']))
            {
              mysqli_query($conexion,"DELETE FROM productos WHERE IdProd='$idcon' AND NomProd='$nomcon'");
              header("location: delpro.php");
            }
          }
          echo"</td>
          </tr></table>";
        ?>
      </div>
    </div>

</body>
</html>