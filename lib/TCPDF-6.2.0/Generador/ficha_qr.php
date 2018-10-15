<?php
include_once('tcpdf_include.php');

$nombre = $_GET['nombre'];
$a_paterno = $_GET['a_paterno'];
$a_materno = $_GET['a_materno'];
$grupo = $_GET['grupo'];
$evento =$_GET['evento'];

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAutor('EvenLink ENMSI');
$pdf->SetTitle('Ficha de Registro');

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$PDF->SetFont('times', '', 14);

$pdf->AddPage();

$html1 = '<h1 align="center">FICHA DE REGISTRO.</h1>
		<hr>
	<p align="left">
		<br>
	</p>
	
	<p align="justify">
		Estimado(a) <strong>'.$nombre.'</strong> deberas presentar esta hoja impresa 
		para poder acreditar tu registro y participacion el evento. 
	</p>
	<p align="right"></p>';

$htmltab1 = '<table border="2" CELLPADING="5" CELLSPACING="0" >
			
			<tr align="justify">
				<td class="active" align="justify">
					<table  CELLPADING="10">
						<tr>
							<td COLSPAN="2"><strong></strong></td>
							<td COLSPAN="4"></td>
						</tr>
						<tr align="center">
							<td COLSPAN="2"><strong>Nombre:</strong></td>
							<td COLSPAN="4">'.$nombre.'</td>
						</tr>
						<tr align="center">
							<td COLSPAN="2"><strong>Apellidos:</strong></td>
							<td COLSPAN="4">'.$a_paterno.'</td>
							<td COLSPAN="4">'.$a_materno.'</td>
						</tr>
					</table>
				</td>
				<td class="active" align="center">
					<br>
					<img src="../../../qrparticipantes/'.$nombre.$a_paterno.$a_materno.'.png"/>
				</td>
			</tr>
			';

$htmltab2 = '</table>';

$html3 = '<hr>
		<div align="center">
		</div>
		';

$html = $html1.'<br />'.$htmltab1.$htmltab2.'<br />'.$html3;


$pdf->writeHTML($hmtl,true,false,true,false,'');

$NombreArchivo="FichaAcreditacion".$nombre.$a_paterno.$a_materno.$grupo.".pdf";

$pdf->OutPut($NombreArchivo, 'I');
?>
