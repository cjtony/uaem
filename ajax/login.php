<?php
session_start();

require_once "../modelos/Login.php";

$correo = $_POST["correol"];
$password = $_POST["passwordl"];
//$password = sha1($password);
$login = new Login();

switch ($_GET["dato"]) {
	
	case 'loguear':

		$rspta = $login->LoginEgresadoCuenta($correo,$password);

		if(json_encode($rspta) == "null"){

			$rspta2 = $login->LoginEmpresa($correo,$password);

			if(json_encode($rspta2) == "null"){

				$rspta3 = $login->LoginAdmin($correo,$password);

				$_SESSION["id"] = $rspta3["idadmin"];
				$_SESSION["pass"] = $rspta3["password"];
				$_SESSION["user"] = $rspta3["nombre"];
				$_SESSION["nombre"] = $rspta3["nombre"].' '.$rspta3["apepat"].' '.$rspta3["apemat"];

				echo json_encode($rspta3);

			}else{

				echo json_encode($rspta2);

			}

		}else{

			echo json_encode($rspta);
			$_SESSION["user"] = $rspta["nombre"];
			$_SESSION["id"] = $rspta["idegresado"];
			$_SESSION["correo"] = $rspta["correo"];
			$_SESSION["password"] = $rspta["password"];
			$_SESSION["nombre"] = $rspta["nombre"].' '.$rspta["apepat"].' '.$rspta["apemat"];
			$_SESSION["cuenta"] = $rspta["cuenta"];

		}

	break;

}
?>