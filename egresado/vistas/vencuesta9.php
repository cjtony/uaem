<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$analisis =$_POST["analisis"];
$solucion  =$_POST["solucion"];
$calculo =$_POST["calculo"];
$comunicacion =$_POST["comunicacion"];
$concentracion =$_POST["concentracion"];
$desarrollo =$_POST["desarrollo"];
$lectura =$_POST["lectura"];
$manejo =$_POST["manejo"];
$informacion=$_POST["informacion"];
$relacion =$_POST["relacion"];
$humanas =$_POST["humanas"];
$conflictos =$_POST["conflictos"];
$toma =$_POST["toma"];
$liderasgo =$_POST["liderasgo"];
$coordinacion =$_POST["coordinacion"];
$emprendedor =$_POST["emprendedor"];
$persuacion =$_POST["persuacion"];
$objetividad =$_POST["objetividad"];
$aceptacion =$_POST["aceptacion"];
$busqueda  =$_POST["busqueda"];
$constancia =$_POST["constancia"];
$cooperacion =$_POST["cooperacion"];
$profesionales =$_POST["profesionales"];
$escuchar =$_POST["escuchar"];
$equipo =$_POST["equipo"];
$emocional =$_POST["emocional"];
$honestidad=$_POST["honestidad"];
$tecnologias =$_POST["tecnologias"];
$interes =$_POST["interes"];
$persistencia =$_POST["persistencia"];
$respeto =$_POST["respeto"];
$responsabilidad2 =$_POST["responsabilidad2"];
$superacion =$_POST["superacion"];
$positivo =$_POST["positivo"];
$aprendizaje =$_POST["aprendizaje"];
$innovacion =$_POST["innovacion"];
$flexibilidad =$_POST["flexibilidad"];
$entropia =$_POST["entropia"];
$Prudencia =$_POST["Prudencia"];
$Tolerancia  =$_POST["Tolerancia"];
$Honestidad2 =$_POST["Honestidad2"];
$Espiritu =$_POST["Espiritu"];
$Respeto2 =$_POST["Respeto2"];
$escuchar2 =$_POST["escuchar2"];
$Empatia =$_POST["Empatia"];
$Equidad =$_POST["Equidad"];
$Justicia2 =$_POST["Justicia2"];
$Discrecion=$_POST["Discrecion"];
$Responsabilidad =$_POST["Responsabilidad"];
$planear =$_POST["planear"];
$diseno  =$_POST["diseno"];
$creacion =$_POST["creacion"];
$analista =$_POST["analista"];
$desarrollo2 =$_POST["desarrollo2"];
$generacion2 =$_POST["generacion2"];
$administrar =$_POST["administrar"];
$adsistemas =$_POST["adsistemas"];
$liderar=$_POST["liderar"];
$addepartamentos =$_POST["addepartamentos"];
$elaboracion =$_POST["elaboracion"];
$programas =$_POST["programas"];
$implementacion =$_POST["implementacion"];
$estrategias =$_POST["estrategias"];
$estudios =$_POST["estudios"];


$Statement=$conexion->prepare("INSERT  INTO encuesta8 (idenc,idegresado,analisis,solucion,calculo,comunicacion,concentracion,desarrollo,lectura,manejo,informacion,relacion,humanas,conflictos,toma,liderasgo,coordinacion,emprendedor,persuacion,objetividad,aceptacion,busqueda,constancia,cooperacion,profesionales,escuchar,equipo,emocional,honestidad,tecnologias,interes,persistencia,respeto,responsabilidad2,superacion,positivo,aprendizaje,innovacion,flexibilidad,entropia,Prudencia,Tolerancia,Honestidad2,Espiritu,Respeto2,Empatia,escuchar2,Equidad,Justicia2,Discrecion,Responsabilidad,planear,diseno,creacion,analista,desarrollo2,generacion2,administrar,adsistemas,liderar,addepartamentos,elaboracion,programas,implementacion,estrategias,estudios) values(:idenc,:idegresado,:analisis,:solucion,:calculo,:comunicacion,:concentracion,:desarrollo,:lectura,:manejo,:informacion,:relacion,:humanas,:conflictos,:toma,:liderasgo,:coordinacion,:emprendedor,:persuacion,:objetividad,:aceptacion,:busqueda,:constancia,:cooperacion,:profesionales,:escuchar,:equipo,:emocional,:honestidad,:tecnologias,:interes,:persistencia,:respeto,:responsabilidad2,:superacion,:positivo,:aprendizaje,:innovacion,:flexibilidad,:entropia,:Prudencia,:Tolerancia,:Honestidad2,:Espiritu,:Respeto2,:Empatia,:escuchar2,:Equidad,:Justicia2,:Discrecion,:Responsabilidad,:planear,:diseno,:creacion,:analista,:desarrollo2,:generacion2,:administrar,:adsistemas,:liderar,:addepartamentos,:elaboracion,:programas,:implementacion,:estrategias,:estudios)");

