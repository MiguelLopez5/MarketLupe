<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Provedores</title>
    <link rel="stylesheet" href="css/estmpr.css">
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
      <h3>Modificar provedores</h3>
      <form action=""  method="POST">
        <p>
          <label requerid for="">Nombre Proveedor</label>
          <input class="cont" type="text" name="idprov" required>
        </p>
        <p>
          <label requerid for="">Nombre Proveedor</label>
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
          <input class="cont" type="text" name="emap">
        </p>
        <p>
          <label for=""></label>
        </p>
        <p>
          <input class="a" type="submit" name="actu" value="Actualizar">
        </p>
      </form>
    </div>
    <?php
      include("conexion.php");
      if(isset($_POST['actu']))
      {
        $idpr=$_POST['idprov'];
        $nomp=$_POST['nomp'];
        $apep=$_POST['apep'];
        $telp=$_POST['telp'];
        $emap=$_POST['emap'];
        $exis=0;
          $res=mysqli_query($conexion,"SELECT * FROM proveedor WHERE IdProve='$idpr'");
          while($consul=mysqli_fetch_array($res))
          {
            $exis++;
          }
          if($exis==0)
          {
            echo"<h2>El proveedor no existe</h2>";
          }
          else
          {
            mysqli_query($conexion,"UPDATE proveedor SET
              IdProve='$idpr',
              NomProve='$nomp',
              ApelProve='$apep',
              TelProve='$telp',
              EmailProve='$emap'
              WHERE IdProve='$idpr'");
            echo'<script>
            alert("Proveedor modificado correctamente");
            </script>';
            header("Refresh:0; url=proveedores.php");
          }

        }
      ?>
    </div>
  </div>
</div>

  </body>
</html>
