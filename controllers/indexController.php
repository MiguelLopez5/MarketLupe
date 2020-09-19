<?php
  class indexController extends Seguridad{
    function __construct(){
      parent::userLoged();
    }

    public function index(){
      require_once "views/layouts/header.php";
      require_once "views/index/index.php";
      require_once "views/layouts/footer.php";
    }

    public function showInfo(){
      require_once "views/layouts/header.php";
      require_once "views/index/empresa.php";
      require_once "views/layouts/footer.php";
    }

    public function loginForm(){
      require_once "views/layouts/header.php";
      require_once "views/index/login.php";
      require_once "views/layouts/footer.php";
    }

    public function registerForm(){
      require_once "views/layouts/header.php";
      require_once "views/index/register.php";
      require_once "views/layouts/footer.php";
    }

    public function showAll(){
      require_once "views/layouts/header.php";
      require_once "views/index/productos.php";
      require_once "views/layouts/footer.php";
    }
  }
?>
