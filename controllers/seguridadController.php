<?php
	class seguridadController extends Seguridad{

		public function login(){
			$usuinfo=parent::validateLogin($_POST['usuario']);

			if (!is_object($usuinfo)) {
				die('Acceso denegado');
			}

			if (password_verify($_POST['contrasena'], $usuinfo->Passw)) {
				$_SESSION['user'] = $usuinfo;
				if ($usuinfo->IdRol==1) {
					header("Location: ?controller=rol&method=admin");
				}
				elseif ($usuinfo->IdRol==2) {
					header('Location: ?controller=rol&method=alma');
				}
				elseif ($usuinfo->IdRol==3) {
					header('Location: ?controller=rol&method=ven');
				}
			}
			else{
				echo "<script>alert('Usuario o contraseña incorrectos');</script>";
				header("Refresh: 0; url=?method=loginForm");
			}
		}

		public function logout(){
			unset($_SESSION['user']);
			session_destroy();
			header("Location: ?controller=index");
		}
	}
?>
