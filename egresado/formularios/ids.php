<?php
include '../conexion.php';

///////////////////////////CODIGO NECESARIO PARA REGISTRAR UNA NUEVA EMPRESA PRINCIPALMENTE LOS IDS/////////////////////////////////////////
/*IGENERANDIO NUEVO ID DE LA TABLA DESEMPRESA*/
$iddesempresa = 1;
$consulta = $conexion->prepare("SELECT * FROM desempresa");
$consulta->execute();
foreach ($consulta as $con) {
	$idempresa = $con[0];
	$iddesempresa = $idempresa + 1;
}
/*CODIGO PARA MOSTRAR LOS ESTADOS REGISTRADOS EN LA BD CON SUS RESPECTIVOS MUNICIPIOS*/
$estados = $conexion->prepare('SELECT * FROM estados');
$estados->execute();
/*CODIGO PARA GENERAR EL NUEVO ID DE LA TABLA CONEMPRESA*/
$idconempresa = 1;
$consulta2 = $conexion->prepare("SELECT * FROM conempresa");
$consulta2->execute();
foreach ($consulta2 as $con2) {
	$idcontacto = $con2[0];
	$idconempresa = $idcontacto + 1;
}
/*CODIGO PARA VINCULAR EL ID DE LA DESEMPRESA CON LA DE CONEMPRESA*/
$consulta3 = $conexion->prepare("SELECT MAX(idemp) FROM desempresa");
$consulta3->execute();
$maxiddesempresa = $consulta3->fetch();





///////////////////////////CODIGO NECESARIO PARA REGISTRAR UN NUEVO USUARIO PRINCIPALMENTE LOS IDS/////////////////////////////////////////
/*CODIGO PAR GENERAR EL NUEVO ID DE DIRECCION*/
$nuevaiddir = 1;
$iddireccion = $conexion->prepare("SELECT * FROM direccion");
$iddireccion->execute();
foreach ($iddireccion as $row) {
		$id = $row[0];
		$nuevaiddir =  $id + 1;
}
/*CODIGO PARA GENERAR EL NUEVO ID DE PERSONA*/
$nuevaidper = 1;
$idpersona = $conexion->prepare("SELECT * FROM persona");
$idpersona->execute();
foreach ($idpersona as $row2) {
	$idp = $row2[0];
	$nuevaidper = $id + 1;
}
/*VINXULAR EL ID DE DIRECCION A LA TABLA DE PERSONA*/
$iddirper = $conexion->prepare("SELECT MAX(iddir) FROM direccion");
$iddirper->execute();
$idd = $iddirper->fetch();
/*MOSTRAR LOS TIPOS DE usuarios en registro persona*/
$tipousuario = $conexion->prepare("SELECT * FROM tipousuario");
$tipousuario->execute();


/*=========================
GENERANDO EL ID DE LA TABLA EMPRESAINSTITUCION
=========================*/
$idei = 0;
$idempins = $conexion->prepare("SELECT * FROM empresainstitucion");
$idempins->execute();

foreach ($idempins as $k) {
	$id = $k[0];
	$idei = $id + 1;
}



