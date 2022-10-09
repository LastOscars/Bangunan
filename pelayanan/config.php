<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "imb_baru";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$koneksi) {
	die("koneksi dengan database gagal : ".mysql_connect()." - ".mysql_connect_error());
}
?>