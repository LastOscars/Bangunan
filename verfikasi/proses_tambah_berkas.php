	<?php 
	include 'config.php';
	if(isset($_POST['simpan'])){
		
		
		$no_register = mysqli_real_escape_string($koneksi, $_POST['no_register']);
		$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
		$nama_pemohon = mysqli_real_escape_string($koneksi, $_POST['nama_pemohon']);
		$alamat_pemohon = mysqli_real_escape_string($koneksi, $_POST['alamat_pemohon']);
		$desa_pemohon = mysqli_real_escape_string($koneksi, $_POST['desa_pemohon']);
		$kecamatan_pemohon = mysqli_real_escape_string($koneksi, $_POST['kecamatan_pemohon']);
		$kabupaten_pemohon = mysqli_real_escape_string($koneksi, $_POST['kabupaten_pemohon']);
		$wilayah = mysqli_real_escape_string($koneksi, $_POST['wilayah']);
		$jalan = mysqli_real_escape_string($koneksi, $_POST['jalan']);
		$desa = mysqli_real_escape_string($koneksi, $_POST['desa']);
		$status_tanah = mysqli_real_escape_string($koneksi, $_POST['status_tanah']);
		$izin = mysqli_real_escape_string($koneksi, $_POST['izin']);
		$nama_perwakilan = mysqli_real_escape_string($koneksi, $_POST['nama_perwakilan']);
		$alamat_perwakilan = mysqli_real_escape_string($koneksi, $_POST['alamat_perwakilan']);
		$telepon_perwakilan = mysqli_real_escape_string($koneksi, $_POST['telepon_perwakilan']);
		$jabatan_perwakilan = mysqli_real_escape_string($koneksi, $_POST['jabatan_perwakilan']);
		$surat_kuasa = mysqli_real_escape_string($koneksi, $_POST['surat_kuasa']);
		$status = "sekretariat";

		$FC_KTP = $_FILES['FC_KTP']['name'];
		$tmp = $_FILES['FC_KTP']['tmp_name'];
		$FC_APP = $_FILES['FC_APP']['name'];
		$tmp = $_FILES['FC_APP']['tmp_name'];
		$FC_SNP = $_FILES['FC_SNP']['name'];
		$tmp = $_FILES['FC_SNP']['tmp_name'];
		$FC_IK = $_FILES['FC_IK']['name'];
		$tmp = $_FILES['FC_IK']['tmp_name'];
		$gambar_teknis = $_FILES['gambar_teknis']['name'];
		$tmp = $_FILES['gambar_teknis']['tmp_name'];
		$FC_SPPT = $_FILES['FC_SPPT']['name'];
		$tmp = $_FILES['FC_SPPT']['tmp_name'];

		$pdf_baru = ("").$FC_KTP;
		$path = "../datapdf/".$pdf_baru;
		$pdf_baru2 = ("").$FC_APP;
		$path = "../datapdf/".$pdf_baru2;
		$pdf_baru3 = ("").$FC_SNP;
		$path = "../datapdf/".$pdf_baru3;
		$pdf_baru4 = ("").$FC_IK;
		$path = "../datapdf/".$pdf_baru4;
		$pdf_baru5 = ("").$gambar_teknis;
		$path = "../datapdf/".$pdf_baru5;
		$pdf_baru6 = ("").$FC_SPPT;
		$path = "../datapdf/".$pdf_baru6;
		if(move_uploaded_file($tmp, $path)){
		
		$query = "INSERT INTO berkas_izin (no_register,tanggal,nama_pemohon,alamat_pemohon,desa_pemohon,kecamatan_pemohon,kabupaten_pemohon,wilayah,jalan,desa,status_tanah,izin,nama_perwakilan,alamat_perwakilan,telepon_perwakilan,jabatan_perwakilan,surat_kuasa,FC_KTP,FC_APP,FC_SNP,FC_IK,gambar_teknis,FC_SPPT,status) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($koneksi, $query);
		mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssss", $no_register, $tanggal, $nama_pemohon, $alamat_pemohon, $desa_pemohon, $kecamatan_pemohon, $kabupaten_pemohon, $wilayah, $jalan, $desa, $status_tanah, $izin, $nama_perwakilan, $alamat_perwakilan, $telepon_perwakilan, $jabatan_perwakilan, $surat_kuasa, $pdf_baru, $pdf_baru2, $pdf_baru3, $pdf_baru4, $pdf_baru5, $pdf_baru6, $status);
		$sukses = mysqli_stmt_execute($stmt);

		if(!$sukses){
			die('Query error : '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
		}
		mysqli_stmt_close($stmt);
		 echo "<script>alert('Berhasil menambah data.')</script>";
            echo "<script>window.location = 'index.php?p=pendaftaran'</script>";
        }
	}
 ?>