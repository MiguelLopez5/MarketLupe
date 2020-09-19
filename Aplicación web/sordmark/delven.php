<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Ingresos</title>
    <link rel="stylesheet" type="text/css" href="css/estiloDV.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="Ventas.php">Sordmark</a>
      </div>
      <h2>Eliminar ingreso</h2>
      <form class="form" action="" method="POST">
        <h3>Eliminar por identificación</h3>
        <input type="text" name="idven" value="" placeholder="Id Venta" required>&nbsp;
        <input type="text" name="nombem" value="" placeholder="Id Empleado" required>
        <input type="text" name="fecven" value="" placeholder="Fecha venta" required>
        <input class="be" type="submit" name="elim" value="Eliminar">
      </form>
    <?php
      if(isset($_POST['elim']))
      {
        include("conexion.php");
        $idv=$_POST['idven'];
        $nome=$_POST['nomb'];
        $fv=$_POST['fecven'];
        $exis=0;
        $resu=mysqli_query($conexion,"SELECT * FROM ventas WHERE IdVenta='$idv' AND IdEmpl='$nome' AND FechaVen='$fv'");
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
          mysqli_query($conexion," DELETE FROM productos WHERE IdVenta='$idv' AND IdEmpl='$nome' AND FechaVen='$fv'");
          header("location: productos.php");
        }
      }
    ?>
    <!--poner idea aqui-->
  </div>
</body>
</html>
