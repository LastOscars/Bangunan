          <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
              <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>PENDAFTARAN PEMOHON</span>
              </a>
            </li>
            <!-- <li class="nav-item"> -->
              <!-- <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1"> -->
                <!-- <span>LETAK/STATUS TANAH</span> -->
              </a>
              <!-- </li> -->
              <!-- <li class="nav-item"> -->
                <!-- <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-2"> -->
                  <!-- <span>PERMOHONAN IJIN UNTUK</span> -->
                  <!-- </a> -->
                  <!-- </li> -->
                  <!-- <li class="nav-item"> -->
                    <!-- <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-3"> -->
                      <!-- <span>PERMOHONAN PERWAKILAN</span> -->
                      <!-- </a>   -->
                      <!-- </li> -->
                      <!-- <li class="nav-item"> -->
                        <!-- <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-4"> -->
                          <!-- <span>PERSYARATAN</span> -->
                          <!-- </a> -->
                          <!-- </li> -->
                        </ul>       
                        <div class="tab-content">
                          <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                              <div class="card-body">
                                <div class="col-lg-12">
                                  <div class="main-card mb-10 card">
                                    <div class="card-body"><h5 class="card-title">DATA DIRI</h5>
                                     <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                       <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">No Registrasi</label>
                                        <?php
                                          $idp = mysqli_query($koneksi, "SELECT max(id_pendaftaran) as id FROM berkas_izin");
                                          $row = mysqli_fetch_array($idp);
                                          if (strlen($row['id']) == 1) {
                                            $ok = (int)$row['id']+1;
                                            $no_regis = "B00".$ok;
                                          }elseif(strlen($row['id']) == 2){
                                            $ok = (int)$row['id']+1;
                                            $no_regis = "B0".$ok;
                                          }elseif(strlen($row['id']) == 3){
                                            $ok = (int)$row['id']+1;
                                            $no_regis = "B".$ok;
                                          }
                                        ?>
                                        <div class="col-sm-10"><input name="no_register" id="no_register"  type="no_register" class="form-control" value="<?= $no_regis; ?>" readonly required></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Tanggal</label>
                                        <div class="col-sm-10"><input name="tanggal" id="tanggal"  type="date" class="form-control"></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Nama</label>
                                        <div class="col-sm-10"><input name="nama_pemohon" id="exampleEmail"  type="nama_pemohon" class="form-control" required></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">*Alamat</label>
                                        <div class="col-sm-10"><textarea name="alamat_pemohon" id="alamat" class="form-control" required></textarea></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Kabupaten</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="kab" name="kabupaten_pemohon">
                                            <?php
                                              $sql = mysqli_query($koneksi, "SELECT * FROM kab");
                                              while ($data = mysqli_fetch_array($sql)) {
                                              echo "<option value='$data[nama_kab]'>$data[nama_kab]</option>";
                                              }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="position-relative row form-group">
                                      <label for="exampleEmail" class="col-sm-2 col-form-label">*Kecamatan</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="kec" name="kecamatan_pemohon">
                                            <option>- Pilih -</option>
                                            <?php
                                              $sql = mysqli_query($koneksi, "SELECT * FROM kec");
                                              while ($data = mysqli_fetch_array($sql)) {
                                              echo "<option value='$data[nama_kec]'>$data[nama_kec]</option>";
                                              }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Desa/Kelurahan</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="kel" name="desa_pemohon">
                                            <option>- Pilih -</option>
                                          </select></div>
                                      </div>                                      
                                      <div class="position-relative row form-group">
                                        <div class="card-body"><h6 class="card-title">LETAK/STATUS TANAH</h6>
                                         <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">*Wilayah</label>
                                            <div class="col-sm-10"><textarea name="wilayah" id="wilayah" class="form-control" required></textarea></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">*Jalan / Kelas Jalan</label>
                                            <div class="col-sm-10"><textarea name="jalan" id="jalan" class="form-control" required></textarea></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Desa / Kelurahan</label>
                                            <div class="col-sm-10"><input name="desa" id="exampleEmail"  type="desa" class="form-control" required></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Status Tanah</label>
                                            <div class="col-sm-10"><input name="status_tanah" id="exampleEmail"  type="status_tanah" class="form-control" required></div>
                                            <div class="card-body"><h6 class="card-title">PERMOHONAN IZIN UNTUK</h6>
                                             <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                              <!-- <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Mendirikan Bangunan</label>
                                                <div class="col-sm-10"><input name="mendirikan_bangunan" id="exampleEmail"  type="mendirikan_bangunan" class="form-control"></div>
                                              </div> -->
                                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">*Permohonan Izin</label>
                                                <div class="col-sm-10">
                                                  <select class="form-control" name="izin">
                                                    <option>- Pilih -</option>
                                                    <option value="Mendirikan">Mendirikan</option>
                                                    <option value="Rehab / Renovasi">Rehab / Renovasi</option>
                                                  </select>
                                                </div>
                                                <div class="card-body">
                                                  <h7 class="card-title">PERMOHONAN PERWAKILAN</h7>
                                                 <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10"><input name="nama_perwakilan" id="exampleEmail"  type="nama" class="form-control"></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10"><textarea name="alamat_perwakilan" id="alamat" class="form-control"></textarea></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Telepon</label>
                                                    <div class="col-sm-10"><input name="telepon_perwakilan" id="exampleEmail"  type="telepon" class="form-control"></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                                    <div class="col-sm-10"><input name="jabatan_perwakilan" id="exampleEmail"  type="jabatan" class="form-control"></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Surat Kuasa No. /tgl</label>
                                                    <div class="col-sm-10"><input name="surat_kuasa" id="exampleEmail"  type="surat_kuasa" class="form-control"></div>
                                                    <div class="card-body"><h8 class="card-title">PERSYARATAN</h8>
                                                     <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                                      <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto Copy KTP</label>
                                                        <div class="col-sm-10"><input name="FC_KTP" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div>
                                                      <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto Copy Akta Pendirian Perusahaan</label>
                                                        <div class="col-sm-10"><input name="FC_APP" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div>
                                                      <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto Copy Sertifikat Non Pertanian/Status Tanah</label>
                                                        <div class="col-sm-10"><input name="FC_SNP" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div>
                                                      <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto Copy Ijin Lokasi</label>
                                                        <div class="col-sm-10"><input name="FC_IK" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div>
                                                      <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Gambar Teknis</label>
                                                        <div class="col-sm-10"><input name="gambar_teknis" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div><div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto Copy SPPT PBB</label>
                                                        <div class="col-sm-10"><input name="FC_SPPT" id="exampleFile" type="file" class="form-control-file">
                                                          <small class="form-text text-muted">Upload File PDF</small>
                                                        </div>
                                                      </div>





                                                      <div class="position-relative row form-check">
                                                        <div class="col-sm-10 offset-sm-2">
                                                          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>
                                          </div>

                                        </div>
                                      </div>


<script type="text/javascript" src="http://localhost/galang/js/jquery-3.1.1.min.js"></script>
    <script>
       $("#kec").change(function(){
        var kec = $("#kec").val();
            $.ajax({
              type: 'POST',
                url: "http://localhost/galang/verfikasi/ambil_data.php",
                data: {kec: kec},
                success: function(msg){
                  $("#kel").html(msg);
                }
            });
        });
    </script>