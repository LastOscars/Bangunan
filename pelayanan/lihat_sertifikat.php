     <?php

     $id_sertifikat = $_GET['id_sertifikat'];
     $query = "SELECT * FROM sertifikat where id_sertifikat='$id_sertifikat'";
     $hasil_query = mysqli_query($koneksi, $query);
     $row1=mysqli_fetch_array($hasil_query)                            
     ?>
     <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
      <li class="nav-item">
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
          <span>SERTIFIKAT IMB</span>
        </a>
    
      </ul>       
      <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
          <div class="main-card mb-3 card">
            <div class="card-body">
              <div class="col-lg-12">
                <div class="main-card mb-10 card">
                  <div class="card-body"><h5 class="card-title">SERTIFIKAT</h5>
                   <form class="" action="proses_tambah_sertifikat.php" method="POST" enctype="multipart/form-data">
                    <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10"><input name="nama" id="nama" placeholder="Nama harus di isi" type="nama" class="form-control"value="<?php echo $row1['nama'];?>"disabled></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">alamat</label>
                      <div class="col-sm-10"><textarea name="alamat" id="alamat" class="form-control" value="<?php echo $row1['alamat'];?>"disabled ></textarea></div>
                    </div>

                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Lokasi Bangunan</label>
                      <div class="col-sm-10"><textarea name="lokasi_bangunan" id="lokasi_bangunan" class="form-control" value="<?php echo $row1['lokasi_bangunan'];?>"disabled></textarea></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Kondisi Bangunan</label>
                      <div class="col-sm-10"><input name="kondisi_bangunan" id="kondisi_bangunan" placeholder="Kondisi Bangunan harus di isi" type="kondisi_bangunan" class="form-control" value="<?php echo $row1['kondisi_bangunan'];?>"disabled></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tingkat Bangunan</label>
                      <div class="col-sm-10"><input name="tingkat_bangunan" id="tingkat_bangunan" placeholder="Tingkat Bangunan harus di isi" type="tingkat_bangunan" class="form-control"value="<?php echo $row1['tingkat_bangunan'];?>"disabled></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Ukuran Bangunan</label>
                      <div class="col-sm-10"><input name="ukuran_bangunan" id="ukuran_bangunan" placeholder="Ukuran Bangunan harus di isi" type="ukuran_bangunan" class="form-control"value="<?php echo $row1['ukuran_bangunan'];?>"disabled></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Diatas Tanah</label>
                      <div class="col-sm-10"><textarea name="diatas_tanah" id="diatas_tanah" class="form-control" value="<?php echo $row1['diatas_tanah'];?>"disabled></textarea></div>
                    </div>
                                                 <!--  <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Surat Kuasa No. /tgl</label>
                                                  <div class="col-sm-10"><input name="surat_kuasa" id="exampleEmail" placeholder="Nama Harus Di isi" type="surat_kuasa" class="form-control"value="<?php echo $row1['surat_kuasa'];?>"disabled></div> -->


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


