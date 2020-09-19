<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar Productos</title>
    <link rel="stylesheet" type="text/css" href="css/estiloRP.css">
  </head>
  <body>
    <div class="contain">

  <div class="wrapper">
    <div class="contacts">
      <a href="productos.php">Sordmark</a>

      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class="form">
      <h3>Registra el producto</h3>
      <form action=""  method="POST">
        <p>
          <label requerid for="" >Nombre del producto</label>
          <input class="cont" type="text" name="nom" required>
        </p>
        <p>
          <label for="">Tipo del producto</label>
          <input class="cont" type="text" name="tip" required>
        </p>
        <p>
          <label for="">Precio Entrada</label>
          <input class="cont" type="text" name="pre" required>
        </p>
        <p>
          <label for="">Precio salida</label>
          <input class="cont" type="text" name="pres" required>
        </p>
        <p>
          <label for="">Cantidad</label>
          <input class="cont" type="text" name="can" required>
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
        $nom=$_POST['nom'];
        $tip=$_POST['tip'];
        $pren=$_POST['pre'];
        $pres=$_POST['pres'];
        $can=$_POST['can'];
        $exis=0;

        $resu=mysqli_query($conexion,"SELECT * FROM productos WHERE NomProd='$nom' AND TipoProd='$tip' AND PrecEnt='$pren' AND PrecSal='$pres' AND Cant='$can'");
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
          $datos=mysqli_query($conexion,"INSERT INTO productos (NomProd,TipoProd,PrecEnt,PrecSal,Cant) VALUES('$nom','$tip','$pren','$pres','$can')");

          if($datos)
          {
            header('Location: productos.php');
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
