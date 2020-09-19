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
        <img src="ima/bgal.jpg">
        <div class="contenedo">
          <h2 class="tit">Bienvenido Almacenista</h2>
          <p>En este espacio vas poder registrar la información de las actividades que hagas como almacenista</p>
          <h4>Tus servicios disponibles</h4>
        </div>
        <div class="capsu">
          <div class="inve">
            <a href="productos.php">Inventario</a>
            <h5>Aquí se encuetra toda la información referente a los productos de la tienda Sordmark</h5>
          </div>
          <div class="inve">
            <a href="proveedores.php">Proveedores</a>
            <h5>Aquí podrás ver los proveedores que estén registrados previamente en el sistema y realizar cambios en su respectiva información</h5>
          </div>
          <div class="inve">
            <a href="conprov.php">Consultar Proveedor</a>
            <h5>Haz clic para poder consultar un proveedor en específico y visualizar su información en la misma página</h5>
          </div>
      </div>
      </section>
  </main>
</body>
</html>
