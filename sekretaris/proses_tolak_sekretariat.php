<?php 
	include 'config.php';
	if(isset($_POST['tolak'])){
		
		$id_pendaftaran = $_POST['id_pendaftaran'];
		$status = "kepala_bidang";
		$catatan = $_POST['catatan'];
			
		
		$query = "UPDATE berkas_izin SET catatan=?,status=? WHERE id_pendaftaran=?";
		$stmt = mysqli_prepare($koneksi, $query);
		mysqli_stmt_bind_param($stmt, "sss", $catatan,$status,$id_pendaftaran);
		$sukses = mysqli_stmt_execute($stmt);

		if($sukses){
			header("location: index.php?p=pendaftaran");
			echo "berhasil";
		}else{
			// header("location: index.php?p=ubah_pengguna&id_pengguna=$idPengguna&alert=4");
		}
	}
 ?>