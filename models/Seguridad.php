<?php
	class Seguridad extends Database{

		public function validateLogin($nombre){
			try {
				$r = parent::connect()->prepare("SELECT e.*, r.* FROM empleados AS e INNER JOIN roles AS r ON e.IdRol=r.IdRol WHERE e.NomEmpl = ?");
				$r->bindParam(1, $nombre, PDO::PARAM_STR);
				$r->execute();
				return $r->fetch();
			} catch (Exception $e) {
				die("Error en Seguridad->validateLogin()".$e->getMessage());
			}
		}

		public static function verifySession(){
			if (!isset($_SESSION['user'])) {
				echo "<script>alert('Por favor inicia sesión para continuar');</script>";
				header("Refresh: 0; url= ?method=loginForm");
			}
		}

		public function userLoged(){
			if(isset($_SESSION['user'])) {
				if ($_SESSION['user']->IdRol==1) {
					header("Location: ?controller=rol&method=admin");
				}
				elseif ($_SESSION['user']->IdRol==2) {
					header('Location: ?controller=rol&method=alma');
				}
				elseif ($_SESSION['user']->IdRol==3) {
					header('Location: ?controller=rol&method=ven');
				}
			}
		}

		public function verifyRole($role){
			if ($_SESSION['user']->IdRol != $role) {
				header("Location: ?method=loginForm");
			}
		}
	}
?>