<?php

require "../conexion.php";

    $idenc = isset($_POST["idenc"]) ? $_POST["idenc"]: "";

    $idegresado = isset($_POST["idegresado"]) ? $_POST["idegresado"]: "";

    $arraigado = isset($_POST["arraigado"]) ? $_POST["arraigado"]: "";
   
    $trabajas = isset($_POST["trabajas"]) ? $_POST["trabajas"]: "";
    
    $tiempoempleo = isset($_POST["tiempoempleo"]) ? $_POST["tiempoempleo"]: "";
	
    $relacionempleo = isset($_POST["relacionempleo"]) ? $_POST["relacionempleo"]: "";
	
    $nombreemp = isset($_POST["nombreemp"]) ? $_POST["nombreemp"]: "";
    
     $direccionemp = isset($_POST["direccionemp"]) ? $_POST["direccionemp"]: "";
	
	$telefonoemp = isset($_POST["telefonoemp"]) ? $_POST["telefonoemp"]: "";
	
	$pagwebemp = isset($_POST["pagwebemp"]) ? $_POST["pagwebemp"]: "";
	
	$sectoremp = isset($_POST["sectoremp"]) ? $_POST["sectoremp"]: "";
	
	$ramoemp = isset($_POST["ramoemp"]) ? $_POST["ramoemp"]: "";
	
	$giroemp = isset($_POST["giroemp"]) ? $_POST["giroemp"]: "";
	
	$areapertenece = isset($_POST["areapertenece"]) ? $_POST["areapertenece"]: "";
	
	$tipopuesto = isset($_POST["tipopuesto"]) ? $_POST["tipopuesto"]: "";
	
	$tiempodos = isset($_POST["tiempodos"]) ? $_POST["tiempodos"]: "";
	
	$antiguedadpuesto = isset($_POST["antiguedadpuesto"]) ? $_POST["antiguedadpuesto"]: "";
	
	$rangosueldo = isset($_POST["rangosueldo"]) ? $_POST["rangosueldo"]: "";
	
	$sueldopercibes = isset($_POST["sueldopercibes"]) ? $_POST["sueldopercibes"]: "";
	
	$tresfunciones = isset($_POST["tresfunciones"]) ? $_POST["tresfunciones"]: "";
	
	$metodosemp = isset($_POST["metodosemp"]) ? $_POST["metodosemp"]: "";
	
	$equipoemp = isset($_POST["equipoemp"]) ? $_POST["equipoemp"]: "";
	
	$herramientasemp = isset($_POST["herramientasemp"]) ? $_POST["herramientasemp"]: "";
	
	$utilizassoft = isset($_POST["utilizassoft"]) ? $_POST["utilizassoft"]: "";
	
	$tiposoftware = isset($_POST["tiposoftware"]) ? $_POST["tiposoftware"]: "";
    
	$nombreactividad = isset($_POST["nombreactividad"]) ? $_POST["nombreactividad"]: "";
	
	$motivosnor = isset($_POST["motivosnor"]) ? $_POST["motivosnor"]: "";
	
	$satisfaccionuaem = isset($_POST["satisfaccionuaem"]) ? $_POST["satisfaccionuaem"]: "";
	 
	$motivosnotrabajo = isset($_POST["motivosnotrabajo"]) ? $_POST["motivosnotrabajo"]: "";
	
	$satisfaccionuaem2 = isset($_POST["satisfaccionuaem2"]) ? $_POST["satisfaccionuaem2"]: "";
	



$guardar = $conexion->prepare("INSERT INTO encuesta3 VALUES(:idenc,:idegresado,:arraigado,:trabajas,:tiempoempleo,:relacionempleo,:nombreemp,:direccionemp,:telefonoemp,:pagwebemp,:sectoremp,:ramoemp,:giroemp,:areapertenece,:tipopuesto,:tiempodos,:antiguedadpuesto,:rangosueldo,:sueldopercibes,:tresfunciones,:metodosemp,:equipoemp,:herramientasemp,:utilizassoft,:tiposoftware,:nombreactividad,:motivosnor,:satisfaccionuaem,:motivosnotrabajo,:satisfaccionuaem2)");

$guardar->bindParam(':idenc',$idenc);
$guardar->bindParam(':idegresado',$idegresado);
$guardar->bindParam(':arraigado',$arraigado);
$guardar->bindParam(':trabajas',$trabajas);
$guardar->bindParam(':tiempoempleo',$tiempoempleo);
$guardar->bindParam(':relacionempleo',$relacionempleo);
$guardar->bindParam(':nombreemp',$nombreemp);
$guardar->bindParam('direccionemp',$direccionemp);
$guardar->bindParam(':telefonoemp',$telefonoemp);
$guardar->bindParam(':pagwebemp',$pagwebemp);
$guardar->bindParam(':sectoremp',$sectoremp);
$guardar->bindParam(':ramoemp',$ramoemp);
$guardar->bindParam(':giroemp',$giroemp);
$guardar->bindParam(':areapertenece',$areapertenece);
$guardar->bindParam(':tipopuesto',$tipopuesto);
$guardar->bindParam(':tiempodos',$tiempodos);
$guardar->bindParam(':antiguedadpuesto',$antiguedadpuesto);
$guardar->bindParam(':rangosueldo',$rangosueldo);
$guardar->bindParam(':sueldopercibes',$sueldopercibes);
$guardar->bindParam(':tresfunciones',$tresfunciones);
$guardar->bindParam(':metodosemp',$metodosemp);
$guardar->bindParam(':equipoemp',$equipoemp);
$guardar->bindParam(':herramientasemp',$herramientasemp);
$guardar->bindParam(':utilizassoft',$utilizassoft);
$guardar->bindParam(':tiposoftware',$tiposoftware);
$guardar->bindParam(':nombreactividad',$nombreactividad);
$guardar->bindParam(':motivosnor',$motivosnor);
$guardar->bindParam(':satisfaccionuaem',$satisfaccionuaem);
$guardar->bindParam(':motivosnotrabajo',$motivosnotrabajo);
$guardar->bindParam(':satisfaccionuaem2',$satisfaccionuaem2);
$guardar->execute();

if($guardar == true){
	echo '<script>
		
		window.location = "plantillaegresado.php?ruta=encuesta4"

	</script>';
}

 