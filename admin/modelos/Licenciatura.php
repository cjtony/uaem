<?php

//INCLUIMOS INICIALMENTE LA CONEXION A LA BASE DE DATOS
include '../../config/Conexion.php';

Class Licenciatura{

	//IMPLEMENTAMOS NUESTRO CONSTRUCTOR
	public function __construct(){

	}

	//IMPLEMENTAMOS UN METODO PARA INSERTAR REGISTROS
	public function insertar($nombre,$descripcion){

		$sql = "INSERT INTO licenciatura (nombre,descripcion,condicion)
				VALUES ('$nombre','$descripcion','1')";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA EDITAR REGISTROS
	public function editar($idlic,$nombre,$descripcion){

		$sql = "UPDATE licenciatura SET nombre='$nombre',descripcion='$descripcion'
				WHERE idlic='$idlic'";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA ELIMINIAR LA LICENCIATURA
	public function eliminar($idlic){

		$sql = "DELETE FROM licenciatura WHERE idlic='$idlic'";
		return ejecutarConsulta($sql);
	}

	//IMPLEMENTAMOS UN METODO PARA DESACTIVAR CATEGORIAS
	public function desactivar($idcategoria){

		$sql = "UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA ACTIVAR CATEGORIAS
	public function activar($idcategoria){

		$sql = "UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
		
	}

	//IMPLEMENTAMOS UN METODO PARA MOSTRAR LOS DATOS DE UN REGISTRO A MODIFICAR
	public function mostrar($idlic){

		$sql = "SELECT * FROM licenciatura WHERE idlic='$idlic'";
		return ejecutarConsultaSimpleFila($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA LISTAR LOS REGISTROS
	public function listar(){

		$sql = "SELECT * FROM licenciatura";
		return ejecutarConsulta($sql);

	}

	//IMPLEMENTAMOS UN METODO PARA LISTAR LAS LICENCIATURAS DISPONIBLES
	public function consultaLic()
	{
		$sql = "SELECT * FROM licenciatura";
		return ejecutarConsulta($sql);
		
	}

}

?>