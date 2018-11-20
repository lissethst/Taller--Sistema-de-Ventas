<?php
	
	include ("plantilla.php");
	$pdf = new PDF();
	$pdf ->AliasNbPages();
	$pdf ->AddPage();

	$pdf -> SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'FECHA',1,0,'C',1);
	$pdf->Cell(40,6,'CLIENTE',1,0,'C',1);
	$pdf->Cell(20,6,'TIPO COMPROBANTE',1,0,'C',1);
	$pdf->Cell(20,6,'NUM COMPROBANTE',1,0,'C',1);
	$pdf->Cell(40,6,'Total',1,1,'C',1);

	$pdf->SetFont('Arial','',10);

		foreach ($ventas as $vent){
		
		 	$pdf->Cell(40,6,$vent->fecha_hora,1,0,'C',1);
			$pdf->Cell(40,6,$vent->nombre,1,0,'C',1);
			$pdf->Cell(20,6,$vent->tipo_comprobante,1,0,'C',1);
			$pdf->Cell(20,6,$vent->num_comprobante,1,0,'C',1);
			$pdf->Cell(40,6,$vent->total,1,1,'C',1);	
	   	}

	$pdf->Output('D','reporteVentas.pdf');

	/*$headers=['Content-Type'=>'application/pdf'];
	return Response::make($pdf->Output('I','archivo.pdf'),200,$headers);
*/
?>