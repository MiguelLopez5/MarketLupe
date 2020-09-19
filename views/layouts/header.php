<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <?php
    if (isset($_SESSION['user'])) {
      if (isset($_GET['controller'])&&isset($_GET['method'])) {
        switch ($_GET['method']) {
          case 'admin': ?>
            <title>Inventario</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloEmp.css">
          <?php break;

          case 'alma': ?>
            <title>Inventario</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloEmp.css">
          <?php break;

          case 'ven': ?>
            <title>Inventario</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloEmp.css">
          <?php break;

          case 'edit': ?>
          <title>Editar datos</title>
          <link rel="stylesheet" type="text/css" href="assets/css/estiloForms.css">
          <?php break;
        }
      }
      if (isset($_GET['controller'])) {
        switch ($_GET['controller']) {
          case 'producto': ?>
            <title>Inventario</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloPro.css">
          <?php break;

          case 'venta': ?>
            <title>Ventas</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloVen.css">
          <?php break;

          case 'proveedor': ?>
            <title>Proveedores</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloProv.css">
          <?php break;

          case 'usuario': ?>
            <title>Usuarios</title>
            <link rel="stylesheet" type="text/css" href="assets/css/estiloUsu.css">
          <?php break;
        }
      } ?>
      <link rel="stylesheet" type="text/css" href="assets/css/fontello.css">
      <link rel="stylesheet" type="text/css" href="assets/css/all.css">
    </head>
    <body>
      <header>
      <div class="contenedor">
        <h1>MarketLupe</h1>
        <div class="opciones">
          <input type="checkbox" id="menu-bar">
              <label class="icon-menu" for="menu-bar"></label>
              <nav class="menu">
                <a href="?controller=rol&method=admin">Inicio</a>
                <a href="?controller=producto">Inventario</a>
                <a href="?controller=venta">Ventas</a>
                <a href="?controller=proveedor">Proveedores</a>
                <a href="?controller=usuario">Administrar usuarios</a>
              </nav>
            <input type="checkbox" id="usu-menu">
            <label id="conimg" for="usu-menu"><img src="<?= $_SESSION['user']->linkFoto ?>"></label>
            <div id="conten">
              <div id="info">
                <img src="<?= $_SESSION['user']->linkFoto ?>">
                        <nav>
                            <h2><?= $_SESSION['user']->NomEmpl ?> <?= $_SESSION['user']->ApelEmpl ?></h2>
                            <h3><?= $_SESSION['user']->NomRol ?></h3>
                        </nav>
              </div>
                <ul>
                    <a href="?controller=user&method=editData&ide=<?= $_SESSION['user']->IdEmpl ?>" class="one">Editar perfil</a>
                    <a href="?controller=seguridad&method=logout" class="two">Cerrar sesión</a>
                </ul>
            </div>
        </div>
      </div>
    </header>
    <?php }
    else {
      if (isset($_GET['method'])) {
        switch ($_GET['method']) {
          case 'loginForm': ?>
          <title>Iniciar sesión</title>
          <link rel="stylesheet" type="text/css" href="assets/css/estiloAcces.css">
          <?php  break;

          case 'registerForm': ?>
          <title>Registrarse</title>
          <link rel="stylesheet" type="text/css" href="assets/css/estiloAcces.css">
          <?php  break;

          case 'showAll': ?>
          <title>Productos</title>
          <link rel="stylesheet" type="text/css" href="assets/css/estiloVP.css">
          <script src="assets/js/jquery-3.4.1.min.js"></script>
          <script src="assets/js/main.js"></script>
          <?php  break;
        }
       }
      else { ?>
          <title>MarketLupe</title>
          <link rel="stylesheet" type="text/css" href="assets/css/estiloInd.css">
    <?php  } ?>
    <link rel="stylesheet" type="text/css" href="assets/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  </head>
  <body>
    <header>
     <h1>MarketLupe</h1>
     <input type="checkbox" id="menubarra">
     <label class="icon-menu" for="menubarra"></label>
     <div class="menu">
         <a href="?controller=index">Inicio</a>
         <a href="?method=showInfo">Nosotros</a>
         <a href="?method=loginForm">Ingresar</a>
         <a href="?method=registerForm">Registrate</a>
     </div>
    </header>
  <?php } ?>