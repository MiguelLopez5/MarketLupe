<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar Proveedores</title>
    <link rel="stylesheet" href="css/estcprv.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="proveedores.php">Sordmark</a>
      </div>
      <h3>Consultar proveedores</h3>
      <form class="form" action="" method="post">
    <input type="text" name="nomprov" value="" placeholder="Buscar por nombre">
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
        $nomp=$_POST['nomprov'];
        $exis=0;
        $r=mysqli_query($conexion,"SELECT * FROM proveedor WHERE NomProve='$nomp'");
        echo"
          <table style=\"width:100%; background-color:#F2F3F4; border-collapse:collapse;\">
          <thead style=\"background-color:#EC7063; border-bottom:solid 5px #943126; color:white;\">
            <tr>
              <td style=\"padding:20px;\">Id Proveedor</td>
              <td style=\"padding:20px;\">Nomnbre</td>
              <td style=\"padding:20px;\">Apellido</td>
              <td style=\"padding:20px;\">Teléfono</td>
              <td style=\"padding:20px;\">Correo electrónico</td>
            </tr>";
        while($con=mysqli_fetch_array($r))
        {
          echo"
          <thead>
            <tr>
            <td style=\"padding: 20px\";>".$con['IdProve']."</td>
            <td style=\"padding: 20px\";>".$con['NomProve']."</td>
            <td style=\"padding: 20px\";>".$con['ApelProve']."</td>
            <td style=\"padding: 20px\";>".$con['TelProve']."</td>
            <td style=\"padding: 20px\";>".$con['EmailProve']."</td>
            </tr>
          </table>";
          $exis++;
        }
        if($exis==0)
        {
          echo"<h2>El proveedor no esta registrado</h2>";
        }
      }
    ?>
  </div>
  </form>

        </div>

  </body>
</html>
