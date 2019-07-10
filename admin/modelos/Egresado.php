<?php

//INCLUIMOS INICIALMENTE LA CONEXION A LA BASE DE DATOS
include '../../config/Conexion.php';

Class Egresado{

	//IMPLEMENTAMOS NUESTRO CONSTRUCTOR
	public function __construct(){

	}

	//IMPLEMENTAMOS UN METODO PARA INSERTAR REGISTROS
	public function insertar($licenciatura,$cuenta,$nombre,$apepat,$apemat,$ingreso,$egreso){

		$sql = "INSERT INTO egresado (idlic,cuenta,nombre,apepat,apemat,ingreso,egreso)
				VALUES ('$licenciatura','$cuenta','$nombre','$apepat','$apemat','$ingreso','$egreso')";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA EDITAR REGISTROS
	public function editar($idegresado,$licenciatura,$cuenta,$nombre,$apepat,$apemat,$ingreso,$egreso){

		$sql = "UPDATE egresado SET idlic='$licenciatura',cuenta='$cuenta',nombre='$nombre',apepat='$apepat'		,apemat='$apemat',ingreso='$ingreso',egreso='$egreso'
				WHERE idegresado='$idegresado'";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA ELIMINIAR LA LICENCIATURA
	public function eliminar($idegresado){

		$sql = "DELETE FROM egresado WHERE idegresado='$idegresado'";
		return ejecutarConsulta($sql);
	}

	//IMPLEMENTAMOS UN METODO PARA MOSTRAR LOS DATOS DE UN REGISTRO A MODIFICAR
	public function mostrar($idegresado){

		$sql = "SELECT * FROM egresado WHERE idegresado='$idegresado'";
		return ejecutarConsultaSimpleFila($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA LISTAR LOS REGISTROS
	public function listar(){

		$sql = "SELECT e.idegresado,l.nombre as licenciatura,e.cuenta,e.nombre,e.apepat,e.apemat,e.ingreso,e.egreso
				FROM egresado e 
				INNER JOIN licenciatura l ON e.idlic = l.idlic";
		return ejecutarConsulta($sql);

	}

}

?>