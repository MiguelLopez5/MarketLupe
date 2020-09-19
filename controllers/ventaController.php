<?php
  class ventaController extends Venta{
    function __construct(){
      Seguridad::verifySession();
    }

    public function index(){
      require_once 'views/layouts/header.php';
      require_once 'views/ventas/index.php';
      require_once 'views/layouts/footer.php';
    }

    public function create(){
      //code
    }

    public function storage(){
      echo parent::register($_POST) ? header('Location: ?controller=venta') : "<script>alert('Error en al operación');</script>";
    }

    public function delete(){
      echo parent::delete_register($_GET['idv']) ? header('Location: ?controller=venta') : "<script>alert('Error en al operación');</script>";
    }
  }

?>
