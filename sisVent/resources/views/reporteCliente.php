<?php
	
	include ("plantilla.php");
	$pdf = new PDF();
	$pdf ->AliasNbPages();
	$pdf ->AddPage();

	$pdf -> SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(35,6,'NumDocumento',1,0,'C',1);
	$pdf->Cell(45,6,'Nombre',1,0,'C',1);
	$pdf->Cell(45,6,'Email',1,0,'C',1);
	$pdf->Cell(25,6,utf8_decode('Teléfono'),1,0,'C',1);
	$pdf->Cell(45,6,utf8_decode('Dirección'),1,1,'C',1);

	$pdf->SetFont('Arial','',10);

		foreach ($clientes as $clie){
			$pdf->Cell(35,6,$clie->num_documento,1,0,'C',1);
			$pdf->Cell(45,6,$clie->nombre,1,0,'C',1);
			$pdf->Cell(45,6,$clie->email,1,0,'C',1);
			$pdf->Cell(25,6,utf8_decode($clie->telefono),1,0,'C',1);
			$pdf->Cell(45,6,utf8_decode($clie->direccion),1,1,'C',1);
	   	}

	$pdf->Output('D','reporteClientes.pdf');

	/*$headers=['Content-Type'=>'application/pdf'];
	return Response::make($pdf->Output('I','archivo.pdf'),200,$headers);
*/
?>