<?php
  session_start();

  $controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
  $method = isset($_GET['method']) ? $_GET['method'] : 'index';

  require_once 'lib/config.php';

  require_once 'models/Database.php';
  require_once 'models/Producto.php';
  require_once 'models/Venta.php';
  require_once 'models/Proveedor.php';
  require_once 'models/Usuario.php';
  require_once 'models/Seguridad.php';

  require_once 'controllers/indexController.php';
  require_once 'controllers/productoController.php';
  require_once 'controllers/ventaController.php';
  require_once 'controllers/proveedorController.php';
  require_once 'controllers/usuarioController.php';
  require_once 'controllers/seguridadController.php';
  require_once 'controllers/rolController.php';

  $controller = "{$controller}Controller";
  $controller = new $controller();

  call_user_func([$controller, $method]);
?>
