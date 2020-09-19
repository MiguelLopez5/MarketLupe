<?php
  class proveedorController extends Proveedor{
    function __construct(){
      Seguridad::verifySession();
    }

    public function index(){
      require_once 'views/layouts/header.php';
      require_once 'views/proveedores/index.php';
      require_once 'views/layouts/footer.php';
    }

    public function storage(){
      if(parent::avoid_repetition($_POST) > 0){
        echo "<script>alert('El proveedor ya está registrado');</script>";
        header("refresh: 0; url=?controller=proveedor");
      }
      else{
        echo parent::register($_POST) ? header('Location: ?controller=proveedor') : "<script>alert('Error en la operación');</script>";
      }

    }

    public function edit(){
      $proveedor = parent::find($_GET['idpr']);
      require_once 'views/layouts/header.php';
      require_once 'views/public/edit.php';
      require_once 'views/layouts/footer.php';
    }

    public function update(){
      echo parent::update_register($_POST) ? header('Location: ?controller=proveedor') : "<script>alert('Error en la operación');</script>";
    }

    public function delete(){
      echo parent::delete_register($_GET['idpr']) ? header('Location: ?controller=proveedor') : "<script>alert('Error en la operación');</script>";
    }
  }

?>
