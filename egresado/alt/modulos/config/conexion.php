 <?php

try{

	$conexion = new PDO('mysql:host=localhost;dbname=proyecto',
						'root',
						'');

	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

}

?>