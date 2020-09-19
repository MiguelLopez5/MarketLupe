<?php
  class usuarioController extends Usuario{
    function __construct(){
      Seguridad::verifySession();
    }

    public function index(){
      require_once 'views/layouts/header.php';
      require_once 'views/usuarios/index.php';
      require_once 'views/layouts/footer.php';
    }

    public function storage(){
      if(parent::avoid_repetition($_POST) > 0){
        echo "<script>alert('El usuario ya está registrado');</script>";
        header("refresh: 0; url=?controller=usuario");
      }
      else{
        $fecha = date("Y-m-d");

        $nameimg = $_FILES['imagen']['name'];
        $typeimg = $_FILES['imagen']['type'];
        $sizeimg = $_FILES['imagen']['size'];
        $ubicacion = 'assets/uploads/photos/'.$nameimg;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

        echo parent::registerData($_POST, $ubicacion) ? header('Location: ?controller=usuario') : "<script>alert('Error en la operación');</script>";
      }
    }

    public function edit(){
      $usuario = parent::find($_GET['idu']);
      require_once 'views/layouts/header.php';
      require_once 'views/public/edit.php';
      require_once 'views/layouts/footer.php';
    }

    public function update(){
        $fecha = date("Y-m-d");

        $nameimg = $_FILES['imagen']['name'];
        $typeimg = $_FILES['imagen']['type'];
        $sizeimg = $_FILES['imagen']['size'];
        $ubicacion = 'assets/uploads/photos/'.$nameimg;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
        $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

        echo parent::updateData($_POST, $ubicacion) ? header('Location: ?controller=usuario') : "<script>alert('Error en la operación');</script>";
    }

    public function delete(){
      echo parent::deleteData($_GET['idu']) ? header('Location: ?controller=usuario') : "<script>alert('Error en la operación');</script>";
    }
  }

?>
