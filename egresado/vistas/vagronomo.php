<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$procesos =$_POST["procesos"];
$capacidad =$_POST["capacidad"];
$optimizar  =$_POST["optimizar"];
$analizar =$_POST["analizar"];
$elaboracion =$_POST["elaboracion"];
$desarrollo =$_POST["desarrollo"];
$conocimiento =$_POST["conocimiento"];
$estrutura =$_POST["estrutura"];
$leyes =$_POST["leyes"];
$rigen=$_POST["rigen"];
$sobre =$_POST["sobre"];
$sistemas =$_POST["sistemas"];
$diversos =$_POST["diversos"];
$grados =$_POST["grados"];
$creaticvo =$_POST["creaticvo"];
$evaluar=$_POST["evaluar"];
$indentificar =$_POST["indentificar"];
$nichos =$_POST["nichos"];
$mecanismos =$_POST["mecanismos"];
$campo =$_POST["campo"];
$seguridad =$_POST["seguridad"];
$equipo  =$_POST["equipo"];
$areas =$_POST["areas"];
$actuar =$_POST["actuar"];
$dentro =$_POST["dentro"];
$oral =$_POST["oral"];
$voluntad =$_POST["voluntad"];
$diciplina =$_POST["diciplina"];
$perseverancia=$_POST["perseverancia"];
$sistematico =$_POST["sistematico"];
$orden =$_POST["orden"];
$proativo =$_POST["proativo"];
$piensa =$_POST["piensa"];
$etica =$_POST["etica"];
$tolerancia =$_POST["tolerancia"];
$colabaracion =$_POST["colabaracion"];
$solidaridad =$_POST["solidaridad"];
$trabaj =$_POST["trabaj"];
$interes =$_POST["interes"];
$respecto =$_POST["respecto"];
$trabajo =$_POST["trabajo"];
$honestidad  =$_POST["honestidad"];
$honradez =$_POST["honradez"];
$puntualidad =$_POST["puntualidad"];
$lealtad =$_POST["lealtad"];
$canalizar =$_POST["canalizar"];
$camercializar =$_POST["camercializar"];
$ambito =$_POST["ambito"];
$gestionar =$_POST["gestionar"];
$calculos=$_POST["calculos"];
$mamaticas =$_POST["mamaticas"];
$fisico =$_POST["fisico"];
$metabolismo  =$_POST["metabolismo"];
$celulas =$_POST["celulas"];
$algebra =$_POST["algebra"];
$genetico =$_POST["genetico"];
$hormonales =$_POST["hormonales"];
$calores =$_POST["calores"];
$embriones =$_POST["embriones"];
$morbilidad=$_POST["morbilidad"];
$zootecnica =$_POST["zootecnica"];
$pecuaria =$_POST["pecuaria"];
$agropecuaria =$_POST["agropecuaria"];
$agroindrustrial =$_POST["agroindrustrial"];
$plantas =$_POST["plantas"];
$ambiental =$_POST["ambiental"];
$aniamales =$_POST["aniamales"];



$Statement=$conexion->prepare("INSERT  INTO agronomo(idenc,idegresado,procesos,capacidad,optimizar,analizar,elaboracion,desarrollo,conocimiento,estrutura,leyes,rigen,sobre,sistemas,diversos,grados,creaticvo,evaluar,indentificar,nichos,mecanismos,campo,seguridad,equipo,areas,actuar,dentro,oral,voluntad,diciplina,perseverancia,sistematico,orden,proativo,piensa,etica,tolerancia,colabaracion,solidaridad,trabaj,interes,respecto,trabajo,honestidad,honradez,puntualidad,lealtad,camercializar,canalizar,ambito,gestionar,calculos,mamaticas,fisico,metabolismo,celulas,algebra,genetico,hormonales,calores,embriones,morbilidad,zootecnica,pecuaria,agropecuaria,agroindrustrial,plantas,ambiental,aniamales) values(:idenc,:idegresado,:procesos,:capacidad,:optimizar,:analizar,:elaboracion,:desarrollo,:conocimiento,:estrutura,:leyes,:rigen,:sobre,:sistemas,:diversos,:grados,:creaticvo,:evaluar,:indentificar,:nichos,:mecanismos,:campo,:seguridad,:equipo,:areas,:actuar,:dentro,:oral,:voluntad,:diciplina,:perseverancia,:sistematico,:orden,:proativo,:piensa,:etica,:tolerancia,:colabaracion,:solidaridad,:trabaj,:interes,:respecto,:trabajo,:honestidad,:honradez,:puntualidad,:lealtad,:camercializar,:canalizar,:ambito,:gestionar,:calculos,:mamaticas,:fisico,:metabolismo,:celulas,:algebra,:genetico,:hormonales,:calores,:embriones,:morbilidad,:zootecnica,:pecuaria,:agropecuaria,:agroindrustrial,:plantas,:ambiental,:aniamales)");

