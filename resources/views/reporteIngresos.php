<?php
	
	include ("plantilla.php");
	$pdf = new PDF();
	$pdf ->AliasNbPages();
	$pdf ->AddPage();

	$pdf -> SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'Fecha',1,0,'C',1);
	$pdf->Cell(40,6,'Proveedor',1,0,'C',1);
	$pdf->Cell(40,6,'Impuesto',1,0,'C',1);
	$pdf->Cell(40,6,'Total',1,1,'C',1);

	$pdf->SetFont('Arial','',10);

		foreach ($ingresos as $ing){
		
		 	$pdf->Cell(40,6,$ing->fecha_hora,1,0,'C',1);
			$pdf->Cell(40,6,$ing->nombre,1,0,'C',1);
			$pdf->Cell(40,6,$ing->impuesto,1,0,'C',1);
			$pdf->Cell(40,6,$ing->total,1,1,'C',1);	
	   	}

	$pdf->Output('D','reporteIngresos.pdf');

	/*$headers=['Content-Type'=>'application/pdf'];
	return Response::make($pdf->Output('I','archivo.pdf'),200,$headers);
*/
?>