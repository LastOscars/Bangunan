<?php 
	include 'config.php';
	if(isset($_POST['simpan'])){
	$status = "sedang_dicetak";
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
	$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$penggunaan = mysqli_real_escape_string($koneksi, $_POST['penggunaan']);
	$kegiatan = mysqli_real_escape_string($koneksi, $_POST['kegiatan']);
	$lokasi_bangunan = mysqli_real_escape_string($koneksi, $_POST['lokasi_bangunan']);
	$kondisi_bangunan = mysqli_real_escape_string($koneksi, $_POST['kondisi_bangunan']);
	$tingkat_bangunan = mysqli_real_escape_string($koneksi, $_POST['tingkat_bangunan']);
	$ukuran_bangunan = mysqli_real_escape_string($koneksi, $_POST['ukuran_bangunan']);
	$perencanaan_bangunan = mysqli_real_escape_string($koneksi, $_POST['perencanaan_bangunan']);
	$diatas_tanah = mysqli_real_escape_string($koneksi, $_POST['diatas_tanah']);
			
		
		$query = "INSERT INTO sertifikat (nama,penggunaan,kegiatan,perencanaan_bangunan,tanggal,alamat,lokasi_bangunan,kondisi_bangunan,tingkat_bangunan,ukuran_bangunan,diatas_tanah,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($koneksi, $query);
		mysqli_stmt_bind_param($stmt, "ssssssssssss", $nama,$penggunaan,$kegiatan,$perencanaan_bangunan,$tanggal,$alamat,$lokasi_bangunan,$kondisi_bangunan,$tingkat_bangunan,$ukuran_bangunan,$diatas_tanah,$status);
		$sukses = mysqli_stmt_execute($stmt);

		if($sukses){
			header("location: index.php?p=sertifikat");
			echo "berhasil";
		}else{
			// header("location: index.php?p=ubah_pengguna&id_pengguna=$idPengguna&alert=4");
		}
	}
 ?>