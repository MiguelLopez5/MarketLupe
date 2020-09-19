<?php
  session_start();
  include('funciones.php');
  verificar_sesion();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Acceso rápido Vendedor</title>
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
        <img src="ima/bgv.jpg">
        <div class="contenedo">
          <h2 class="tit">Bienvenido Vendedor</h2>
          <p>En este espacio vas poder registrar la información de las actividades que hagas como almacenista</p>
          <h4>Tus servicios disponibles</h4>
        </div>
        <div class="capsu">
          <div class="inve">
            <a href="productos.php">Inventario</a>
            <h5>Aquí se encuetra toda la información referente a los productos que contiene la tienda, y que están registrados en el sistema</h5>
          </div>
          <div class="inve">
            <a href="Ventas.php">Ventas</a>
            <h5>Ingresa aquí para visualizar las ventas que se han realizado previamente y se han registrado en este sistema</h5>
          </div>
          <div class="inve">
            <a href="regven.php">Registrar venta</a>
            <h5>Al momento de realizar una venta, registrala aquí para poder consultar su información en otro momento después de realizar lo anterior</h5>
          </div>
      </div>
      </section>
  </main>
</body>
</html>
