     <?php

$id_pendaftaran = $_GET['id_pendaftaran'];
$query = "SELECT * FROM berkas_izin where id_pendaftaran='$id_pendaftaran'";
$hasil_query = mysqli_query($koneksi, $query);
$row1=mysqli_fetch_array($hasil_query)                            
?>
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
                                        <div class="col-sm-10"><input name="no_register" id="no_register" placeholder="Nama Harus Di isi" type="no_register" class="form-control" value="<?php echo $row1['no_register'];?>"disabled></div>
                                      </div>
                                       <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10"><input name="tanggal" id="tanggal" placeholder="Nama Harus Di isi" type="date" class="form-control"value="<?php echo $row1['tanggal'];?>"disabled></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10"><input name="nama_pemohon" id="exampleEmail" placeholder="Nama Harus Di isi" type="nama_pemohon" class="form-control"value="<?php echo $row1['nama_pemohon'];?>"disabled></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10"><textarea name="alamat_pemohon" id="alamat" class="form-control"value="<?php echo $row1['alamat_pemohon'];?>"disabled></textarea></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                                        <div class="col-sm-10"><input name="desa_pemohon" id="exampleEmail" placeholder="Nama Harus Di isi" type="desa" class="form-control"value="<?php echo $row1['desa_pemohon'];?>"disabled></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-10"><input name="kecamatan_pemohon" id="exampleEmail" placeholder="Nama Harus Di isi" type="nama_layanan" class="form-control"value="<?php echo $row1['kecamatan_pemohon'];?>"disabled></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Kabupaten</label>
                                        <div class="col-sm-10"><input name="kabupaten_pemohon" id="exampleEmail" placeholder="Nama Harus Di isi" type="kabupaten" class="form-control"value="<?php echo $row1['kabupaten_pemohon'];?>"disabled></div>
                                        <div class="card-body"><h6 class="card-title">LETAK/STATUS TANAH</h6>
                                         <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Wilayah</label>
                                            <div class="col-sm-10"><textarea name="wilayah" id="wilayah" class="form-control"value="<?php echo $row1['wilayah'];?>"disabled></textarea></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Jalan / Kelas Jalan</label>
                                            <div class="col-sm-10"><textarea name="jalan" id="jalan" class="form-control"value="<?php echo $row1['jalan'];?>"disabled></textarea></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Desa / Kelurahan</label>
                                            <div class="col-sm-10"><input name="desa" id="exampleEmail" placeholder="Nama Harus Di isi" type="desa" class="form-control"value="<?php echo $row1['desa'];?>"disabled></div>
                                          </div>
                                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Status Tanah</label>
                                            <div class="col-sm-10"><input name="status_tanah" id="exampleEmail" placeholder="Nama Harus Di isi" type="status_tanah" class="form-control"value="<?php echo $row1['status_tanah'];?>"disabled></div>
                                            <div class="card-body"><h6 class="card-title">PERMOHONAN IJIN UNTUK</h6>
                                             <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Mendirikan Bangunan</label>
                                                <div class="col-sm-10"><input name="mendirikan_bangunan" id="exampleEmail" placeholder="Nama Harus Di isi" type="mendirikan_bangunan" class="form-control"value="<?php echo $row1['mendirikan_bangunan'];?>"disabled></div>
                                              </div>
                                              <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Rehab / Renovasi Bangunan</label>
                                                <div class="col-sm-10"><input name="rehab_bangunan" id="exampleEmail" placeholder="Nama Harus Di isi" type="rehab_bangunan" class="form-control"value="<?php echo $row1['rehab_bangunan'];?>"disabled></div>
                                                <div class="card-body"><h7 class="card-title">PERMOHONAN PERWAKILAN</h7>
                                                 <form class="" action="proses_tambah_berkas.php" method="POST" enctype="multipart/form-data">
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10"><input name="nama_perwakilan" id="exampleEmail" placeholder="Nama Harus Di isi" type="nama" class="form-control"value="<?php echo $row1['nama_perwakilan'];?>"disabled></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-10"><textarea name="alamat_perwakilan" id="alamat" class="form-control"value="<?php echo $row1['alamat_perwakilan'];?>"disabled></textarea></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Telepon</label>
                                                    <div class="col-sm-10"><input name="telepon_perwakilan" id="exampleEmail" placeholder="Nama Harus Di isi" type="telepon" class="form-control"value="<?php echo $row1['telepon_perwakilan'];?>"disabled></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                                    <div class="col-sm-10"><input name="jabatan_perwakilan" id="exampleEmail" placeholder="Nama Harus Di isi" type="jabatan" class="form-control"value="<?php echo $row1['jabatan_perwakilan'];?>"disabled></div>
                                                  </div>
                                                  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Surat Kuasa No. /tgl</label>
                                                    <div class="col-sm-10"><input name="surat_kuasa" id="exampleEmail" placeholder="Nama Harus Di isi" type="surat_kuasa" class="form-control"value="<?php echo $row1['surat_kuasa'];?>"disabled></div>


                                                      <div class="position-relative row form-check">
                                                        <div class="col-sm-10 offset-sm-40">
                                                          <button type="cetak" class="btn btn-primary" name="cetak">CETAK</button>
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


