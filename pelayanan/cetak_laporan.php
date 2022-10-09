<?php

require('../fpdf/fpdf.php');
        $pdf=new FPDF('P','cm','A4');             
        $pdf->AddPage();                         
        $pdf->SetFont('Arial','B',12);                         
        $pdf->Image('../images/naker.jpg',1,1,2,2);                        
         $pdf->SetX(3);            
          $pdf->MultiCell(15,0.5,'Pemerintah Kabupaten Batang',0,'C');                         
          $pdf->SetX(3);            
           $pdf->MultiCell(15,0.5,'Izin Mendirikan Bangunan',0,'C');                      
            $pdf->SetFont('Arial','',10);            
              $pdf->SetX(3);             
              $pdf->MultiCell(15,0.5,'JL. Urip Sumoharjo No. 13, Sambongpos, Sambong, Kab.Batang Telpon : 0411400000',0,'C');                        
              // $pdf->SetX(3);             
              //$pdf->MultiCell(19.5,0.5,'website : www.imuh46.blogspot.com email : imuh46@gmail.com',0,'L');                         
              $pdf->Line(1,3.1,20.5,3.1);            
               $pdf->SetLineWidth(0.1);             
              $pdf->Line(1,3.2,20.5,3.2);                         
              $pdf->SetLineWidth(0);             
              $pdf->Ln();


$pdf->SetFont('Times','',12);
$pdf->Cell(1,1,'',0,1);
$pdf->SetX(5);           
$pdf->MultiCell(13,0.5,'BERDASARKAN PERATURAN DAERAH KABUPATEN BATANG TENTANG MENDIRIKAN BANGUNAN',0,'C');

include 'config.php';
$s = $_GET['p'];

$dat = mysqli_query($koneksi,"select*from sertifikat where id_sertifikat = '$s' ");
$as = mysqli_fetch_array($dat);

$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,1);
$pdf->SetX(2);           
$pdf->MultiCell(20,0.5,'Berikan Izin Mendirikan Bangunan Kepada : ',0,'L');

//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'No',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['id_sertifikat'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Nama',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['nama'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Alamat',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['alamat'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Lokasi Bangunan',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['lokasi_bangunan'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Kondisi Bangunan',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['kondisi_bangunan'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Tingkat Bangunan',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['tingkat_bangunan'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Ukuran Bangunan',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['ukuran_bangunan'],0,0,'L');
//
$pdf->Cell(0.5,0.5,'',0,1);
$pdf->SetX(2);  
$pdf->SetFont('Times','',11);
$pdf->Cell(4,1,'Diatas Tanah',0,0,'L');
$pdf->Cell(0.5,1,':',6,0,'L');
$pdf->Cell(1,1,$as['diatas_tanah'],0,0,'L');
//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,1);
$pdf->SetX(2);           
$pdf->MultiCell(18,0.5,'Demikian Izin Mendirikan Bangunan ini dibuat, mulai berlaku sejak tanggal ditetapkan dan diterbitkan untuk dilaksanakan sebaik-baiknya sesuai ketentuan peraturan perundang-undangan yang berlaku.',0,'L');
//
$pdf->Ln(3);
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,1);
$pdf->SetX(2);           
$pdf->MultiCell(14,0,'Dikeluarkan di : BATANG',0,'R');
//

$pdf->SetFont('Times','',11);
$pdf->Cell(12.9,1,'Pada Tanggal',0,0,'R');
$pdf->Cell(0.5,1,':',6,0,'R');
$pdf->Cell(2,1,' '.date('d-m-Y',strtotime ($as['tanggal'])),0,0,'R');
// $pdf->SetFont('Times','',11);
// $pdf->Cell(0.5,0.5,'',0,0.3);
// $pdf->SetX(2);           
// $pdf->MultiCell(14.9,0,'Pada Tanggal    : 24 Oktober 2020',0,'R');

//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,1);
$pdf->SetX(2);           
$pdf->MultiCell(14,0.5,'KEPALA',0,'R');
//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,0);
$pdf->SetX(2);           
$pdf->MultiCell(17.6,0.5,'BAGIAN PELAYANAN PERIZINAN TERPADU',0,'R');
//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,0);
$pdf->SetX(2);           
$pdf->MultiCell(15.5,0.5,'KABUPATEN BATANG',0,'R');
//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,0);
$pdf->SetX(2);           
$pdf->MultiCell(15.7,5,'SRI PURWANINGSIH, SH',0,'R');
//
$pdf->SetFont('Times','',11);
$pdf->Cell(0.5,1,'',0,0);
$pdf->SetX(2);           
$pdf->MultiCell(15.8,-4,'NIP. 19670330 199203 2 004',0,'R');
//$pdf->Cell(30,6,'Jenis Kelamin',1,0,'C');
//$pdf->Cell(30,6,'Tanggal Lahir',1,0,'C');
//$pdf->Cell(30,6,'Jurusan',1,0,'C');
//$pdf->Cell(20,6,'Umur',1,1,'C');

//$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
//$host="localhost";
//$user="root";
//$password="";
//$db="akademik";

//$kon = mysqli_connect($host,$user,$password,$db);

//$no=1;
//$jk='';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
//$hasil = mysqli_query($kon, "select * from mahasiswa order by nik asc");
//while ($data = mysqli_fetch_array($hasil)){
  //  if ($data['jk']==1){
    //    $jk='Lali-laki';
    //}else{
      //  $jk='Perempuan';
   // }
   // $pdf->Cell(8,6,$no,1,0);
  //  $pdf->Cell(20,6,$data['nik'],1,0);
  //  $pdf->Cell(50,6,$data['nama'],1,0);
   // $pdf->Cell(30,6,$jk,1,0);
   // $pdf->Cell(30,6,$data['tanggal_lhr'],1,0);
   // $pdf->Cell(30,6,$data['jurusan'],1,0);
   // $pdf->Cell(20,6,$data['umur'],1,1);
   // $no++;
//}

$pdf->Output();
?>