<?php 
include 'config.php';
if (isset($_POST['simpan'])) {
	$id_user = '6';
	$pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);
	$tujuan_petugas = mysqli_real_escape_string($koneksi, $_POST['tujuan_petugas']);

	$kesalahan = $_FILES['kesalahan']['name'];
	$tmp = $_FILES['kesalahan']['tmp_name'];
	

		// PERINTAH UNTUK UPLOAD FILE
	$kesalahan_baru = date('dmYHis').$kesalahan;

	$path = "file/".$kesalahan_baru;
		// Proses upload
		// ----------------------------

	if(move_uploaded_file($tmp, $path)){
		$query = "INSERT INTO pesan_petugas (id_user,pesan,tujuan_petugas,kesalahan) VALUES (?,?,?,?)";
		$stmt = mysqli_prepare($koneksi,$query);
		mysqli_stmt_bind_param($stmt, "ssss", $id_user,$pesan,$tujuan_petugas,$kesalahan_baru);

		$sukses = mysqli_stmt_execute($stmt);

		if ($sukses){
			echo "<script>alert('Data berhasil ditambahkan!')</script>";
			 	echo "<script>window.location = 'index.php?p=pesan_petugas'</script>";
		}
		else{
			 echo "<script>alert('Data gagal ditambahkan!')</script>";
			 // echo "<script>window.location = 'index.php?p=pesan_petugas'</script>";
		}
		
	}
	else{
   //Jika gambar gagal diupload, Lakukan :
		 echo "<script>alert('Maaf, Gambar gagal untuk diupload.')</script>";
		 // echo "<script>window.location = 'index.php?p=pesan_petugas'</script>";
	}
}
?>