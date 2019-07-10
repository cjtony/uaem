<?php
session_start();

require "../conexion.php";

$usuario = $_SESSION["user"];

$idegresado = $_SESSION['id'];

$nombre = $_SESSION['nombre'];

$cuenta = $_SESSION["cuenta"];

$correo = $_SESSION['correo'];

$pass = $_SESSION['password'];



/*$emp = $conexion->prepare("SELECT  l.nombre,a.ingreso,a.egreso,a.titulado,a.modalidad
from academico a
inner join licenciaturas l on l.idlic = a.licenciatura
where a.idper=:idu");

$emp->bindParam(':idu',$idegresadou);

$emp->execute();

foreach ($emp as $p) {
	$licenciatura = $p[0];
	$ingreso= $p[1];
	$egreso = $p[2];
	$titulado = $p[3];
	$modalidad = $p[4];
}
*/
/*----------  CAMBIO DE CONTRASEÑA  ----------*/


/*if(isset($_POST['cambioPass'])){

  $password = $_POST['pnueva'];

  $actualizar = $conexion->prepare("UPDATE persona set password = :password WHERE idper = :idu");

  $actualizar->bindParam(':password',$password);

  $actualizar->bindParam(':idu',$idegresadou);

  $actualizar->execute();

  if($actualizar == true){

  	echo '<script>

  		alert("Tu contraseña se ha actualizado de manera correcta, por favor vuelve a iniciar sesion.
  		");

  		window.location = "cerrarSesion.php";

		</script>';

  	

  }
}

/*=============================================
ACTUALIZAR DATOS DE LA TABLA ACADEMICOS
=============================================*/
/*
if(isset($_POST["actualizardatos"])){

	$licenciatura= $_POST["licenciatura"];

	$ingreso = $_POST["ingreso"];

	$egreso = $_POST["egreso"];

	$titulado = $_POST["titulado"];

	$modalidad = $_POST["modalidad"];

	$tiempo  = $_POST["tiempo"];


	$academicos = $conexion->prepare("UPDATE academico SET licenciatura =:licenciatura, ingreso =:ingreso, egreso =:egreso, titulado =: titulado,
		modalidad = :modalidad, tiempo = :tiempo WHERE idper =:idu");

	$academicos->bindParam(':idu',$idegresadou);
   
    $academicos->bindParam(':licenciatura',$licenciatura);

    $academicos->bindParam(':ingreso',$ingreso);

    $academicos->bindParam(':egreso',$egreso);

    $academicos->bindParam(':titulado',$titulado);

    $academicos->bindParam(':modalidad',$modalidad);

    $academicos->bindParam(':tiempo',$tiempo);

    $academicos->execute();

    if($academicos == true){

		echo '<script>
			
			window.location = "?ruta=academicos";

			alert("Tus datos personales se han actualizado correctamente");

		</script>';

	}else{
		echo '<script>
		
			alert("Error al actuliazar los datos");

		</script>';
	}

}

$cons = $conexion->prepare("SELECT em.arraigado,em.trabajas,em.tiempoempleo,em.relacionempleo,em.nombreemp,em.direccionemp,em.telefonoemp,em.pagwebemp,em.ramoemp FROM empresainstitucion em WHERE em.idper=:idu");

$cons->bindParam(':idu',$idegresadou);

$cons->execute();

foreach ($cons as $p) {
	$arraigado= $p[0];
	$trabajas= $p[1];
	$tiempoempleo = $p[2];
	$relacionempleo = $p[3];
	$nombreemp= $p[4];
	$direccionemp =$p[5];
	$telefonoemp =$p[6];
	$pagwebemp =$p[7];
	$ramoemp =$p[8];
}
*/










