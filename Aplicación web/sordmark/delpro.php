<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Productos</title>
    <link rel="stylesheet" type="text/css" href="css/estiloDP.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="productos.php">Sordmark</a>
      </div>
      <h2>Eliminar producto</h2>
      <form class="form" action="" method="POST">
        <h3>Eliminar por identificación</h3>
        <input type="text" name="idpro" value="" placeholder="Id producto" required>&nbsp;
        <input type="text" name="nomb" value="" placeholder="Nombre" required>
        <input class="be" type="submit" name="elim" value="Eliminar">
      </form>
    <?php
      if(isset($_POST['elim']))
      {
        include("conexion.php");
        $idp=$_POST['idpro'];
        $nom=$_POST['nomb'];
        $exis=0;
        $resu=mysqli_query($conexion,"SELECT * FROM productos WHERE IdProd='$idp' AND NomProd='$nom'");
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
          mysqli_query($conexion," DELETE FROM productos WHERE IdProd='$idp' AND NomProd='$nom'");
          header("location: productos.php");
        }
      }
    ?>
    <!--poner idea aqui-->
  </div>
</body>
</html>
