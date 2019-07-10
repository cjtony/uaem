<?php
require '../../config/Conexion.php';

class Escritorio{

	//funcion para contar el numero de egresados registrado en el sistema
	public function num_egresados()
	{
		$sql = "SELECT COUNT(*) FROM egresado";
		return ejecutarConsulta($sql);
	}

	//funcion para contar el numero de empresas registrado en el sistema
	public function num_empresas()
	{
		$sql = "SELECT COUNT(*) FROM empresas";
		return ejecutarConsulta($sql);
	}

	//funcion para contar el numero de administradores registrado en el sistema
	public function num_admins()
	{
		$sql = "SELECT COUNT(*) FROM admin";
		return ejecutarConsulta($sql);
	}

	//funcion para contar el numero de egresados registrado en el sistema
	public function listarEgresados(){

		$sql = "SELECT e.idegresado,l.nombre as licenciatura,e.cuenta,e.nombre,e.apepat,e.apemat,e.ingreso,e.egreso
				FROM egresado e 
				INNER JOIN licenciatura l ON e.idlic = l.idlic";
		return ejecutarConsulta($sql);
		
	}
	public function listarEmpresas()
	{
		$sql = "SELECT a.idempresa,a.nombreemp,a.telefonoemp,a.pagemp,concat(a.colonia,', ',c.nombre,', ',b.nombre) as           direccion,a.correo
				FROM empresas a
				INNER JOIN estados b ON b.id = a.idestado
				INNER JOIN municipios c ON c.id = a.idmunicipio";
		return ejecutarConsulta($sql);
	}
	public function listarAdmins()
	{
		$sql = "SELECT concat(a.nombre,' ',a.apepat,' ',a.apemat) as nombre, telefono, correo FROM admin a";
		return ejecutarConsulta($sql);
	}

	//funcion para contar los alumnos que han contestado la encuesta de la carrera de derecho
	public function egresadoDerecho()
	{
		$sql = "SELECT count(*) as derecho
				FROM egresado a 
				INNER JOIN encuesta2 b ON a.idegresado=b.idegresado
				INNER JOIN encuesta5 c ON a.idegresado=c.idegresado
				INNER JOIN encuesta8 d ON a.idegresado=d.idegresado WHERE a.idlic=1";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function totalEgresadoDerecho()
	{
		$sql = "SELECT count(*) as totalderecho FROM egresado WHERE idlic=1";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para contar los alumnos que han contestado la encuesta de la carrera de informatica
	public function egresadoInformatica()
	{
		$sql = "SELECT count(*) as informatica
				FROM egresado a 
				INNER JOIN encuesta2 b ON a.idegresado=b.idegresado
				INNER JOIN encuesta5 c ON a.idegresado=c.idegresado
				INNER JOIN encuesta8 d ON a.idegresado=d.idegresado WHERE a.idlic=2";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function totalEgresadoInformatica()
	{
		$sql = "SELECT count(*) as total FROM egresado WHERE idlic=2";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para contar los alumnos que han contestado la encuesta de la carrera de contaduria
	public function egresadoContaduria()
	{
		$sql = "SELECT count(*) as contaduria
				FROM egresado a 
				INNER JOIN encuesta2 b ON a.idegresado=b.idegresado
				INNER JOIN encuesta5 c ON a.idegresado=c.idegresado
				INNER JOIN encuesta8 d ON a.idegresado=d.idegresado WHERE a.idlic=4";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function totalEgresadoContaduria()
	{
		$sql = "SELECT count(*) as total FROM egresado WHERE idlic=4";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para contar los alumnos que han contestado la encuesta de la carrera de agronomia
	public function egresadoAgronomia()
	{
		$sql = "SELECT count(*) as agronomia
				FROM egresado a 
				INNER JOIN encuesta2 b ON a.idegresado=b.idegresado
				INNER JOIN encuesta5 c ON a.idegresado=c.idegresado
				INNER JOIN encuesta8 d ON a.idegresado=d.idegresado WHERE a.idlic=6";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function totalEgresadoAgronomia()
	{
		$sql = "SELECT count(*) as total FROM egresado WHERE idlic=6";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para contar los alumnos que han contestado la encuesta de la carrera de turismo
	public function egresadoTurismo()
	{
		$sql = "SELECT count(*) as turismo
				FROM egresado a 
				INNER JOIN encuesta2 b ON a.idegresado=b.idegresado
				INNER JOIN encuesta5 c ON a.idegresado=c.idegresado
				INNER JOIN encuesta8 d ON a.idegresado=d.idegresado WHERE a.idlic=7";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function totalEgresadoTurismo()
	{
		$sql = "SELECT count(*) as total FROM egresado WHERE idlic=7";
		return ejecutarConsultaSimpleFila($sql);
	}

}

?>