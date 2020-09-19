<?php
  class productoController extends Producto{
    function __construct(){
      Seguridad::verifySession();
    }

    public function index(){
      require_once 'views/layouts/header.php';
      require_once 'views/productos/index.php';
      require_once 'views/layouts/footer.php';
    }

    public function storage(){
      if(parent::avoid_repetition($_POST) > 0){
        echo "<script>alert('El producto ya está registrado');</script>";
        header("refresh: 0; url=?controller=producto");
      }
      else{
        $nameimg = $_FILES['imagen']['name'];
        $typeimg = $_FILES['imagen']['type'];
        $sizeimg = $_FILES['imagen']['size'];
        $ubicacion = 'assets/uploads/pictures/'.$nameimg;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
        echo parent::register($_POST, $ubicacion) ? header('Location: ?controller=producto') : "<script>alert('Error en al operación');</script>";
      }

    }

    public function edit(){
      $producto = parent::find($_GET['idp']);
      require_once 'views/layouts/header.php';
      require_once 'views/public/edit.php';
      require_once 'views/layouts/footer.php';
    }

    public function update(){
      $nameimg = $_FILES['imagen']['name'];
      $typeimg = $_FILES['imagen']['type'];
      $sizeimg = $_FILES['imagen']['size'];
      $ubicacion = 'assets/uploads/pictures/'.$nameimg;
      move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
      echo parent::update_register($_POST, $ubicacion) ? header('Location: ?controller=producto') : "<script>alert('Error en al operación');</script>";
    }

    public function delete(){
      echo parent::delete_register($_GET['idp']) ? header('Location: ?controller=producto') : "<script>alert('Error en al operación');</script>";
    }
  }

?>
