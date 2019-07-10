<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$turismo=$_POST["turismo"];
$Diseno =$_POST["Diseno"];
$competitiva  =$_POST["competitiva"];
$productos =$_POST["productos"];
$patrimonio =$_POST["patrimonio"];
$Desarrollo =$_POST["Desarrollo"];
$temas =$_POST["temas"];
$evaluacion =$_POST["evaluacion"];
$sustentable =$_POST["sustentable"];
$procedimientos=$_POST["procedimientos"];
$pregn1 =$_POST["pregn1"];
$resp2 =$_POST["resp2"];
$pregun2 =$_POST["pregun2"];
$habilidades2 =$_POST["habilidades2"];
$caracteristicas2 =$_POST["caracteristicas2"];
$factores2=$_POST["factores2"];
$estudios2 =$_POST["estudios2"];
$uso2 =$_POST["uso2"];
$permiten =$_POST["permiten"];
$planes =$_POST["planes"];
$organizaciones =$_POST["organizaciones"];
$estrategias  =$_POST["estrategias"];
$competitivas =$_POST["competitivas"];
$comportamiento =$_POST["comportamiento"];
$nuevos =$_POST["nuevos"];
$servicios =$_POST["servicios"];
$tendientes =$_POST["tendientes"];
$innovadores =$_POST["innovadores"];
$marco=$_POST["marco"];
$catalogar =$_POST["catalogar"];
$diversas =$_POST["diversas"];
$valorizacion =$_POST["valorizacion"];
$Capacidad =$_POST["Capacidad"];
$aprovechamiento =$_POST["aprovechamiento"];
$difundir =$_POST["difundir"];
$manejo =$_POST["manejo"];


$Statement=$conexion->prepare("INSERT  INTO turismodos(idenc,idegresado,turismo,Diseno,competitiva,productos,patrimonio,Desarrollo,temas,evaluacion,sustentable,procedimientos,pregn1,resp2,pregun2,habilidades2,caracteristicas2,factores2,estudios2,uso2,permiten,planes,organizaciones,estrategias,competitivas,comportamiento,nuevos,servicios,tendientes,innovadores,marco,catalogar,diversas,valorizacion,Capacidad,aprovechamiento,difundir,manejo) values(:idenc,:idegresado,:turismo,:Diseno,:competitiva,:productos,:patrimonio,:Desarrollo,:temas,:evaluacion,:sustentable,:procedimientos,:pregn1,:resp2,:pregun2,:habilidades2,:caracteristicas2,:factores2,:estudios2,:uso2,:permiten,:planes,:organizaciones,:estrategias,:competitivas,:comportamiento,:nuevos,:servicios,:tendientes,:innovadores,:marco,:catalogar,:diversas,:valorizacion,:Capacidad,:aprovechamiento,:difundir,:manejo)");

$Statement->bindParam(':idenc',$idenc);
$Statement->bindParam(':idegresado',$idegresado);
$Statement->bindParam(':turismo',$turismo);
$Statement->bindParam(':Diseno',$Diseno);
$Statement->bindParam(':competitiva',$competitiva);
$Statement->bindParam(':productos',$productos);
$Statement->bindParam(':patrimonio',$patrimonio);
$Statement->bindParam(':Desarrollo',$Desarrollo);
$Statement->bindParam(':temas',$temas);
$Statement->bindParam(':evaluacion',$evaluacion);
$Statement->bindParam(':sustentable',$sustentable);
$Statement->bindParam(':procedimientos',$procedimientos);
$Statement->bindParam(':pregn1',$pregn1);
$Statement->bindParam(':resp2',$resp2);
$Statement->bindParam(':pregun2',$pregun2);
$Statement->bindParam(':habilidades2',$habilidades2);
$Statement->bindParam(':caracteristicas2',$caracteristicas2);
$Statement->bindParam(':factores2',$factores2);
$Statement->bindParam(':estudios2',$estudios2);
$Statement->bindParam(':uso2',$uso2);
$Statement->bindParam(':permiten',$permiten);
$Statement->bindParam(':planes',$planes);
$Statement->bindParam(':organizaciones',$organizaciones);
$Statement->bindParam(':estrategias',$estrategias);
$Statement->bindParam(':competitivas',$competitivas);
$Statement->bindParam(':comportamiento',$comportamiento);
$Statement->bindParam(':nuevos',$nuevos);
$Statement->bindParam(':servicios',$servicios);
$Statement->bindParam(':tendientes',$tendientes);
$Statement->bindParam(':innovadores',$innovadores);
$Statement->bindParam(':marco',$marco);
$Statement->bindParam(':catalogar',$catalogar);
$Statement->bindParam(':diversas',$diversas);
$Statement->bindParam(':valorizacion',$valorizacion);
$Statement->bindParam(':Capacidad',$Capacidad);
$Statement->bindParam(':aprovechamiento',$aprovechamiento);
$Statement->bindParam(':difundir',$difundir);
$Statement->bindParam(':manejo',$manejo);
$Statement->execute();


if($Statement == true){
		echo '<script>

		window.location = "plantillaegresado.php?ruta=encuestas"

		</script>';
	}

?>