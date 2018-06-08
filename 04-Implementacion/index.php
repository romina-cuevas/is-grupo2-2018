<?php 
	session_start();
	require_once("funciones.php");
	$conexion = conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Implementación - Ingeniería de Software</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
	.login100-more::before{s
		background: -moz-linear-gradient(top, rgba(0,0,0,0.36) 0%, rgba(0,0,0,0.36) 1%, rgba(0,0,0,0) 100%); 
		background: -webkit-linear-gradient(top, rgba(0,0,0,0.36) 0%,rgba(0,0,0,0.36) 1%,rgba(0,0,0,0) 100%); 
		background: linear-gradient(to bottom, rgba(0,0,0,0.36) 0%,rgba(0,0,0,0.36) 1%,rgba(0,0,0,0) 100%); 
	}

	button{
		background: #6094FF;
	}
	.login100-more{
		background-image: url('images/fondo.jpg');
	}
	.p-b-59 {padding-bottom: 39px;
</style>
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more"></div>
				<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<!-- FORM LOGIN -->

					<form class="login100-form validate-form" action="" method="POST">
						<span class="login100-form-title p-b-59">Registrarte</span>
							<div class="wrap-input100 validate-input">
								<input type="text" name="nombre" placeholder="Nombre" required data-validate="Se requiere nombre">
							</div>
							<br>
							<div class="wrap-input100 validate-input">
								<input type="text" name="apellido" placeholder="Apellido" required>
							</div>
							<br>
							<div class="wrap-input100 validate-input">		
								<input type="password" name="contrasenia" placeholder="Contraseña" required>
							</div>
							<br>
							<div class="wrap-input100 validate-input">
								<input type="email" name="email" placeholder="Email" required >
							</div>
							<br>
							<div class="validate-input" style="color: #c2c2c2">
								Fecha de nacimiento:
								<input type="date" name="fechaNacimiento" max="2000-01-01">
							</div>
							<br><br>
							<button class="btn btn-lg btn-dark btn-block btn-signin" type="submit" name="login">Registrarse</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
	
		if($_POST){ //Al clickear ENVIAR

			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$contrasenia = $_POST['contrasenia'];
			$email = $_POST['email'];
			$fechaNacimiento = $_POST['fechaNacimiento'];

			$sql = "INSERT INTO user(nombre,apellido,contrasenia,email,fechaNacimiento) VALUES ('$nombre','$apellido','$contrasenia','$email','$fechaNacimiento')";
			$resultado = $conexion->query($sql);
			echo mysqli_error($conexion);

			if ($resultado){
				echo "<script> alert('Se ha registrado correctamente'); location.href = 'index.php'</script>";
			}else{
				echo "<div>
				<h1 class='titulo1'>Error</h1>
				</div>";
			}
		}
	?>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>