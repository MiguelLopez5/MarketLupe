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
    <link rel="stylesheet" type="text/css" href="css/estilosalma.css">
    <link rel="stylesheet" type="text/css" href="css/menualma.css">
    <link rel="stylesheet" type="text/css" href="css/contenidoalma.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Administrador</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="productos.php">Inventario</a>
          <a href="ingresos.php">Ingresos</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="adminuser.php">Administrar usuarios</a>
          <a href="">Editar perfil</a>
          <a href="cerrar.php">Cerrar sesión</a>
        </nav>
      </div>
    </header>
    <main>
      <section id="cont">
        <img src="ima/mae.jpg">
        <div class="contenedo">
        <h2>Tus servicios disponibles </h2>
        </div>
        <div class="capsu">
        <div class="inve">
          <center>
          <a href="productos.php">Inventario</a>
          <h3>Aquí se encuetra toda la información referente a los productos de la tienda Sordmark</h3></center>
        </div>
        <center>
        <div class="ingre">
          <a href="ingresos.php">Ingresos</a>
          <h3>Aquí podrás visualizar los ingresos que se han obtenido por medio de las ventas realizadas</h3>
        </div>
      </center>
        <div class="ingree">
          <a href="adminuser.php">Administrar usuarios</a>
          <h3>Aquí podrás entrar y gestionar los  datos de los usuarios registrados en el sistema</h3>
        </div>
        </div>
      </section>
    </main>
  </body>
</html>
