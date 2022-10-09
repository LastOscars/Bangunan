<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-40">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-folder"></i>
        </div>
        <div class="mr-5">Jumlah ijin IMB masuk </div>
        <?php
                $query = "SELECT count(id_pendaftaran) as berkas_izin_masuk FROM berkas_izin WHERE status='kasi_pemrosesan'";
                $hasil_query = mysqli_query($koneksi, $query);
                while ($row=mysqli_fetch_assoc($hasil_query)) 
                {
                  ?>
                  <h4><?php echo $row['berkas_izin_masuk']; ?></h4>
                  <?php
                }
                ?>
        
      </div>
      <a class="card-footer text-white clearfix small z-1" href="index.php?p=cek_imb">
        <span class="float-left">Ijin IMB masuk</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-40">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-folder"></i>
        </div>
        <div class="mr-5">Jumlah Ijin IMB Proses </div>
        <?php
                $query = "SELECT count(id_pendaftaran) as jumlah_izin_proses FROM berkas_izin ";
                $hasil_query = mysqli_query($koneksi, $query);
                while ($row=mysqli_fetch_assoc($hasil_query)) 
                {
                  ?>
                  <h4><?php echo $row['jumlah_izin_proses']; ?></h4>
                  <?php
                }
                ?>
        
      </div>
      <a class="card-footer text-white clearfix small z-1" href="index.php?p=cek_imb">
        <span class="float-left">Ijin IMB sedang proses</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-40">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-folder"></i>
        </div>
        <div class="mr-5">Jumlah Ijin IMB Selesai </div>
        <?php
                $query = "SELECT count(id_pendaftaran) as berkas_izin_selesai FROM berkas_izin WHERE status='Selesai'";
                $hasil_query = mysqli_query($koneksi, $query);
                while ($row=mysqli_fetch_assoc($hasil_query)) 
                {
                  ?>
                  <h4><?php echo $row['berkas_izin_selesai']; ?></h4>
                  <?php
                }
                ?>
        
      </div>
      <a class="card-footer text-white clearfix small z-1" href="index.php?p=cek_imb">
        <span class="float-left">Ijin IMB Selesai</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="index.php?p=cek_imb">
        <span class="float-left">Rekapitulasi IMB</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-40">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-folder"></i>
        </div>
        <div class="mr-5">Rekapitulasi IMB </div>
        <?php
                $query = "SELECT count(id_history_plang) as berkas_imb_selesai FROM history_plang_imb WHERE status='Sudah Tercetak'";
                $hasil_query = mysqli_query($koneksi, $query);
                while ($row=mysqli_fetch_assoc($hasil_query)) 
                {
                  ?>
                  <h4><?php echo $row['berkas_imb_selesai']; ?></h4>
                  <?php
                }
                ?>
        
      </div>
      <a class="card-footer text-white clearfix small z-1" href="index.php?p=cek_imb#tab-content-3">
        <span class="float-left">Ijin IMB Selesai</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  
</div>
