<?php
require_once('pdf/mpdf.php');

$html = '<div>
			<section style="overflow:hidden;width:100%;">
				<img src="../files/img/logotemas.png" width="90" height="70" style="float:left;margin-right:5px;">
				<div style="float:left;text-align:left;width:100%;border-bottom:2px double;color:#424242;">
					<p>
						<b style="font-size:14pt;">Universidad Autonoma del Estado de Mexico</b>
						<br>
						<small style="font-size:12pt;margin-top:10px;"><b>UAEM</b> | SSE</small> 
						<br>
						<small style="font-size:14pt;">Sistema de seguimiento de egresados</small>
					</p>
				</div>
			</section>
			
			<br>	

			<section style="text-align:center;">

				<h2 style="text-align:center;">"Comprobante de encuesta"</h2>

				<p style=font-size:12pt;>Nombre del o la egresada: <b>Gilberto Santiago Acevedo</b></p>
				<p style=font-size:12pt;>Numero de cuenta: <b>123212321</b></p>
				<p style=font-size:12pt;>Plan de estudios: <b>Informatica administractiva</b></p>
				<p style=font-size:12pt;>Fecha en que concluyo la encuesta: <b>23 de diciembre del 2018</b></p>

			</section>

			<section style="overflow:hidden;width:100%;margin-top:85%;">
				<img src="../files/img/temas.png" width="100" height="100" style="float:left;margin-right:5px;">
				<div style="float:left;text-align:left;width:100%;overflow:hidden;">
					<div style="float:left;text-align:left;width:45%;">
						<p>
						<b>Para mayor informacion</b>
						<br>
						rvmendozam@uaemex.com
						<br>
						(01726) 266 52 09
						</p>
					</div>

					<div style="float:left;text-align:left;width:55%;">
						<p>
						<b>Centro universitario UAEM Tesmacaltepec</b>
						<br>
						Página principal: <b>www.cutemascaltepec.mx</b>
					</div>
				</div>

			</section>
			
		</div>';

$mpdf = new mPDF('c', 'A4');
$mpdf->writeHTML($html);
$mpdf->Output('pdf.pdf', 'I');

?>