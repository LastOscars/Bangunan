<?php 
	include 'config.php';

	$id = $_GET['proses'];

	$dat = mysqli_query($koneksi,"select*from sertifikat where id_sertifikat='$id'");
	$p = mysqli_fetch_array($dat);

	$id = $p['id_sertifikat'];
	$tanggal = $p['tanggal'];
	$nama = $p['nama'];
	$alamat = $p['alamat'];
	$tingkat = $p['tingkat_bangunan'];
	$lokasi = $p['lokasi_bangunan'];
	$kondisi = $p['kondisi_bangunan'];
	$ukuran = $p['ukuran_bangunan'];
	$atas = $p['diatas_tanah'];
	$status = "Sudah Tercetak";

	if (!empty($id)) {
		mysqli_query($koneksi,"INSERT INTO history_sertifikat VALUES('','$id','$tanggal','$nama','$alamat','$tingkat','$lokasi','$kondisi','$ukuran','$atas','$status')");
		mysqli_query($koneksi,"DELETE FROM sertifikat where id_sertifikat = '$id' ");
		echo "<script>alert('Data Berhasil Disimpan','_self')</script>";
		echo "<script>window.open('index.php?p=sertifikat')</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan','_self')</script>";
		echo "<script>window.open('index.php?p=sertifikat')</script>";
	}

	