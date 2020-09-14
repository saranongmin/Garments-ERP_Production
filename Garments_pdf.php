<?php
$db = mysqli_connect('localhost','root','','production')
				or die('Error connecting to MySQL server.');

$show=mysqli_query($db,"SELECT * FROM garments_info");
require('fpdf.php');

class PDF extends FPDF
{

function Header()
{
    
    $this->Image('img/pdf.jpg',170,10,30);
    
    $this->SetFont('Arial','B',10);
    
    $this->Cell(80);
   
    $this->Cell(30,10,'Generating Report Pdf',0,0,'C');
   
    $this->Ln(20);
}


function Footer()
{
    
    $this->SetY(-15);
   
    $this->SetFont('Arial','I',8);
    
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(50,10,'Batch No',1,0,'C');
$pdf->Cell(60,10,' Taken Date from Fabric ',1,0,'C');
$pdf->Cell(60,10,'Prepared Date',1,0,'C');

  $pdf->Ln(10);		

while ($row=mysqli_fetch_array($show)) {
			$pdf->Cell(50,10,$row['batch_no'],1,0,'C');
            $pdf->Cell(60,10,$row['taken_date_fabric'],1,0,'C');	
			$pdf->Cell(60,10,$row['prepared_Date'],1,0,'C');
           

  $pdf->Ln(10);		
}

$pdf->Output();
?>