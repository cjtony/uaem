<?php
session_start();

require "../conexion.php";
/*VARIABLES DE SESION*/

$idem = $_SESSION['id'];

$empresa = $_SESSION['empresa'];

$correo = $_SESSION['correo'];



/*CODIGO PARA MOSTRAR LOS ESTADOS REGISTRADOS EN LA BD CON SUS RESPECTIVOS MUNICIPIOS*/
$estados = $conexion->prepare('SELECT * FROM estados');

$estados->execute();

//MANDAMOS A TRAER LOS DATOS DE NUESTRA TABLA DIRECCION POR SI SE DESEAN ACTUALIZAER
$consulta = $conexion->prepare("SELECT em.idemp,e.nombre,m.nombre,em.colonia,em.calle,em.ninterior,em.nexterior,em.cp
from  desempresa em
inner join estados e on e.idestado=em.idestado
inner join municipios m on m.idmunicipio=em.idmunicipio
where em.idemp=:idem");

$consulta->bindParam(':idem', $idem);

$consulta->execute();

foreach ($consulta as $em) {
	$idemp =$em[0];
	$estado = $em[1];
	$municipio = $em[2];
	$colonia = $em[3];
	$calle = $em[4];
	$ninterior = $em[5];
	$nexterior = $em[6];
	$cp = $em[7];
}

/*CONSULTA PARA TRAER LOS DATOS DE LA TABLA PERSONA PRA SU POSIBLE MODIFICACION*/
$conempresa = $conexion->prepare("SELECT c.nombre,c.apepat,c.apemat,c.edad,c.telefono,c.extension,c.celular
from conempresa c
where idemp=:idem");

$conempresa->bindParam(':idem', $idem);

$conempresa->execute();

foreach ($conempresa as $p) {
	$nombre = $p[0];
	$apepat = $p[1];
	$apemat = $p[2];
	$edad = $p[3];
	$telefono = $p[4];
	$extension=$p[5];
	$celular =$p[6];

}

/*CONSULTA PARA TRAER LOS DATOS DE LA TABLA desempresa PRA SU POSIBLE MODIFICACION*/
$consulta2 = $conexion->prepare("SELECT de.nombreempresa,de.pagweb,de.sector,de.ramo,de.giro
from desempresa de
where idemp=:idem");

$consulta2->bindParam(':idem', $idem);

$consulta2->execute();

foreach ($consulta2 as $p) {
	$nombreempresa= $p[0];
	$pagweb = $p[1];
	$sector  = $p[2];
	$ramo = $p[3];
	$giro = $p[4];
}




/// consulta pra actuarlizar la direccion de la empresa////
if(isset($_POST['guardar'])){

	$idestado = $_POST['idestado'];

	$idmunicipio = $_POST['idmunicipio'];

	$colonia = $_POST['colonia'];

	$calle = $_POST['calle'];

	$ninterior = $_POST['ninterior'];

	$nexterior = $_POST['nexterior'];

	$cp = $_POST['cp'];

	$actualizar = $conexion->prepare("UPDATE desempresa SET idestado = :idestado, idmunicipio = :idmunicipio, colonia = :colonia, calle= :calle, ninterior =:ninterior, nexterior = :nexterior, cp= :cp WHERE idemp = :idemp");

	$actualizar->bindParam(':idestado',$idestado);

	$actualizar->bindParam(':idmunicipio',$idmunicipio);

	$actualizar->bindParam(':colonia',$colonia);

	$actualizar->bindParam(':calle',$calle);

	$actualizar->bindParam(':ninterior',$ninterior);

	$actualizar->bindParam(':nexterior',$nexterior);

	$actualizar->bindParam(':cp',$cp);

	$actualizar->bindParam(':idemp',$idemp);

	$actualizar->execute();

	if($actualizar == true){

	 echo '<script>

	 		  alert("Tus datos de direccion se han actualizado correctamente!")

	          window.location = "?ruta=midireccion";

	       </script>';
	}else{
		echo '<script>

	          alert("Error al actualizar los datos");

	        </script>';
	}
}

/// consulta para modificar los datos personaes de la empresa////
if(isset($_POST["guardarp"])){

	$id = $_SESSION['idcon'];

	$nombre = $_POST["nombre"];

	$apepat = $_POST["apepat"];

	$apemat = $_POST["apemat"];

	$edad= $_POST["edad"];

	$telefono = $_POST["telefono"];

	$extension= $_POST["extension"];

	$celular =$_POST["celular"];


	$actualizarp = $conexion->prepare("UPDATE conempresa SET nombre=:nombre, apepat=:apepat, apemat=:apemat,edad=:edad, telefono=:telefono, extension=:extension, celular=:celular WHERE idcon=:id");

	$actualizarp->bindParam(':id',$id);

	$actualizarp->bindParam(':nombre',$nombre);

	$actualizarp->bindParam(':apepat',$apepat);

	$actualizarp->bindParam(':apemat',$apemat);

	$actualizarp->bindParam(':edad',$edad);

	$actualizarp->bindParam(':telefono',$telefono);

	$actualizarp->bindParam(':extension',$extension);

	$actualizarp->bindParam(':celular',$celular);

     $actualizarp->execute();

	if($actualizarp == true){
			echo '<script>

			
			window.location = "?ruta=personales";

			alert("Tus datos personales se han actualizado correctamente");

		</script>';

	}else{
		echo '<script>
		
			alert("Error al actuliazar los datos");

		</script>';
	}
}

//////actualizar datos de la descripcion
if(isset($_POST["guardarem"])) {

	$id = $_SESSION['id'];

	$nombreempresa = $_POST["nombreempresa"];

	$pagweb = $_POST["pagweb"];

	$sector = $_POST["sector"];

	$ramo= $_POST["ramo"];

	$giro= $_POST["giro"];

	$actualizarem = $conexion->prepare("UPDATE desempresa SET  nombreempresa =:nombreempresa ,pagweb =:pagweb, sector=:sector, ramo=:ramo, giro=:giro WHERE idemp =:id");

	$actualizarem->bindParam(':id',$id);

	$actualizarem->bindParam(':nombreempresa',$nombreempresa);

	$actualizarem->bindParam(':pagweb',$pagweb);

	$actualizarem->bindParam(':sector',$sector);

	$actualizarem->bindParam(':ramo',$ramo);

	$actualizarem->bindParam(':giro',$giro);

    $actualizarem->execute();
    
    if($actualizarem == true){
			echo '<script>

			
			window.location = "?ruta=descripcion";

			alert("Tus datos personales se han actualizado correctamente");

		</script>';

	}else{
		echo '<script>
		
			alert("Error al actuliazar los datos");

		</script>';
	}
}

