<?php 
require("pdf/fpdf.php");

class myPDF extends FPDF{
	function parent1(){
		$conn = new PDO("mysql:host=localhost:3307;dbname=tuition","root","");
		$result_payment=$conn->query("select * from payment where payment_id ='".$_GET['payment_id']."'");
		$result_parent=$conn->query("select * from parent where parent_id ='".$_GET['parent_id']."'");
		$row_parent=$result_parent->fetch(PDO::FETCH_OBJ);
		$row_payment=$result_payment->fetch(PDO::FETCH_OBJ);
		$this->SetFont('Times','B',16);
		$this->Cell(110,10,'SMART TUITION CENTRE',0,0,'L');
		$this->Cell(78,10,'Invoice',0,0,'R');
		$this->Ln();
		$this->SetFont('Times','',10);
		$this->Cell(110,5,'NO.17,JALAN D2,TAMAN DAHLIA BUKIT BERUANG,MELAKA 75450 MY',0,0,'L');
		$this->Cell(78,5,'Invoice No: '.$row_payment->payment_id,0,0,'R');
		$this->Ln();
		$this->Cell(200,5,'Tel: +0617-3202673',0,0,'L');
		$this->Cell(78,5,'Date : '.$row_payment->payment_date,0,0,'R');
		$this->Ln(15);
		$this->SetFont('Times','',14);
		$this->Cell(78,5,'Parent Name : '.$row_parent->parent_name,0,0,'L');
		$this->Ln(10);
	}
	function student($pdf){
		$total_fee=0;
		$conn = new PDO("mysql:host=localhost:3307;dbname=tuition","root","");
		$result_receipt_payment=$conn->query("select * from payment_receipt where payment_id='".$_GET['payment_id']."' and payment_parent='".$_GET['parent_id']."'");
		$i=1;	
		$this->SetFillColor(154,154,154);
		$this->Cell(20,10,'No. ',1,0,'C',True);
		$this->Cell(120,10,'Student Name ',1,0,'C',True);
		$this->Cell(50,10,'Paid  (RM)',1,0,'C',True);
		$this->Ln();
		$i=1;
		while($row_receipt_payment=$result_receipt_payment->fetch(PDO::FETCH_OBJ)){
		$this->Cell(20,10,$i.".",1,0,'C');
		$total_subject_fee=$row_receipt_payment->payment_total;
		$this->Cell(120,10,$row_receipt_payment->payment_student,1,0,'C');
		$this->Cell(50,10,"RM".$total_subject_fee,1,0,'C');
		$this->Ln();
		$i++;
		$total_fee+=$total_subject_fee;
		}
		$this->SetFont('Times','B',14);
		$this->Cell(140,10,"Total Payment ",1,0,'R',true);
		$this->Cell(50,10,"RM".$total_fee,1,0,'C',true);
	}
}

$pdf=new myPDF('P','mm','A4');
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->parent1();
$pdf->student($pdf);
$pdf->Output();

?>