$Statement->bindParam(':idenc',$idenc);
$Statement->bindParam(':idegresado',$idegresado);
$Statement->bindParam(':procesos',$procesos);
$Statement->bindParam(':capacidad',$capacidad);
$Statement->bindParam(':optimizar',$optimizar);
$Statement->bindParam(':analizar',$analizar);
$Statement->bindParam(':elaboracion',$elaboracion);
$Statement->bindParam(':desarrollo',$desarrollo);
$Statement->bindParam(':conocimiento',$conocimiento);
$Statement->bindParam(':estrutura',$estrutura);
$Statement->bindParam(':leyes',$leyes);
$Statement->bindParam(':rigen',$rigen);
$Statement->bindParam(':sobre',$sobre);
$Statement->bindParam(':sistemas',$sistemas);
$Statement->bindParam(':diversos',$diversos);
$Statement->bindParam(':grados',$grados);
$Statement->bindParam(':creaticvo',$creaticvo);
$Statement->bindParam(':evaluar',$evaluar);
$Statement->bindParam(':indentificar',$indentificar);
$Statement->bindParam(':nichos',$nichos);
$Statement->bindParam(':mecanismos',$mecanismos);
$Statement->bindParam(':campo',$campo);
$Statement->bindParam(':seguridad',$seguridad);
$Statement->bindParam(':equipo',$equipo);
$Statement->bindParam(':areas',$areas);
$Statement->bindParam(':actuar',$actuar);
$Statement->bindParam(':dentro',$dentro);
$Statement->bindParam(':oral',$oral);
$Statement->bindParam(':voluntad',$voluntad);
$Statement->bindParam(':diciplina',$diciplina);
$Statement->bindParam(':perseverancia',$perseverancia);
$Statement->bindParam(':sistematico',$sistematico);
$Statement->bindParam(':orden',$orden);
$Statement->bindParam(':proativo',$proativo);
$Statement->bindParam(':piensa',$piensa);
$Statement->bindParam(':etica',$etica);
$Statement->bindParam(':tolerancia',$tolerancia);
$Statement->bindParam(':colabaracion',$colabaracion);
$Statement->bindParam(':solidaridad',$solidaridad);
$Statement->bindParam(':trabaj',$trabaj);
$Statement->bindParam(':interes',$interes);
$Statement->bindParam(':respecto',$respecto);
$Statement->bindParam(':trabajo',$trabajo);
$Statement->bindParam(':honestidad',$honestidad);
$Statement->bindParam(':honradez',$honradez);
$Statement->bindParam(':puntualidad',$puntualidad);
$Statement->bindParam(':lealtad',$lealtad);
$Statement->bindParam(':canalizar',$canalizar);
$Statement->bindParam(':camercializar',$camercializar);
$Statement->bindParam(':ambito',$ambito);
$Statement->bindParam(':gestionar',$gestionar);
$Statement->bindParam(':calculos',$calculos);
$Statement->bindParam(':mamaticas',$mamaticas);
$Statement->bindParam(':fisico',$fisico);
$Statement->bindParam(':metabolismo',$metabolismo);
$Statement->bindParam(':celulas',$celulas);
$Statement->bindParam(':algebra',$algebra);
$Statement->bindParam(':genetico',$genetico);
$Statement->bindParam(':hormonales',$hormonales);
$Statement->bindParam(':calores',$calores);
$Statement->bindParam(':embriones',$embriones);
$Statement->bindParam(':morbilidad',$morbilidad);
$Statement->bindParam(':zootecnica',$zootecnica);
$Statement->bindParam(':pecuaria',$pecuaria);
$Statement->bindParam(':agropecuaria',$agropecuaria);
$Statement->bindParam(':agroindrustrial',$agroindrustrial);
$Statement->bindParam(':plantas',$plantas);
$Statement->bindParam(':ambiental',$ambiental);
$Statement->bindParam(':aniamales',$aniamales);
$Statement->execute();


if($Statement == 1){
		echo '<script>

			
window.location = "plantillaegresado.php?ruta=encuestas"

		</script>';
	}

?>
