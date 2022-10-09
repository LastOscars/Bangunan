<?php 
	include 'config.php';

	$id = $_GET['proses'];

	$dat = mysqli_query($koneksi,"select*from plang_imb where id_imb='$id'");
	$p = mysqli_fetch_array($dat);

	$id = $p['id_imb'];
	$tgl_imb = $p['tgl_imb'];
	$lokasi_imb = $p['lokasi_imb'];
	$kegiatan = $p['kegiatan'];
	$penggunaan = $p['penggunaan'];
	$pemilik = $p['pemilik'];
	$jumlah_lantai = $p['jumlah_lantai'];
	$perencanaan_bangunan = $p['perencanaan_bangunan'];
	$status = "Sudah Tercetak";

	if (!empty($id)) {
		mysqli_query($koneksi,"INSERT INTO history_plang_imb VALUES('','$id','$tgl_imb','$lokasi_imb','$kegiatan','$penggunaan','$pemilik','$jumlah_lantai','$perencanaan_bangunan','$status')");
		 mysqli_query($koneksi,"DELETE FROM plang_imb where id_imb = '$id' ");
		echo "<script>alert('Data Berhasil Disimpan','_self')</script>";
		echo "<script>window.open('index.php?p=sertifikat')</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan','_self')</script>";
		echo "<script>window.open('index.php?p=sertifikat')</script>";
	}

	