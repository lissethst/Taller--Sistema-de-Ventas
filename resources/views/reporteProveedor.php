<?php
	
	include ("plantilla.php");
	$pdf = new PDF();
	$pdf ->AliasNbPages();
	$pdf ->AddPage();

	$pdf -> SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'NumDocumento',1,0,'C',1);
	$pdf->Cell(40,6,'Nombre',1,0,'C',1);
	$pdf->Cell(40,6,'Email',1,0,'C',1);
	$pdf->Cell(30,6,utf8_decode('Teléfono'),1,0,'C',1);
	$pdf->Cell(40,6,utf8_decode('Dirección'),1,1,'C',1);

	$pdf->SetFont('Arial','',10);

		foreach ($proveedores as $prov){
			$pdf->Cell(40,6,$prov->num_documento,1,0,'C',1);
			$pdf->Cell(40,6,$prov->nombre,1,0,'C',1);
			$pdf->Cell(40,6,$prov->email,1,0,'C',1);
			$pdf->Cell(30,6,utf8_decode($prov->telefono),1,0,'C',1);
			$pdf->Cell(40,6,utf8_decode($prov->direccion),1,1,'C',1);
	   	}

	$pdf->Output('D','reporteProveedores.pdf');

	/*$headers=['Content-Type'=>'application/pdf'];
	return Response::make($pdf->Output('I','archivo.pdf'),200,$headers);
*/
?>