<?php 
	include 'config.php';
	if(isset($_POST['simpan'])){
		
		
		$nama_pemohon = mysqli_real_escape_string($koneksi, $_POST['nama_pemohon']);
		$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
		$desa = mysqli_real_escape_string($koneksi, $_POST['desa']);
		$kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
		$kabupaten = mysqli_real_escape_string($koneksi, $_POST['kabupaten']);
		
		
		$query = "INSERT INTO data_diri (nama_pemohon,alamat,desa,kecamatan,kabupaten) values (?,?,?,?,?)";
		$stmt = mysqli_prepare($koneksi, $query);
		mysqli_stmt_bind_param($stmt, "sssss",   $nama_pemohon, $alamat, $desa, $kecamatan, $kabupaten);
		$sukses = mysqli_stmt_execute($stmt);

		if(!$sukses){
			die('Query error : '.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
		}
		mysqli_stmt_close($stmt);
		 echo "<script>alert('Berhasil menambah data.')</script>";
            echo "<script>window.location = 'index.php?p=pendaftaran'</script>";
	}
 ?>