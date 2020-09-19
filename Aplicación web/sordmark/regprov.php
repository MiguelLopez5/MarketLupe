<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Provedores</title>
    <link rel="stylesheet" type="text/css" href="css/estiloRPV.css">
  </head>
  <body>
    <div class="contain">

  <div class="wrapper">
    <div class="contacts">
      <a href="proveedores.php">Sordmark</a>

      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class="form">
      <h3>Registro de provedores</h3>
      <form action=""  method="POST">
        <p>
          <label requerid for="" >Nombre Proveedor</label>
          <input class="cont" type="text" name="nomp" required>
        </p>
        <p>
          <label for="">Apellido Proveedor</label>
          <input class="cont" type="text" name="apep" required>
        </p>
        <p>
          <label for="">Telefono Provedor</label>
          <input class="cont" type="text" name="telp" required>
        </p>
        <p>
          <label for="">Email Provedor</label>
          <input class="cont" type="text" name="emap" placeholder="Si no tiene escriba desconocido">
        </p>
        <p>
          <label for=""></label>
        </p>
        <p>
          <input class="a" type="submit" name="regis" value="Registrar">
        </p>
      </form>
    </div>
    <?php
      include("conexion.php");
      if(isset($_POST['regis']))
      {
        $nomp=$_POST['nomp'];
        $apep=$_POST['apep'];
        $telp=$_POST['telp'];
        $emap=$_POST['emap'];
        $exis=0;

        $resu=mysqli_query($conexion,"SELECT * FROM proveedor WHERE NomProve='$nomp' AND ApelProve='$apep' AND TelProve='$telp' AND EmailProve='$emap'");
        while($consulta=mysqli_fetch_array($resu))
        {
          $exis=$exis+1;
        }
        if($exis>0)
        {
          echo"<h3>El producto ya está registrado</h3>";
        }
        else
        {
          $datos=mysqli_query($conexion,"INSERT INTO proveedor (NomProve,ApelProve,TelProve,EmailProve) VALUES('$nomp','$apep','$telp','$emap')");
          if($datos)
          {
            header('Location: proveedores.php');
          }
          else
          {
            echo "<h2>Error</h2>";
          }
        }
      }
    ?>
  </div>
</div>
  </body>
</html>
