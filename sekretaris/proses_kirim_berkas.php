<?php 
	include 'config.php';

	$id = $_GET['id_pendaftaran'];

	$dat = mysqli_query($koneksi,"select*from berkas_izin where id_pendaftaran='$id'");
	$p = mysqli_fetch_array($dat);

	$i = $p['id_pendaftaran'];
	$register = $p['no_register'];
	$tanggal = $p['Tanggal'];
	$nama_p = $p['nama_pemohon'];
	$alamat_p = $p['alamat_pemohon'];
	$desa_p = $p['desa_pemohon'];
	$kecamatan_p = $p['kecamatan_pemohon'];
	$kabupaten_p = $p['kabupaten_pemohon'];
	$wilayah_p = $p['wilayah'];
	$jalan_p = $p['jalan'];
	$desa_pp = $p['desa'];
	$status_p = $p['status_tanah'];
	$izin_p = $p['izin'];
	$nama_pp = $p['nama_perwakilan'];
	$alamat_pp = $p['alamat_perwakilan'];
	$telepon_pp = $p['telepon_perwakilan'];
	$jabatan_pp = $p['jabatan_perwakilan'];
	$surat_pp = $p['surat_kuasa'];
	$KTP_pp = $p['FC_KTP'];
	$APP_pp = $p['FC_APP'];
	$SNP_pp = $p['FC_SNP'];
	$IK_pp = $p['FC_IK'];
	$gambar_pp = $p['gambar_teknis'];
	$catatan_pp = $p['catatan'];
	$sppt = $p['FC_SPPT'];
	$status = "Sudah diCetak";

	if (!empty($id)) {
		mysqli_query($koneksi,"INSERT INTO history_berkas VALUES('','$register','$tanggal','$nama_p','$alamat_p','$desa_p','$kecamatan_p','$kabupaten_p','$wilayah_p','$jalan_p','$desa_pp','$status_p','$izin_p','$nama_pp','$alamat_pp','$telepon_pp','$jabatan_pp','$surat_pp','$KTP_pp','$APP_pp','$SNP_pp','$IK_pp','$gambar_pp','$sppt','$status')");
		 mysqli_query($koneksi,"DELETE FROM berkas_izin where id_pendaftaran = '$id' ");
		echo "<script>alert('Data Berhasil Disimpan','_self')</script>";
		header("location:index.php?p=sertifikat");
	}else{
		echo "<script>alert('Data Gagal Disimpan','_self')</script>";
		header("location:index.php?p=lihat_berkas");
	}

	