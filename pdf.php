<?php
if(
	isset($_POST['storename'])&&
	isset($_POST['oname'])&&
	isset($_POST['address']) &&
	isset($_POST['city'])&&
	isset($_POST['pin'])&&
	isset($_POST['state'])&&
	isset($_POST['quantity'])&&
	isset($_POST['price'])&&
	isset($_POST['tax'])&&
	isset($_POST['discount'])&&
	isset($_POST['total'])
	)
{
	if(
		!empty($_POST['storename'])&&
		!empty($_POST['oname'])&&
		!empty($_POST['address'])&&
		!empty($_POST['city'])&&
		!empty($_POST['pin'])&&
		!empty($_POST['state'])&&
		!empty($_POST['quantity'])&&
		!empty($_POST['price'])&&
		!empty($_POST['tax'])&&
		!empty($_POST['discount'])&&
		!empty($_POST['total'])
		)
	{
		require ('fpdf.php');
		$storename=$_POST['storename'];
		$oname=$_POST['oname'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$pin=$_POST['pin'];
		$state=$_POST['state'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$tax=$_POST['tax'];
		$discount=$_POST['discount'];
		$total=$_POST['total'];



		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Times','B','20');
		$pdf->SetTextColor(22, 95, 173);
		$pdf->Cell(190 ,6,$storename,0,1,'L');
		$pdf->Ln(7);

		$pdf->Line(8, 20, 202, 20);
		
		$pdf->Image('download.jpg',160,23 ,32);
		$pdf->SetFont('Times','',12.5);
		$pdf->SetTextColor(0);
		$pdf->Cell(190 ,6, 'Name: '.$oname.'' ,  0,1,'L');		

		$pdf->SetFont('Times','',12.5);
		$pdf->Cell(190 ,6, 'Address : '. $address.'' ,0,1,'L');

		$pdf->SetFont('Times','',12.5);
		$pdf->Cell(190 ,6, 'City : '. $city.'' ,0,1,'L');

		$pdf->SetFont('Times','',12.5);
		$pdf->Cell(190 ,6, 'Pin : '. $pin.'' ,0,1,'L');

		$pdf->SetFont('Times','',12.5);
		$pdf->Cell(190 ,6, 'State : '. $state.'' ,0,1,'L');
		$pdf->Ln(12);
		$pdf->Line(8, 59, 202, 59);

		$pdf->SetFont('Times','B',14);
		$pdf->SetFillColor(81, 152, 170);
			$pdf->SetTextColor(255, 255, 255);
		 $pdf->Cell(190 ,6,'Description',0,1,'L',true);
		 $pdf->Ln(6);

		 
		$pdf->SetTextColor(0); 
		 $pdf->SetFont('Times','B',12.5);
		 $pdf->Cell(40 ,8,'S.No',1,0,'C');
		 $pdf->Cell(90 ,8,'Type',1,0,'C');
		 $pdf->Cell(60 ,8,'Rate',1,0,'C');
		 $pdf->Ln(10);

		 $pdf->SetFont('Times','',12);
		  $pdf->Cell(40 ,8,'1',1,0,'C');
		 $pdf->Cell(90 ,8,'Qunatity',1,0,'C');
		 $pdf->Cell(60 ,8,$quantity,1,0,'C');
		 $pdf->Ln();

		 $pdf->Cell(40 ,8,'2',1,0,'C');
		 $pdf->Cell(90 ,8,'Price',1,0,'C');
		 $pdf->Cell(60 ,8,$price,1,0,'C');
		 $pdf->Ln();

		 $pdf->Cell(40 ,8,'3',1,0,'C');
		 $pdf->Cell(90 ,8,'Tax',1,0,'C');
		 $pdf->Cell(60 ,8,$tax,1,0,'C');
		 $pdf->Ln();

		 $pdf->Cell(40 ,8,'4',1,0,'C');
		 $pdf->Cell(90 ,8,'Discount',1,0,'C');
		 $pdf->Cell(60 ,8,$discount,1,0,'C');
		 $pdf->Ln(10);

		 $pdf->SetFont('Times','B',14);
		 $pdf->Cell(100 ,8,'Total Amount',0,0,'R');
		 $pdf->Cell(65,8,'Rs'.$total.'',0,0,'R');
		 $pdf->Ln(127);
		 $pdf->Line(8, 240, 202, 240);
		 $pdf->Cell(90 ,8,'Store Stamp :',0,1);
		 $pdf->Ln(12);

		 $pdf->SetFillColor(200,200,200);
		 $pdf->SetFont('Times','BI',28);
		 $pdf->SetTextColor(22, 95, 173);
		 $pdf->Cell(110 ,8,'Thank You',0,1,'R');
		$pdf->Output();

	}
	else
	{
		echo "Please fill all the field";
	
}

}

?> 