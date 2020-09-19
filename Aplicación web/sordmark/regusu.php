<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar Productos</title>
    <link rel="stylesheet" type="text/css" href="css/estiloRU.css">
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
      <h3>Registrar nuevo usuario</h3>
      <form action=""  method="POST">
        <p>
          <label requerid for="">Nombre</label>
          <input class="cont" type="text" name="nom" required>
        </p>
        <p>
          <label for="">Apellidos</label>
          <input class="campo" type="text" name="apel" required>
        </p>
        <p>
          <label for="">Edad</label>
          <input class="campo" type="text" name="ed" required>
        </p>
        <p>
          <label for="">Teléfono</label>
          <input class="campo" type="text" name="telfon" required>
        </p>
        <p>
          <label for="">Contraseña</label>
          <input class="campo" type="password" name="contra" required>
        </p>
        <p>
          <label for="">Selecciona el rol</label>
          <select class="roles" name="rol" size="1" required>
            <option value="1">Administrador</option>
            <option value="2">Almacenista</option>
            <option value="3">Vendedor</option>
          </select>
        </p>
        <p>
          <input class="a" type="submit" name="regiusu" value="Registrar">
        </p>
      </form>
    </div>
    <?php
      if(isset($_POST['regiusu']))
      {
        include("conexion.php");
        $nombre = $_POST['nom'];
        $apellido = $_POST['apel'];
        $edad = $_POST['ed'];
        $telefono = $_POST['telfon'];
        $contrasena = $_POST['contra'];
        $rol = $_POST['rol'];
        $existen=0;

        $resesi=mysqli_query($conexion,"SELECT u.*, e.*, a.* FROM empleados AS e INNER JOIN users AS u ON e.IdEmpl=u.IdEmpl INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl WHERE NomEmpl='$nombre' AND ApelEmpl='$apellido' AND Edad='$edad' AND NumTel='$telefono' AND Passw='$contrasena' AND IdRol='$rol'");
        while ($conle=mysqli_fetch_array($resesi)) {
          $existen=$existen+1;
        }
        if($existen>0)
        {
          echo "<h2>El usuario ya está registrado</h2>";
        }
        else
        {
          $resu1 = mysqli_query($conexion,"INSERT INTO empleados (NomEmpl,ApelEmpl,Edad,NumTel) VALUES ('$nombre','$apellido','$edad', '$telefono')");
          $resun=mysqli_query($conexion,"SELECT * FROM empleados WHERE NomEmpl='$nombre' AND ApelEmpl='$apellido' AND Edad='$edad' AND NumTel='$telefono'");
          while($consul=mysqli_fetch_array($resun))
          {
            $idemp=$consul['IdEmpl'];
          }
          $resu2=mysqli_query($conexion,"INSERT INTO users (IdEmpl,Passw) VALUES ('$idemp','$contrasena')");
          $fecha=date("Y-m-d");
          $resu3=mysqli_query($conexion,"INSERT INTO asignacion (IdEmpl,IdRol,FechaAsig) VALUES ('$idemp','$rol','$fecha')");

          if(($resu1)&&($resu2)&&($resu3)){
            echo'<script>
            alert("Usuario registrado correctamente");
            </script>';
            header("Refresh:0; url=adminuser.php");
          }else{
            echo "<h2>Error al registrar</h2>";
          }
      }
    }
  ?>
</div>
</div>
</body>
</html>