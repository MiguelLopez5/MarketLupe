<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Eliminar proveedores</title>
    <link rel="stylesheet" type="text/css" href="css/estiloDPR.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="proveedores.php">Sordmark</a>
      </div>
      <h2>Eliminar proveedor</h2>
      <form class="form" action="" method="POST">
        <h3>Eliminar por identificación</h3>
        <input type="text" name="idprove" value="" placeholder="Id proveedor" required>&nbsp;
        <input type="text" name="nombprov" value="" placeholder="Nombre" required>
        <input class="be" type="submit" name="elim" value="Eliminar">
      </form>
    <?php
      if(isset($_POST['elim']))
      {
        include("conexion.php");
        $idprv=$_POST['idprove'];
        $nomprv=$_POST['nombprov'];
        $exis=0;
        $resu=mysqli_query($conexion,"SELECT * FROM proveedor WHERE IdProve='$idprv' AND NomProve='$nomprv'");
        while($consu=mysqli_fetch_array($resu))
        {
          $exis++;
        }
        if($exis==0)
        {
          echo'<script>
          alert("El producto no está registrado");
          </script>';
        }
        else
        {
          mysqli_query($conexion," DELETE FROM proveedor WHERE IdProve='$idprv' AND NomProve='$nomprv'");
          header("location: productos.php");
        }
      }
    ?>
    <!--poner idea aqui-->
  </div>
</body>
</html>
