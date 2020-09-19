<?php
	session_start();
	include('funciones.php');
	verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Acceso rápido Administrador</title>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estiloEmp.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <?php
          include_once('funciones.php');
          acceso_info();
        ?>
      </div>
    </header>
    <main>
      <section id="cont">
        <img src="ima/bgad.jpg">
        <div class="contenedo">
        <h4>Tus servicios disponibles</h4>
        </div>
        <div class="capsu">
        <div class="inve">
          <a href="productos.php">Inventario</a>
          <h5>Aquí se encuetra toda la información referente a los productos de la tienda Sordmark</h5>
        </div>
        <div class="inve">
          <a href="Ventas.php">Ventas</a>
          <h5>Aquí podrás visualizar los ingresos que se han obtenido por medio de las ventas realizadas</h5>
        </div>
        <div class="inve">
          <a href="adminuser.php">Administrar usuarios</a>
          <h5>Aquí podrás entrar y gestionar los  datos de los usuarios registrados en el sistema</h5>
        </div>
        </div>
      </section>
    </main>
  </body>
</html>
