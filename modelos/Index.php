<?php
include '../config/Conexion.php';

class Index{
	public function __construct()
	{

	}

	//Implementamos una funcion para listar los egresados registrados
	public function ListarEgresados()
	{
		$sql = "SELECT * FROM egresado";
		return ejecutarConsulta($sql);
	}

	//Implementamos una funcion para insertar la cuenta del egresado
	public function RegistrarEgresado($idegresado,$correo,$password){
		$sql = "INSERT INTO cuentaegresado(idegresado,correo,password) VALUES('$idegresado','$correo','$password')";
		return ejecutarConsulta($sql);
	}

	//implementamos una funcion para mostrar el nombre de acuerdo al numero de cuenta ingresado
	public function mostrarNombre($idegresado)
	{
		$sql = "SELECT * FROM egresado WHERE idegresado = '$idegresado'";
		return ejecutarConsulta($sql);
	}

	//Implementamos una funcion para listar los estados de Mexico
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

	//implementamos una funcion para registrar nuevas empresas
	public function RegistrarEmpresas($nombreemp,$telefonoemp,$pagemp,$idestado,$idmunicipio,$coloniaemp,$calleemp,$numintemp,$numextemp,$cpemp,$acreacionemp,$numempemp,$correoemp,$passwordemp)
	{
		$sql = "INSERT INTO empresas(nombreemp,telefonoemp,pagemp,idestado,idmunicipio,colonia,calle,numint,numext,cp,acreacion,empleados,correo,password) VALUES('$nombreemp','$telefonoemp','$pagemp','$idestado','$idmunicipio','$coloniaemp','$calleemp','$numintemp','$numextemp','$cpemp','$acreacionemp','$numempemp','$correoemp','$passwordemp')";
		return ejecutarConsulta($sql);
	}

	//Implementamos una funcion para comprar si existe un correo al que estan ingresando
	public function ConsultarCorreo($correoemp)
	{
		$sql = "SELECT * FROM empresas WHERE correo = '$correoemp'";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>