<?php
	if(isset($_POST['enviar']))
	{
		include("conexion.php");
		if((isset($_POST['usua']))&&(isset($_POST['contra'])))
   		{
			$name=$_POST['usua'];
			$pass=$_POST['contra'];
			$resu=mysqli_query($conexion,"SELECT u.*, e.*, a.* FROM users AS u INNER JOIN empleados AS e ON u.IdEmpl=e.IdEmpl
			INNER JOIN asignacion AS a ON e.IdEmpl=a.IdEmpl");
			while($consu=mysqli_fetch_array($resu))
			{
				$nom=$consu['NomEmpl'];
				$conts=$consu['Passw'];
				$rol=$consu['IdRol'];
				if(($nom==$name)&&($conts==$pass))
	      {
	        session_start();
					$_SESSION['usuario']=$nom;
					if($rol==1)
					{
						header("location: admin.php");
					}
					else if($rol==2)
					{
						header("location: almace.php");
					}
					else if($rol==3)
					{
						header("location: vende.php");
					}
					else
					{
						echo "<script>alert('El usuario no tiene rol')</script>";
						header("Refresh:0; url=inicio.html");
					}
				}
				else{
					echo "<script>alert('Usuario o contraseña incorrectos')</script>";
					header("Refresh:0; url=inicio.html");
				}
			}
		}
		else
		{
			header("location: index.html");
		}
	}
	else
	{
		header("location: index.html");
	}
?>
