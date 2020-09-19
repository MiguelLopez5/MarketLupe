<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrar Ususarios</title>
    <link rel="stylesheet" type="text/css" href="css/contenido.css">
    <link rel="stylesheet" type="text/css" href="css/menutrns.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilu.css">
    <link rel="stylesheet" href="css/botones.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Administrar Ususarios</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <div id="ht">
          <a href="productos.php">Inventario</a>
          <a href="ingresos.php">Ingresos</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="adminuser.php">Administrar usuarios</a>
          <a href="">Editar perfil</a>
          <a href="cerrar.php">Cerrar sesión</a>
        </div>

        </nav>
      </div>
    </header>
    <main>
      </div>
    </section>
    <div class="contener">
        <section class="header">
          <h2></h2>
        </section>
          <section class="contenido">
            <div class="form">
              <h3>Editar empleados</h3>
              <form action=""  method="POST">
                <p>
                  <label requerid for="" >Id de empleado</label>
                  <input class="cont" type="text" name="idemp" required>
                </p>
                <p>
                  <label requerid for="" >Nombre</label>
                  <input class="cont" type="text" name="nome" required>
                </p>
                <p>
                  <label requerid for="" >Apellido</label>
                  <input class="cont" type="text" name="apele" required>
                </p>
                <p>
                  <label for="">Telefono</label>
                  <input class="cont" type="text" name="tele" required>
                </p>
                <p>
                  <label for="">Contraseña</label>
                  <input class="cont" type="text" name="cone" required>
                </p>
                <p>
                  <label for="">Rol</label>
                  <input class="cont" type="text" name="role" required>
                </p>
                <p>
                  <input class="a" type="submit" name="actu" value="Actualizar">
                </p>
              </form>
              <?php
                if(isset($_POST['actu']))
                {
                  include("conexion.php");
                  $ide=$_POST['idemp'];
                  $nom=$_POST['nome'];
                  $apel=$_POST['apele'];
                  $tel=$_POST['tele'];
                  $cont=$_POST['cone'];
                  $rol=$_POST['role'];
                  $exis=0;
                  $res=mysqli_query($conexion,"SELECT * FROM empleados WHERE IdEmpl='$ide'");
                  while($consul=mysqli_fetch_array($res))
                  {
                    $exis++;
                  }
                  if($exis==0)
                  {
                    echo"<h2>El Usuario no existe</h2>";
                  }
                  else
                  {
                    mysqli_query($conexion,"UPDATE empleados SET
                    IdEmpl='$ide',
                    NomEmpl='$nom',
                    ApelEmpl='$apel',
                    NumTel='$tel'
                    WHERE IdEmpl='$ide'");
                    mysqli_query($conexion,"UPDATE users SET
                    Passw='$cont'
                    WHERE IdEmpl='$ide'");
                    mysqli_query($conexion,"UPDATE asignacion SET
                    IdRol='$rol'
                    WHERE IdEmpl='$ide'");
                    echo'<script>
                    alert("Producto modificado correctamente");
                    </script>';
                    header("Refresh:0; url=adminuser.php");
                }
              }
              ?>
          </div>
          </section>
          <section class="sildebar">
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
          </section>
            <section class="widget -1">

          </section>
            <section class="widget -2">

            </section>
            <section class="folder" >
              <h3></h3>
            </section>
    </div>
    </main>
  </body>
</html>
