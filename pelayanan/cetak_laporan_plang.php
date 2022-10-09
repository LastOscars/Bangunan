<?php
ob_start(); 
require('../fpdf/fpdf.php');
// $db = new PDO('mysql:host=192.168.11.223;dbname=dinas','project','project123');
// $stmt = $db->query("select * from plang_imb where id_imb ='$s'");
// $data = $stmt->fetch(PDO::FETCH_OBJ);
class myPDF extends FPDF{
	// function header(){
	// 	$this->Image('../images/disduk.png',3,1,-1000);
	// 	$this->SetFont('Arial','B',24);
	// 	$this->Cell(0,2,'PEMERINTAH KABUPATEN BATANG',0,0,'C');
	// 	$this->SetFont('Arial','B',18);   
	// 	$this->Cell(-33,,'',0,0,'C');                      
	// }
	function headerTable(){
		$this->Ln(4.5);
		$this->SetFont('Arial','B',18);
		$this->Image('../images/btg.png',20,21,-400,'C');
		$this->Cell(50,50,'',1,0,'C');
		$this->Cell(225,50,'',1,0,'C');
		$this->Cell(-225,40,'PEMERINTAH KABUPATEN BATANG',0,0,'C');
		$this->SetFont('Arial','B',16);
		$this->Cell(225,60,'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU',0,0,'C');
		$this->Ln(50);
	}
	function bodyTable(){
		include "config.php";
		$s = $_GET['plang'];
		$dat = mysqli_query($koneksi,"select * from sertifikat where id_sertifikat = '$s' ");
		$as = mysqli_fetch_array($dat);
		$this->SetFont('Arial','B',13);
		$this->Cell(50,20,'  NO / TGL IMB',1,0,'L');
		$this->Cell(225,20,'  '.date('d-m-Y',strtotime($as['tanggal'])),1,0,'L');
		$this->Ln();
		$this->Cell(50,30,'  LOKASI',1,0,'L');
		$this->SetFont('Arial','B',13);
		$this->Cell(225,30,'  '.$as['lokasi_bangunan'],1,0,'L');
		$this->Ln();
		$this->Cell(50,15,'  JENIS KEGIATAN',1,0,'L');
		$this->SetFont('Arial','B',13);
		$this->Cell(225,15,'  '.$as['kegiatan'],1,0,'L');
		$this->Ln();
		$this->Cell(50,15,'  PENGGUNAAN',1,0,'L');
		$this->SetFont('Arial','B',13);
		$this->Cell(225,15,'  '.$as['penggunaan'],1,0,'L');
		$this->Ln();
		$this->Cell(50,15,'  JUMLAH LANTAI',1,0,'L');
		$this->SetFont('Arial','B',13);
		$this->Cell(225,15,'  '.$as['tingkat_bangunan'].' LANTAI',1,0,'L');
		$this->Ln();

		$x = $this->GetX();
		$this->Cell(50,30,'  RENCANA', 1,0, 'L');
		$x = $this->GetX();
		$this->Cell(225,15,'  ARSITEKTUR    :              -', 1,0);
		$this->Ln();
		$this->SetX($x);
		$this->Cell(225,15,'  NO. IPTB           :              -', 1,0);
	}
}
// // $pdf=new FPDF('L','cm','Legal');             
// $pdf->AddPage();
// $pdf->Image('../images/disduk.png',3,1,-1000);                         
// $pdf->SetFont('Arial','B',24);                         
// $pdf->Cell(0,2,'PEMERINTAH KABUPATEN BATANG',0,0,'C');
// $pdf->SetFont('Arial','B',18);                         
// $pdf->Cell(-33,4,'DINAS PENENEMAN MODAL DAN PELAYANAN TERPADU SATU PINTU',0,0,'C');
// $pdf->Line(1,3.1,20.5,3.1);            
// $pdf->SetLineWidth(0.1);             
// $pdf->Line(1,3.2,20.5,3.2);                         
// $pdf->SetLineWidth(0);             
// $pdf->Ln();
// $pdf->Output();
$pdf =  new myPDF();
$pdf->AddPage('L','A4',0);
$pdf->SetFillColor(210,221,242);
$pdf->headerTable();
$pdf->bodyTable();
$pdf->Output();
ob_end_flush(); 
?>