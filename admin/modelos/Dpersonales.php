<?php
include "../../config/Conexion.php";

class Dpersonales
{
	public function __construct()
	{

	}

	//funcion para mostrar los datos personales del administrador
	public function MostrarDatosPersonales($idadmin)
	{
		$sql = "SELECT a.nombre,a.apepat,a.apemat,a.sexo,a.edad,a.telefono,a.idestado,					   b.nombre as estado,a.idmunicipio,c.nombre as municipio,a.colonia,a.calle,		   a.correo
				FROM admin a 
				INNER JOIN estados b ON a.idestado=b.id
				INNER JOIN municipios c ON a.idmunicipio=c.id
				WHERE a.idadmin = '$idadmin'";

		/*$sql = "SELECT * FROM admin";*/
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para actualizar la contraseña
	public function ActualizarPass($idadmin,$password)
	{
		$sql = "UPDATE admin SET password = '$password' WHERE idadmin='$idadmin'";
		return ejecutarConsulta($sql);
	}

	//funcion para mostrar los estados
	public function ListarEstados()
	{
		$sql = "SELECT * FROM estados";
		return ejecutarConsulta($sql);
	}

	//implementamos una funcion para mostrar los municipios del estado seleccionado
	public function mostrarMunicipios($idestado)
	{
		$sql = "SELECT * FROM municipios WHERE estado_id = '$idestado'";
		return ejecutarConsulta($sql);
	}
}

?>