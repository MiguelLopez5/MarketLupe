<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrar Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/contenido.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estiloAdUs.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Administrar Usuarios</h1>
        <?php
          include_once('funciones.php');
          acceso_ext_pag()
        ?>
      </div>
    </header>
    <div id="menop">
      <div class="bot1"><a href="regusu.php">Crear</a></div>
      <div class="bot2"><a href="actusu.php">Editar</a></div>
      <div class="bot3"><a href="conusu.php">Buscar</a></div>
      <div class="bot4"><a href="delusu.php">Eliminar</a></div>
    </div>
    <div id="conpad">
      <div id="contener">
       <?php
             include("conexion.php");
             $resu=mysqli_query($conexion,"SELECT u.*, e.*, a.* FROM users AS u INNER JOIN empleados AS e ON u.IdEmpl=e.IdEmpl
               INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl");
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
             while($consulta=mysqli_fetch_array($resu))
             {
                 echo"<thead>
                 <tr>
                   <td style=\"padding: 20px\";>".$consulta['IdEmpl']."</td>
                   <td style=\"padding: 20px\";>".$consulta['NomEmpl']."</td>
                   <td style=\"padding: 20px\";>".$consulta['ApelEmpl']."</td>
                   <td style=\"padding: 20px\";>".$consulta['NumTel']."</td>
                   <td style=\"padding: 20px\";>".$consulta['Passw']."</td>
                   <td style=\"padding: 20px\";>".$consulta['IdRol']."</td>
                 </tr>";
             }
             echo"</table>";
           ?>
      </div>
    </div>
  </body>
</html>
