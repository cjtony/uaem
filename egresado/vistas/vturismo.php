<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$efectiva =$_POST["efectiva"];
$Creatividad  =$_POST["Creatividad"];
$Toma =$_POST["Toma"];
$conflictos =$_POST["conflictos"];
$Operacion =$_POST["Operacion"];
$Manejo =$_POST["Manejo"];
$Identificar =$_POST["Identificar"];
$calificar =$_POST["calificar"];
$aprovechamiento=$_POST["aprovechamiento"];
$Evaluar =$_POST["Evaluar"];
$Interpretar =$_POST["Interpretar"];
$Tipificar =$_POST["Tipificar"];
$actividad =$_POST["actividad"];
$oportunidades =$_POST["oportunidades"];
$Generar =$_POST["Generar"];
$posibilidades =$_POST["posibilidades"];
$tendencias =$_POST["tendencias"];
$Proponer =$_POST["Proponer"];
$politicas =$_POST["politicas"];
$Definir  =$_POST["Definir"];
$Determinar =$_POST["Determinar"];
$Verificar =$_POST["Verificar"];
$Asignar =$_POST["Asignar"];
$segmento =$_POST["segmento"];
$Elaborar =$_POST["Elaborar"];
$mercado =$_POST["mercado"];
$Establecer=$_POST["Establecer"];
$programas =$_POST["programas"];
$Dominio =$_POST["Dominio"];
$Autonomia =$_POST["Autonomia"];
$Autoaprendizaje =$_POST["Autoaprendizaje"];
$Ciudadania =$_POST["Ciudadania"];
$cultura =$_POST["cultura"];
$equipo =$_POST["equipo"];
$Liderazgo =$_POST["Liderazgo"];
$Eficiencia =$_POST["Eficiencia"];
$Imagen =$_POST["Imagen"];
$Calidad =$_POST["Calidad"];
$cliente =$_POST["cliente"];
$Negociacion  =$_POST["Negociacion"];
$Compromiso =$_POST["Compromiso"];
$Integridad =$_POST["Integridad"];
$Etica =$_POST["Etica"];
$Respecto =$_POST["Respecto"];
$bien =$_POST["bien"];
$cuidado =$_POST["cuidado"];
$servicio =$_POST["servicio"];
$colaboracion=$_POST["colaboracion"];
$honestidad =$_POST["honestidad"];


$Statement=$conexion->prepare("INSERT  INTO turismo (idenc,idegresado,efectiva,Creatividad,Toma,conflictos,Operacion,Manejo,Identificar,calificar,aprovechamiento,Evaluar,Interpretar,Tipificar,actividad,oportunidades,Generar,posibilidades,tendencias,Proponer,politicas,Definir,Determinar,Verificar,Asignar,segmento,Elaborar,mercado,Establecer,programas,Dominio,Autonomia,Autoaprendizaje,Ciudadania,cultura,equipo,Liderazgo,Eficiencia,Imagen,Calidad,cliente,Negociacion,Compromiso,Integridad,Etica,bien,Respecto,cuidado,servicio,colaboracion,honestidad) values(:idenc,:idegresado,:efectiva,:Creatividad,:Toma,:conflictos,:Operacion,:Manejo,:Identificar,:calificar,:aprovechamiento,:Evaluar,:Interpretar,:Tipificar,:actividad,:oportunidades,:Generar,:posibilidades,:tendencias,:Proponer,:politicas,:Definir,:Determinar,:Verificar,:Asignar,:segmento,:Elaborar,:mercado,:Establecer,:programas,:Dominio,:Autonomia,:Autoaprendizaje,:Ciudadania,:cultura,:equipo,:Liderazgo,:Eficiencia,:Imagen,:Calidad,:cliente,:Negociacion,:Compromiso,:Integridad,:Etica,:Respecto,:bien,:cuidado,:servicio,:colaboracion,:honestidad)");

$row =$Statement->execute(array(':idenc'=>$idenc,
':idegresado'=>$idegresado,
':efectiva'=>$efectiva,
':Creatividad'=>$Creatividad,
':Toma'=>$Toma,
':conflictos'=>$conflictos,
':Operacion'=>$Operacion,
':Manejo'=>$Manejo,
':Identificar'=>$Identificar,
':calificar'=>$calificar,
':aprovechamiento'=>$aprovechamiento,
':Evaluar'=>$Evaluar,
':Interpretar'=>$Interpretar,
':Tipificar'=>$Tipificar,
':actividad'=>$actividad,
':oportunidades'=>$oportunidades,
':Generar'=>$Generar,
':posibilidades'=>$posibilidades,
':tendencias'=>$tendencias,
':Proponer'=>$Proponer,
':politicas'=>$politicas,
':Definir'=>$Definir,
':Determinar'=>$Determinar,
':Verificar'=>$Verificar,
':Asignar'=>$Asignar,
':segmento'=>$segmento,
':Elaborar'=>$Elaborar,
':mercado'=>$mercado,
':Establecer'=>$Establecer,
':programas'=>$programas,
':Dominio'=>$Dominio,
':Autonomia'=>$Autonomia,
':Autoaprendizaje'=>$Autoaprendizaje,
':Ciudadania'=>$Ciudadania,
':cultura'=>$cultura,
':equipo'=>$equipo,
':Liderazgo'=>$Liderazgo,
':Eficiencia'=>$Eficiencia,
':Imagen'=>$Imagen,
':Calidad'=>$Calidad,
':cliente'=>$cliente,
':Negociacion'=>$Negociacion,
':Compromiso'=>$Compromiso,
':Integridad'=>$Integridad,
':Etica'=>$Etica,
':Respecto'=>$Respecto,
':bien'=>$bien,
':cuidado'=>$cuidado,
':servicio'=>$servicio,
':colaboracion'=>$colaboracion,
':honestidad'=>$honestidad));

if($Statement == true){
		echo '<script>

			window.location = "plantillaegresado.php?ruta=encturismo2"

		</script>';
	}

?>