$Statement->bindParam(':idenc',$idenc);
$Statement->bindParam(':idegresado',$idegresado);
$Statement->bindParam(':analisis',$analisis);
$Statement->bindParam(':solucion',$solucion);
$Statement->bindParam(':calculo',$calculo);
$Statement->bindParam(':comunicacion',$comunicacion);
$Statement->bindParam(':concentracion',$concentracion);
$Statement->bindParam(':desarrollo',$desarrollo);
$Statement->bindParam(':lectura',$lectura);
$Statement->bindParam(':manejo',$manejo);
$Statement->bindParam(':informacion',$informacion);
$Statement->bindParam(':relacion',$relacion);
$Statement->bindParam(':humanas',$humanas);
$Statement->bindParam(':conflictos',$conflictos);
$Statement->bindParam(':toma',$toma);
$Statement->bindParam(':liderasgo',$liderasgo);
$Statement->bindParam(':coordinacion',$coordinacion);
$Statement->bindParam(':emprendedor',$emprendedor);
$Statement->bindParam(':persuacion',$persuacion);
$Statement->bindParam(':objetividad',$objetividad);
$Statement->bindParam(':aceptacion',$aceptacion);
$Statement->bindParam(':busqueda',$busqueda);
$Statement->bindParam(':constancia',$constancia);
$Statement->bindParam(':cooperacion',$cooperacion);
$Statement->bindParam(':profesionales',$profesionales);
$Statement->bindParam(':escuchar',$escuchar);
$Statement->bindParam(':equipo',$equipo);
$Statement->bindParam(':emocional',$emocional);
$Statement->bindParam(':honestidad',$honestidad);
$Statement->bindParam(':tecnologias',$tecnologias);
$Statement->bindParam(':interes',$interes);
$Statement->bindParam(':persistencia',$persistencia);
$Statement->bindParam(':respeto',$respeto);
$Statement->bindParam(':responsabilidad2',$responsabilidad2);
$Statement->bindParam(':superacion',$superacion);
$Statement->bindParam(':positivo',$positivo);
$Statement->bindParam(':aprendizaje',$aprendizaje);
$Statement->bindParam(':innovacion',$innovacion);
$Statement->bindParam(':flexibilidad',$flexibilidad);
$Statement->bindParam(':entropia',$entropia);
$Statement->bindParam(':Prudencia',$Prudencia);
$Statement->bindParam(':Tolerancia',$Tolerancia);
$Statement->bindParam(':Honestidad2',$Honestidad2);
$Statement->bindParam(':Espiritu',$Espiritu);
$Statement->bindParam(':Respeto2',$Respeto2);
$Statement->bindParam(':escuchar2',$escuchar2);
$Statement->bindParam(':Empatia',$Empatia);
$Statement->bindParam(':Equidad',$Equidad);
$Statement->bindParam(':Justicia2',$Justicia2);
$Statement->bindParam(':Discrecion',$Discrecion);
$Statement->bindParam(':Responsabilidad',$Responsabilidad);
$Statement->bindParam(':planear',$planear);
$Statement->bindParam(':diseno',$diseno);
$Statement->bindParam(':creacion',$creacion);
$Statement->bindParam(':analista',$analista);
$Statement->bindParam(':desarrollo2',$desarrollo2);
$Statement->bindParam(':generacion2',$generacion2);
$Statement->bindParam(':administrar',$administrar);
$Statement->bindParam(':adsistemas',$adsistemas);
$Statement->bindParam(':liderar',$liderar);
$Statement->bindParam(':addepartamentos',$addepartamentos);
$Statement->bindParam(':elaboracion',$elaboracion);
$Statement->bindParam(':programas',$programas);
$Statement->bindParam(':implementacion',$implementacion);
$Statement->bindParam(':estrategias',$estrategias);
$Statement->bindParam(':estudios',$estudios);
$Statement->execute();


if($Statement == true){
		echo '<script>

		window.location = "plantillaegresado.php?ruta=encuestas"

		</script>';
	}

?>

