<?php
include "../../../config/Conexion.php";

class DatosA
{
	public function __construct()
	{

	}

	public function MostrarDatosE($idegresado)
	{
		$sql = "SELECT a.idlic,b.nombre as licenciatura,a.cuenta,a.nombre,a.apepat,a.apemat,a.ingreso,a.egreso
				FROM egresado a 
				INNER JOIN licenciatura b ON a.idlic=b.idlic WHERE idegresado = '$idegresado'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function consultaLic()
	{
		$sql = "SELECT * FROM licenciatura";
		return ejecutarConsulta($sql);
		
	}
}

?>