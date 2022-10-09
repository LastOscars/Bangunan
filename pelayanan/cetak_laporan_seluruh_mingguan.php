<!DOCTYPE html>
<html>
<head>
    <title>Laporan IMB Selesai</title>
    <link href="./main.css" rel="stylesheet"></head>
</head>
<body>
<?php

    if (isset($_POST['cetak_mingguan'])) {
        include('config.php');
        $dari = $_POST['dariTgl'];
        $sampai = $_POST['sampaiTgl'];
        $query = "SELECT * FROM history_plang_imb WHERE ttgl_imb BETWEEN '$dari' AND '$sampai'";
        $hasil_query = mysqli_query($koneksi, $query);
        $no = 1;
    echo "<h3><center>Laporan IMB Selesai<center></h3>";
    echo "  <table class='mb-0 table table-bordered'>
            <thead>
            <tr>
                <th>No</th>
                <th>Tanggal IMB</th>
                <th>Lokasi IMB</th>
                <th>Kegiatan</th>
                <th>Penggunaan</th>
                <th>Jumlah Lantai</th>
                <th>Perencanaan Pembangunan</th>
            </tr>
            </thead>
            <tbody>";
        while ($row=mysqli_fetch_array($hasil_query)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".date('d-m-Y',strtotime($row['ttgl_imb']))."</td>";
        echo "<td>$row[tlokasi_imb]</td>";
        echo "<td>$row[tkegiatan]</td>";
        echo "<td>$row[tpenggunaan]</td>";
        echo "<td>$row[tjumlah_lantai]</td>";
        echo "<td>$row[tperencanaan_bangunan]</td>";
        echo "</tr>";
            }
    echo "</tbody>
          </table>";
    }

?>
<script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>
