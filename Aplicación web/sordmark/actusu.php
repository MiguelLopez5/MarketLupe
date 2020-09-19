<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Productos</title>
    <link rel="stylesheet" href="css/estiloAU.css">
  </head>
  <body>
    <div class="contain">

  <div class="wrapper">
    <div class="contacts">
      <a href="adminuser.php">Sordmark</a>
      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class="form">
      <h3>Editar empleados</h3>
      <form action="" method="POST">
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
          <input class="cont" type="password" name="cone" required>
        </p>
         <p>
          <label for="">Selecciona el rol</label>
          <select class="roles" name="role" size="1" required>
            <option value="1">Administrador</option>
            <option value="2">Almacenista</option>
            <option value="3">Vendedor</option>
          </select>
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
            alert("Usuario modificado correctamente");
            </script>';
            header("Refresh:0; url=adminuser.php");
          }
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>