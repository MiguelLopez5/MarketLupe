<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar Ventas</title>
    <link rel="stylesheet" href="css/estrv.css">
  </head>
  <body>
    <div class="contain">

  <div class="wrapper">
    <div class="contacts">
      <a href="ingresos.php">Sordmark</a>

      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class="form">
      <h3>Registra tu venta</h3>
      <form action="" method="POST">
        <p>
          <label requerid for="">Id Empleado</label>
          <input class="cont" type="text" name="idemp" required>
        </p>
        <p>
          <label for="">Fecha Venta</label>
          <input class="cont" type="date" name="fecven" required>
        </p>
        <p>
          <label for="">Precio total</label>
          <input class="cont" type="text" name="preto" required>
        </p>
        <p>
          <label for="">Id cliente</label>
          <input class="cont" type="text" name="idcli" required>
        </p>
        <p>
          <input class="gg" type="submit" name="regis" value="Registrar">
        </p>
      </form>
    </div>
    <?php
      include("conexion.php");
      if(isset($_POST['regis']))
      {
        $ide=$_POST['idemp'];
        $fv=$_POST['fecven'];
        $pt=$_POST['preto'];
        $idc=$_POST['idcli'];
        $exis=0;

        $resu=mysqli_query($conexion,"SELECT * FROM ventas WHERE IdEmpl='$ide' AND FechaVen='$fv' AND PrecTotal='$pt' AND IdCli='$idc'");
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
          $datos=mysqli_query($conexion,"INSERT INTO ventas (IdEmpl,FechaVen,PrecTotal,IdCli) VALUES('$ide','$fv','$pt','$idc')");

          if($datos)
          {
            header('Location: ingresos.php');
          }
          else
          {
            echo "error";
          }
        }
      }
    ?>
  </div>
</div>
  </body>
</html>
