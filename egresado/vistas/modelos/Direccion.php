<?php
include "../../../config/Conexion.php";

class Direccion
{
	public function __construct()
	{

	}

	public function insertar($idegresado,$idestado,$idmunicipio,$colonia,$calle,$ninterior,$nexterior,$cp)
	{
		$sql = "INSERT INTO direccion(idegresado,idestado,idmunicipio,colonia,calle,ninterior,nexterior,cp) VALUES('$idegresado','$idestado','$idmunicipio','$colonia','$calle','$ninterior','$nexterior','$cp')";
		return ejecutarConsulta($sql);
	}

	public function editar($iddir,$idegresado,$idestado,$idmunicipio,$colonia,$calle,$ninterior,$nexterior,$cp)
	{
		$sql = "UPDATE direccion SET idegresado='$idegresado', idestado='$idestado',idmunicipio='$idmunicipio',colonia='$colonia',calle='$calle',ninterior='$ninterior', nexterior='$nexterior',cp='$cp' WHERE iddir='$iddir'";
		return ejecutarConsulta($sql);
	}
	public function ListarEstados()
	{
		$sql = "SELECT * FROM estados";
		return ejecutarConsulta($sql);
	}

	public function mostrarMunicipios($idestado)
	{
		$sql = "SELECT * FROM municipios WHERE estado_id = '$idestado'";
		return ejecutarConsulta($sql);
	}

	public function DatosDireccion($idegresado)
	{
		$sql = "SELECT * FROM direccion WHERE idegresado = '$idegresado'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function mostrarDireccion($idegresado)
	{
		$sql = "SELECT a.iddir,a.idegresado,a.idestado,a.idmunicipio,c.nombre,a.colonia,a.calle,a.ninterior,a.nexterior,a.cp
				FROM direccion a 
				INNER JOIN estados b ON b.id=a.idestado
				INNER JOIN municipios c ON c.id=a.idmunicipio WHERE a.idegresado = '$idegresado'";
		return ejecutarConsultaSimpleFila($sql);		
	}
}

?>