<?php

require 'config/conexion.php';

require 'login.php';

if(isset($_POST['ingreso'])){

$correo = $_POST['correo'];
$password = $_POST['password'];

$usuario = $conexion->prepare("SELECT * FROM persona WHERE correo = :correo");
$usuario->bindParam(':correo',$correo);
$usuario->execute();

$empresa = $conexion->prepare("SELECT * FROM conempresa WHERE correo = :correo");
$empresa->bindParam(':correo',$correo);
$empresa->execute();

if($usuario != false || $empresa != false){

}

$row = $usuario->fetch();
$row2 = $empresa->fetch();



if ($row["password"] == $password) {
	
	$_SESSION['sesion'] = 'ok';
	echo '<script>

		window.location = "inicio";

	</script>';

}
}

 