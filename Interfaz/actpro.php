<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Productos</title>
    <link rel="stylesheet" href="css/form2.css">
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
      <h3>Modifica el producto</h3>
      <form action=""  method="POST">
        <p>
          <label requerid for="" >Id del producto</label>
          <input class="cont" type="text" name="idpro" required>
        </p>
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
          <input class="a" type="submit" name="actu" value="Actualizar">
        </p>
      </form>
      <?php
        if(isset($_POST['actu']))
        {
          include("conexion.php");
          $idp=$_POST['idpro'];
          $nom=$_POST['nom'];
          $tip=$_POST['tip'];
          $pren=$_POST['pre'];
          $pres=$_POST['pres'];
          $can=$_POST['can'];
          $exis=0;
          $res=mysqli_query($conexion,"SELECT * FROM productos WHERE IdProd='$idp'");
          while($consul=mysqli_fetch_array($res))
          {
            $exis++;
          }
          if($exis==0)
          {
            echo"<h2>El producto no existe</h2>";
          }
          else
          {
            mysqli_query($conexion,"UPDATE productos SET
            IdProd='$idp',
            NomProd='$nom',
            TipoProd='$tip',
            PrecEnt='$pren',
            PrecSal='$pres',
            Cant='$can'
            WHERE IdProd='$idp'");
            echo'<script>
            alert("Producto modificado correctamente");
            </script>';
            header("Refresh:0; url=productos.php");
          }

        }
      ?>
    </div>
  </div>
</div>

  </body>
</html>
