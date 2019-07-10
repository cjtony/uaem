<?php
require "../conexion.php";

$idenc = $_POST["idenc"];
$idegresado = $_POST["idegresado"];
$Analisis =$_POST["Analisis"];
$preguta1 =$_POST["preguta1"];
$Dialogo =$_POST["Dialogo"];
$sertpreg4=$_POST["sertpreg4"];
$Interrelacionarse =$_POST["Interrelacionarse"];
$Resolucion =$_POST["Resolucion"];
$Autocontrol =$_POST["Autocontrol"];
$Capacidad=$_POST["Capacidad"];
$Compromiso =$_POST["Compromiso"];
$Conciliador =$_POST["Conciliador"];
$diplomado =$_POST["diplomado"];
$Confianza =$_POST["Confianza"];
$Disciplina =$_POST["Disciplina"];
$trabajo =$_POST["trabajo"];
$Emprendedor =$_POST["Emprendedor"];
$Liderazgo =$_POST["Liderazgo"];
$Perseverancia =$_POST["Perseverancia"];
$objetivo =$_POST["objetivo"];
$Compromiso2 =$_POST["Compromiso2"];
$Diligencia  =$_POST["Diligencia"];
$Equidad =$_POST["Equidad"];
$Honestidad =$_POST["Honestidad"];
$Humanismo =$_POST["Humanismo"];
$Justicia =$_POST["Justicia"];
$Lealtad =$_POST["Lealtad"];
$Respeto =$_POST["Respeto"];
$Conocer=$_POST["Conocer"];
$Interpretar =$_POST["Interpretar"];
$Aplicar =$_POST["Aplicar"];
$argumentar =$_POST["argumentar"];
$sistematizar =$_POST["sistematizar"];
$manera =$_POST["manera"];
$diligente =$_POST["diligente"];
$comunicacion =$_POST["comunicacion"];




    $Statement=$conexion->prepare("INSERT  INTO derecho(idenc,idegresado,Analisis,preguta1,Dialogo,sertpreg4,Interrelacionarse,Resolucion,Autocontrol,Capacidad,Compromiso,Conciliador,diplomado,Confianza,Disciplina,trabajo,Emprendedor,Liderazgo,Perseverancia,objetivo,Compromiso2,Diligencia,Equidad,Honestidad,Humanismo,Justicia,Lealtad,Respeto,Conocer,Interpretar,Aplicar,argumentar,sistematizar,manera,diligente,comunicacion) values(:idenc,:idegresado,:Analisis,:preguta1,:Dialogo,:sertpreg4,:Interrelacionarse,:Resolucion,:Autocontrol,:Capacidad,:Compromiso,:Conciliador,:diplomado,:Confianza,:Disciplina,:trabajo,:Emprendedor,:Liderazgo,:Perseverancia,:objetivo,:Compromiso2,:Diligencia,:Equidad,:Honestidad,:Humanismo,:Justicia,:Lealtad,:Respeto,:Conocer,:Interpretar,:Aplicar,:argumentar,:sistematizar,:manera,:diligente,:comunicacion)");

$Statement->bindParam(':idenc',$idenc);
$Statement->bindParam(':idegresado',$idegresado);
$Statement->bindParam(':Analisis',$Analisis);
$Statement->bindParam(':preguta1',$preguta1);
$Statement->bindParam(':Dialogo',$Dialogo);
$Statement->bindParam(':sertpreg4',$sertpreg4);
$Statement->bindParam(':Interrelacionarse',$Interrelacionarse);
$Statement->bindParam(':Resolucion',$Resolucion);
$Statement->bindParam(':Autocontrol',$Autocontrol);
$Statement->bindParam(':Capacidad',$Capacidad);
$Statement->bindParam(':Compromiso',$Compromiso);
$Statement->bindParam(':Conciliador',$Conciliador);
$Statement->bindParam(':diplomado',$diplomado);
$Statement->bindParam(':Confianza',$Confianza);
$Statement->bindParam(':Disciplina',$Disciplina);
$Statement->bindParam(':trabajo',$trabajo);
$Statement->bindParam(':Emprendedor',$Emprendedor);
$Statement->bindParam(':Liderazgo',$Liderazgo);
$Statement->bindParam(':Perseverancia',$Perseverancia);
$Statement->bindParam(':objetivo',$objetivo);
$Statement->bindParam(':Compromiso2',$Compromiso2);
$Statement->bindParam(':Diligencia',$Diligencia);
$Statement->bindParam(':Equidad',$Equidad);
$Statement->bindParam(':Honestidad',$Honestidad);
$Statement->bindParam(':Humanismo',$Humanismo);
$Statement->bindParam(':Justicia',$Justicia);
$Statement->bindParam(':Lealtad',$Lealtad);
$Statement->bindParam(':Respeto',$Respeto);
$Statement->bindParam(':Conocer',$Conocer);
$Statement->bindParam(':Interpretar',$Interpretar);
$Statement->bindParam(':Aplicar',$Aplicar);
$Statement->bindParam(':argumentar',$argumentar);
$Statement->bindParam(':sistematizar',$sistematizar);
$Statement->bindParam(':manera',$manera);
$Statement->bindParam(':diligente',$diligente);
$Statement->bindParam(':comunicacion',$comunicacion);
$Statement->execute();

if($Statement == true){
		echo '<script>

		
window.location = "plantillaegresado.php?ruta=encuestas"


		</script>';
	}



?>