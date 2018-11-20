<?php
	
	include ("plantilla.php");
	$pdf = new PDF();
	$pdf ->AliasNbPages();
	$pdf ->AddPage();

	$pdf -> SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'Codigo',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(40,6,'Stock',1,0,'C',1);
	$pdf->Cell(40,6,utf8_decode('Descripción'),1,1,'C',1);

	$pdf->SetFont('Arial','',10);

		foreach ($articulos as $art){
		
		 	$pdf->Cell(40,6,$art->codigo,1,0,'C',1);
			$pdf->Cell(40,6,$art->nombre,1,0,'C',1);
			$pdf->Cell(40,6,$art->stock,1,0,'C',1);
			$pdf->Cell(40,6,utf8_decode($art->descripcion),1,1,'C',1);	
	   	}

	$pdf->Output('D','reporteArticulos.pdf');

	/*$headers=['Content-Type'=>'application/pdf'];
	return Response::make($pdf->Output('I','archivo.pdf'),200,$headers);
*/
?>