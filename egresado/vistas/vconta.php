<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$habilidades =$_POST["habilidades"];
$efectiva  =$_POST["efectiva"];
$equipo =$_POST["equipo"];
$trabajar =$_POST["trabajar"];
$Capacidad =$_POST["Capacidad"];
$analisis =$_POST["analisis"];
$organizativa =$_POST["organizativa"];
$Facilidad=$_POST["Facilidad"];
$toma =$_POST["toma"];
$Razonamiento =$_POST["Razonamiento"];
$desarrollar =$_POST["desarrollar"];
$convencimiento =$_POST["convencimiento"];
$exactitud =$_POST["exactitud"];
$servicio =$_POST["servicio"];
$empatia =$_POST["empatia"];
$Disciplina =$_POST["Disciplina"];
$Orden =$_POST["Orden"];
$Propositivo =$_POST["Propositivo"];
$Objetividad  =$_POST["Objetividad"];
$Motivacion =$_POST["Motivacion"];
$Autodisciplina =$_POST["Autodisciplina"];
$reponsabilidad =$_POST["reponsabilidad"];
$Autosuficiencia =$_POST["Autosuficiencia"];
$Solidaridad =$_POST["Solidaridad"];
$Pulcritud =$_POST["Pulcritud"];
$respecto=$_POST["respecto"];
$honestidad =$_POST["honestidad"];
$responsanbilidad2 =$_POST["responsanbilidad2"];
$Igualdad =$_POST["Igualdad"];
$Compromiso =$_POST["Compromiso"];
$companerismo =$_POST["companerismo"];
$Confianza =$_POST["Confianza"];
$Tolerancia =$_POST["Tolerancia"];
$Cooperacion =$_POST["Cooperacion"];
$Convivencia =$_POST["Convivencia"];
$Pertinencia =$_POST["Pertinencia"];
$Solidaridad2 =$_POST["Solidaridad2"];
$Equidad =$_POST["Equidad"];
$Prudencia  =$_POST["Prudencia"];
$Justicia =$_POST["Justicia"];
$Discrecion =$_POST["Discrecion"];
$Obtener =$_POST["Obtener"];
$analizar =$_POST["analizar"];
$Verificar2 =$_POST["Verificar2"];
$Presentar =$_POST["Presentar"];
$Interpretar =$_POST["Interpretar"];
$Establecer=$_POST["Establecer"];
$Aplicar =$_POST["Aplicar"];
$Predeterminar =$_POST["Predeterminar"];
$controlar  =$_POST["controlar"];
$estrategias =$_POST["estrategias"];
$internacionales =$_POST["internacionales"];
$Orientar =$_POST["Orientar"];
$financiera =$_POST["financiera"];



    $Statement=$conexion->prepare("INSERT  INTO contaduria(idenc,idegresado,habilidades,efectiva,equipo,trabajar,Capacidad,analisis,organizativa,Facilidad,toma,Razonamiento,desarrollar,convencimiento,exactitud,servicio,empatia,Disciplina,Orden,Propositivo,Objetividad,Motivacion,Autodisciplina,reponsabilidad,Autosuficiencia,Solidaridad,Pulcritud,respecto,honestidad,responsanbilidad2,Igualdad,Compromiso,companerismo,Confianza,Tolerancia,Cooperacion,Convivencia,Pertinencia,Solidaridad2,Equidad,Prudencia,Justicia,Discrecion,Obtener,analizar,Verificar2,Presentar,Interpretar,Establecer,Aplicar,Predeterminar,controlar,estrategias,internacionales,Orientar,financiera) values(:idenc,:idegresado,:habilidades,:efectiva,:equipo,:trabajar,:Capacidad,:analisis,:organizativa,:Facilidad,:toma,:Razonamiento,:desarrollar,:convencimiento,:exactitud,:servicio,:empatia,:Disciplina,:Orden,:Propositivo,:Objetividad,:Motivacion,:Autodisciplina,:reponsabilidad,:Autosuficiencia,:Solidaridad,:Pulcritud,:respecto,:honestidad,:responsanbilidad2,:Igualdad,:Compromiso,:companerismo,:Confianza,:Tolerancia,:Cooperacion,:Convivencia,:Pertinencia,:Solidaridad2,:Equidad,:Prudencia,:Justicia,:Discrecion,:Obtener,:analizar,:Verificar2,:Presentar,:Interpretar,:Establecer,:Aplicar,:Predeterminar,:controlar,:estrategias,:internacionales,:Orientar,:financiera)");

