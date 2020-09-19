<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buscar Productos</title>
    <link rel="stylesheet" href="css/estiloCU.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="contacts">

        <a class="g" href="adminuser.php">Sordmark</a>
      </div>
      <h3>Busqueda de usuario</h3>
      <form class="form" action="" method="post">
    <input type="text" name="nomb" value="" placeholder="Buscar por nombre">
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
        $nom=$_POST['nomb'];
        $exis=0;
        $r=mysqli_query($conexion,"SELECT u.*, e.*, a.* FROM users AS u INNER JOIN empleados AS e ON u.IdEmpl=e.IdEmpl INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl WHERE NomEmpl='$nom'");
          echo"
            <table width=\"100%\" style=\"background-color: #F2F3F4; border-collapse: collapse;\">
            <thead style=\"background-color: #45B39D; border-bottom: solid 5px #0E6655; color: white;\">
            <tr>
              <td style=\"padding: 20px\";>Id Empleado</td>
              <td style=\"padding: 20px\";>Nombre</td>
              <td style=\"padding: 20px\";>Apellido</td>
              <td style=\"padding: 20px\";>Telefono</td>
              <td style=\"padding: 20px\";>Contraseña</td>
              <td style=\"padding: 20px\";>Rol</td>
            </tr>";
             while($con=mysqli_fetch_array($r))
             {
              echo"<thead>
              <tr>
                <td style=\"padding: 20px\";>".$con['IdEmpl']."</td>
                <td style=\"padding: 20px\";>".$con['NomEmpl']."</td>
                <td style=\"padding: 20px\";>".$con['ApelEmpl']."</td>
                <td style=\"padding: 20px\";>".$con['NumTel']."</td>
                <td style=\"padding: 20px\";>".$con['Passw']."</td>
                <td style=\"padding: 20px\";>".$con['IdRol']."</td>
              </tr>";
              echo"</table>";
              $exis++;
             }
        if($exis==0)
        {
          echo"<h2>El usuario no está registrado</h2>";
        }
      }
    ?>
  </div>
</form>
</body>
</html>
