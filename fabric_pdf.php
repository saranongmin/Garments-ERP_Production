<?php
$db = mysqli_connect('localhost','root','','production')
				or die('Error connecting to MySQL server.');

$show=mysqli_query($db,"SELECT * FROM fabric_info");
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/pdf.jpg',170,10,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Generating Report Pdf',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(50,10,'Batch No',1,0,'C');
$pdf->Cell(50,10,'Prepared Date',1,0,'C');
  $pdf->Ln(10);		

while ($row=mysqli_fetch_array($show)) {
			$pdf->Cell(50,10,$row['batch_no'],1,0,'C');
$pdf->Cell(50,10,$row['prepared_date'],1,0,'C');	
  $pdf->Ln(10);		
}

$pdf->Output();
?>