$Statement->bindParam(':idenc',$idenc);
$Statement->bindParam(':idegresado',$idegresado);
$Statement->bindParam(':habilidades',$habilidades);
$Statement->bindParam(':efectiva',$efectiva);
$Statement->bindParam(':equipo',$equipo);
$Statement->bindParam(':trabajar',$trabajar);
$Statement->bindParam(':Capacidad',$Capacidad);
$Statement->bindParam(':analisis',$analisis);
$Statement->bindParam(':organizativa',$organizativa);
$Statement->bindParam(':Facilidad',$Facilidad);
$Statement->bindParam(':toma',$toma);
$Statement->bindParam(':Razonamiento',$Razonamiento);
$Statement->bindParam(':desarrollar',$desarrollar);
$Statement->bindParam(':convencimiento',$convencimiento);
$Statement->bindParam(':exactitud',$exactitud);
$Statement->bindParam(':servicio',$servicio);
$Statement->bindParam(':empatia',$empatia);
$Statement->bindParam(':Disciplina',$Disciplina);
$Statement->bindParam(':Orden',$Orden);
$Statement->bindParam(':Propositivo',$Propositivo);
$Statement->bindParam(':Objetividad',$Objetividad);
$Statement->bindParam(':Motivacion',$Motivacion);
$Statement->bindParam(':Autodisciplina',$Autodisciplina);
$Statement->bindParam(':reponsabilidad',$reponsabilidad);
$Statement->bindParam(':Autosuficiencia',$Autosuficiencia);
$Statement->bindParam(':Solidaridad',$Solidaridad);
$Statement->bindParam(':Pulcritud',$Pulcritud);
$Statement->bindParam(':respecto',$respecto);
$Statement->bindParam(':honestidad',$honestidad);
$Statement->bindParam(':responsanbilidad2',$responsanbilidad2);
$Statement->bindParam(':Igualdad',$Igualdad);
$Statement->bindParam(':Compromiso',$Compromiso);
$Statement->bindParam(':companerismo',$companerismo);
$Statement->bindParam(':Confianza',$Confianza);
$Statement->bindParam(':Tolerancia',$Tolerancia);
$Statement->bindParam(':Cooperacion',$Cooperacion);
$Statement->bindParam(':Convivencia',$Convivencia);
$Statement->bindParam(':Pertinencia',$Pertinencia);
$Statement->bindParam(':Solidaridad2',$Solidaridad2);
$Statement->bindParam(':Equidad',$Equidad);
$Statement->bindParam(':Prudencia',$Prudencia);
$Statement->bindParam(':Justicia',$Justicia);
$Statement->bindParam(':Discrecion',$Discrecion);
$Statement->bindParam(':Obtener',$Obtener);
$Statement->bindParam(':analizar',$analizar);
$Statement->bindParam(':Verificar2',$Verificar2);
$Statement->bindParam(':Presentar',$Presentar);
$Statement->bindParam(':Interpretar',$Interpretar);
$Statement->bindParam(':Establecer',$Establecer);
$Statement->bindParam(':Aplicar',$Aplicar);
$Statement->bindParam(':Predeterminar',$Predeterminar);
$Statement->bindParam(':controlar',$controlar);
$Statement->bindParam(':estrategias',$estrategias);
$Statement->bindParam(':internacionales',$internacionales);
$Statement->bindParam(':Orientar',$Orientar);
$Statement->bindParam(':financiera',$financiera);
$Statement->execute();


if($Statement == true){
		echo '<script>

		window.location = "plantillaegresado.php?ruta=encuestas"

		</script>';
	}

?>