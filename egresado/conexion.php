<?php
try{
	$conexion = new PDO('mysql:host=localhost;dbname=uaem2','root','');
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){

}
?>