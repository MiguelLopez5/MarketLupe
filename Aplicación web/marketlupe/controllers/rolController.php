<?php 
	class rolController extends Seguridad{
		function __construct(){
			parent::verifySession();
		}

		public function admin(){
			parent::verifyRole(1);
			require_once "views/layouts/header.php";
			require_once "views/acceso/indexAdmin.php";
			require_once "views/layouts/footer.php";
		}

		public function alma(){
			parent::verifyRole(2);
			require_once "views/layouts/header.php";
			require_once "views/acceso/indexAlma.php";
			require_once "views/layouts/footer.php";
		}

		public function vende(){
			parent::verifyRole(3);
			require_once "views/layouts/header.php";
			require_once "views/acceso/indexVende.php";
			require_once "views/layouts/footer.php";
		}
	}
 ?>