<?php
require '../conexion.php';

$idestado = $_POST['idestado'];
$qm = $conexion->prepare("SELECT * FROM municipios WHERE idestado = :idestado");
$qm->bindParam(':idestado', $idestado, PDO:: PARAM_INT);
$qm->execute();

foreach ($qm as $r2) {
 	echo $html = "<option value=".$r2[0].">".$r2[2]."</option>";
 }

?>