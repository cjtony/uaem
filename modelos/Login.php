<?php
include "../config/Conexion.php";

class Login
{
	public function __construct()
	{

	}
	//funcion para consultar su existe un registro con los parametros insertados en la tabla cuentaegresado
	public function Login($correo, $password)
	{
		$sql = "SELECT * FROM cuentaegresado WHERE correo = '$correo' and password = '$password'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para consultar su existe un registro con los parametros insertados en la tabla empresas
	public function LoginEmpresa($correo,$password)
	{
		$sql = "SELECT * FROM empresas WHERE correo = '$correo' and password = '$password'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//funcion para consultar su existe un registro con los parametros insertados en la tabla admin
	public function LoginAdmin($correo,$password)
	{
		$sql= "SELECT * FROM admin WHERE correo='$correo' and password='$password'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function LoginEgresadoCuenta($correo,$password)
	{
		$sql = "SELECT ce.idegresado,ce.tipo,e.cuenta,e.nombre,e.apepat,e.apemat,ce.correo,ce.password
				from egresado e
				INNER join cuentaegresado ce on ce.idegresado=e.idegresado

				where ce.correo='$correo' and ce.password='$password'";

		return ejecutarConsultaSimpleFila($sql);		
	}
}
?>