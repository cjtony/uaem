<?php

require "conexion.php";

/*IGENERANDIO NUEVO ID DE LA TABLA DESEMPRESA*/
$nuevaidper = 1;

$consulta = $conexion->prepare("SELECT * FROM persona");

$consulta->execute();

foreach ($consulta as $con) {

	$idper = $con[0];

	$nuevaidper = $idper + 1;

}

/*CODIGO PARA MOSTRAR EL ID DE LA DIRECCION*/
$iddir = $conexion->prepare("SELECT MAX(iddir) FROM direccion");

$iddir->execute();

$iddireccion = $iddir->fetch();


/*MOSTRAR LOS TIPOS DE usuarios en registro persona*/
$tipousuario = $conexion->prepare("SELECT * FROM tipousuario");

$tipousuario->execute();
