<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Eliminar usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/estiloDU.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="adminuser.php">Sordmark</a>
      </div>
      <h2>Eliminar usuario</h2>
      <form class="form" action="" method="POST">
        <h3>Eliminar por identificación</h3>
        <input type="text" name="iduser" value="" placeholder="Id Empleado" required>&nbsp;
        <input type="text" name="nomb" value="" placeholder="Nombre" required>
        <input class="be" type="submit" name="elim" value="Eliminar">
      </form>
    <?php
      if(isset($_POST['elim']))
      {
        include("conexion.php");
        $idu=$_POST['iduser'];
        $nom=$_POST['nomb'];
        $exis=0;
        $resu=mysqli_query($conexion,"SELECT * FROM empleados WHERE IdEmpl='$idu' AND NomEmpl='$nom'");
        while($consu=mysqli_fetch_array($resu))
        {
          $exis++;
        }
        if($exis==0)
        {
          echo'<script>
          alert("El usuario no está registrado");
          </script>';
        }
        else
        {
          mysqli_query($conexion," DELETE FROM empleados WHERE IdEmpl='$idu' AND NomEmpl='$nom'");
          header("location: adminuser.php");
          mysqli_query($conexion," DELETE FROM users WHERE IdEmpl='$idu'");
          header("location: adminuser.php");
          mysqli_query($conexion," DELETE FROM asignacion WHERE IdEmpl='$idu'");
          header("location: adminuser.php");
        }
      }
    ?>
    <!--poner idea aqui-->
  </div>
</body>
</html>
