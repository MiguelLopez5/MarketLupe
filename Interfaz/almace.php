<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Acceso rápido Almacenista</title>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/contenidoalmc.css">
    <link rel="stylesheet" type="text/css" href="font/fontealm.css">
    
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1>Almacenista</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="productos.php">Inventario</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="">Editar perfil</a>
          <a href="cerrar.php">Cerrar sesión</a>
        </nav>
      </div>
    </header>

 <main>
    <section id="imm">
      <img src="ima/maa.jpg">
      <div class="contenedor">
        <h2>Bienvenido Almacenista</h2>
        <p>En este espacio vas poder registrar la información de las actividades que hagas como almacenista</p>
      </div>
    </section>
  </main>
  <div class="contenedo">
        <h3>Tus servicios disponibles</h3>
        </div>
        <div class="capsu">
        <div class="inve">
          <center>
          <a href="productos.php">Inventario</a>
          <h3>Aquí se encuetra toda la información referente a los productos de la tienda Sordmark</h3></center>
        </div>
        <center>
        <div class="ingre">
          <a href="proveedores.php">Proveedores</a>
          <h3>Aquí podrás ver los proveedores que estén registrados previamente en el sistema y realizar cambios en su respectiva información</h3>
        </div>
</body>
</html>