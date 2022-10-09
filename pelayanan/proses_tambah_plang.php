<?php 
	include 'config.php';
	if(isset($_POST['simpan'])){
	$status = "proses_dicetak";
	$tgl_imb = mysqli_real_escape_string($koneksi, $_POST['tgl_imb']);
	$lokasi_imb = mysqli_real_escape_string($koneksi, $_POST['lokasi_imb']);
	$kegiatan = mysqli_real_escape_string($koneksi, $_POST['kegiatan']);
	$penggunaan = mysqli_real_escape_string($koneksi, $_POST['penggunaan']);
	
	$jumlah_lantai = mysqli_real_escape_string($koneksi, $_POST['jumlah_lantai']);
	$perencanaan_bangunan = mysqli_real_escape_string($koneksi, $_POST['perencanaan_bangunan']);
			
		
		$query = "INSERT INTO plang_imb (tgl_imb,lokasi_imb,kegiatan,penggunaan,jumlah_lantai,perencanaan_bangunan,status) VALUES (?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($koneksi, $query);
		mysqli_stmt_bind_param($stmt, "sssssss", $tgl_imb,$lokasi_imb,$kegiatan,$penggunaan,$jumlah_lantai,$perencanaan_bangunan,$status);
		$sukses = mysqli_stmt_execute($stmt);

		if($sukses){
			header("location: index.php?p=sertifikat");
			echo "berhasil";
		}else{
			// header("location: index.php?p=ubah_pengguna&id_pengguna=$idPengguna&alert=4");
		}
	}
 ?>