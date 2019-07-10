<?php

require "conexion.php";

/*IGENERANDIO NUEVO ID DE LA TABLA DESEMPRESA*/
$nuevaiddir = 1;

$consulta = $conexion->prepare("SELECT * FROM direccion");

$consulta->execute();

foreach ($consulta as $con) {

	$iddir = $con[0];

	$nuevaiddir = $iddir + 1;

}

/*CODIGO PARA MOSTRAR LOS ESTADOS REGISTRADOS EN LA BD CON SUS RESPECTIVOS MUNICIPIOS*/
$estados = $conexion->prepare('SELECT * FROM estados');

$estados->execute();

