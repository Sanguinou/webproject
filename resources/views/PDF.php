<?php 
session_start();
require('./FPDF/fpdf.php'); 

class myPDF extends FPDF{
    function header(){
        $this->Image('./FPDF/tutorial/logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5, $_SESSION['RegUsers'][0]->event_name." - ".$_SESSION['RegUsers'][0]->event_date." - ".$_SESSION['RegUsers'][0]->event_location,0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

    }
    function headerTable(){
        $this->setFont('Times','B',12);
        $this->setX(70);
        $this->Cell(40,10,'Nom',1,0,'C');
        $this->Cell(40,10,'Prénom',1,0,'C');
        $this->Cell(70,10,'email',1,0,'C');
        $this->Ln();
    }
    function viewTable(){
        $this->setFont('Times','',12);
        if(isset($_SESSION['RegUsers'])){
            foreach($_SESSION['RegUsers'] as $users){
                $this->setX(70);
                $this->Cell(40,10,$users->last_name,1,0,'L');
                $this->Cell(40,10,$users->first_name,1,0,'L');
                $this->Cell(70,10,$users->email,1,0,'L');
                $this->Ln();
            }
        }

    }

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable();
$pdf->Output('I');
unset($_SESSION['RegUsers']);
exit;

?>