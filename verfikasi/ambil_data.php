<?php
include "config.php";

if (isset($_POST['kec'])) {
    $kec = $_POST["kec"];
    $sql = "SELECT * FROM kel INNER JOIN kec on kec.id_kec = kel.id_kec WHERE kec.nama_kec = '$kec'";
    $hasil = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <option value="<?= $data['nama_kel']; ?>"><?= $data['nama_kel']; ?></option>
        <?php
    }
}

?>