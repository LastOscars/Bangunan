            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
              <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                  <span>INPUT SURAT IZIN</span>
                </a>
              </li>
              <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                  <span>PERCETAKAN SURAT IZIN</span>
                </a>
              </li>
             

              <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-4" data-toggle="tab" href="#tab-content-3">
                  <span>PERCETAKAN PLANG IMB</span>
                </a>
              </li>

            </ul>           
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <div class="col-lg-12">
                      <div class="main-card mb-10 card">
                        <div class="card-body"><h5 class="card-title">SURAT IZIN</h5>
                         <form class="" action="proses_tambah_sertifikat.php" method="POST" enctype="multipart/form-data">
                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10"><input name="tanggal" id="tanggal"  type="date" class="form-control" class="required_notification"></div>
                          </div>
                          <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10"><input name="nama" id="nama" placeholder="Nama harus di isi" type="nama" class="form-control" required></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">alamat</label>
                            <div class="col-sm-10"><textarea name="alamat" id="alamat" class="form-control"></textarea></div>
                          </div>
                           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Penggunaan</label>
                            <div class="col-sm-10"><input name="penggunaan" id="penggunaan" placeholder="Penggunaan harus di isi" type="penggunaan" class="form-control" required></div>
                          </div>
                           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Kegiatan</label>
                            <div class="col-sm-10"><input name="kegiatan" id="kegiatan" placeholder="Kegiatan Bangunan harus di isi" type="kegiatan" class="form-control" required></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Lokasi Bangunan</label>
                            <div class="col-sm-10"><textarea name="lokasi_bangunan" id="lokasi_bangunan" class="form-control"></textarea></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Kondisi Bangunan</label>
                            <div class="col-sm-10"><input name="kondisi_bangunan" id="kondisi_bangunan" placeholder="Kondisi Bangunan harus di isi" type="kondisi_bangunan" class="form-control" required></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Tingkat Bangunan</label>
                            <div class="col-sm-10"><input name="tingkat_bangunan" id="tingkat_bangunan" placeholder="Tingkat Bangunan harus di isi" type="tingkat_bangunan" class="form-control" required></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Ukuran Bangunan</label>
                            <div class="col-sm-10"><input name="ukuran_bangunan" id="ukuran_bangunan" placeholder="Ukuran Bangunan harus di isi" type="ukuran_bangunan" class="form-control" required></div>
                          </div>
                           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Perencanaan Bangunan</label>
                            <div class="col-sm-10"><input name="perencanaan_bangunan" id="perencanaan_bangunan" placeholder="perecanaan Bangunan harus di isi" type="perencanaan_bangunan" class="form-control" required></div>
                          </div>
                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Diatas Tanah</label>
                            <div class="col-sm-10"><textarea name="diatas_tanah" id="diatas_tanah" class="form-control"></textarea></div>
                          </div>


                          <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                              <button type="submit" class="btn btn-primary" name="simpan">KIRIM</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <div class="main-card mb-3 card">
               <div class="card-body">
                <h5 class="card-title">LAPORAN SIAP CETAK SURAT IZIN</h5>
                <table class="mb-0 table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Lokasi Bangunan</th>
                      <th>Kondisi Bangunan</th>
                      <th>Tingkat Bangunan</th>
                      <th>Ukuran Bangunan</th>
                      <th>Diatas Bangunan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                    include 'config.php';
                    $query = "SELECT * FROM sertifikat";
                    $hasil_query = mysqli_query($koneksi, $query);
                    $no=1;
                    while ($row=mysqli_fetch_assoc($hasil_query)) 
                    {
                      ?>
                      <tr>
                        <td><?php echo $no++;  ?></td>
                        <td><?php echo date('d-m-Y', strtotime($row['tanggal'])) ;?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['alamat'];?></td>
                        <td><?php echo $row['lokasi_bangunan'];?></td>
                        <td><?php echo $row['kondisi_bangunan'];?></td>
                        <td><?php echo $row['tingkat_bangunan'];?></td>
                        <td><?php echo $row['ukuran_bangunan'];?></td>
                        <td><?php echo $row['diatas_tanah'];?></td>



                        <td> 
                          <div class="widget-content-right header-user-info ml-3">
                            <a href="cetak_laporan.php?p=<?php echo $row['id_sertifikat'] ?>">
                              <i class="fa fa-download fa-2x" aria-hidden="true"></i></a> ||  
                              <a href="proses_kirim_sertifikat.php?proses=<?php echo $row['id_sertifikat'] ?>">
                                <i class="fas fa-share-square fa-2x" aria-hidden="true"></i></a>
                              </div>

                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>  
                  </div>
                </div>

              </div>
              

            <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
              <div class="main-card mb-3 card">
               <div class="card-body">
                <h5 class="card-title">LAPORAN SIAP TERCETAK</h5>
                <table class="mb-0 table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal IMB</th>
                      <th>Lokasi IMB</th>
                      <th>Kegiatan IMB</th>
                      <th>Penggunaan</th>
                      <th>Jumlah Lantai</th>
                      <th>Perencanaan Bangunan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php   
                    include 'config.php';
                    $query = "SELECT * FROM sertifikat";
                    $hasil_query = mysqli_query($koneksi, $query);
                    $no=1;
                    while ($row=mysqli_fetch_assoc($hasil_query)) 
                    {
                      ?>
                      <tr>
                        <td><?php echo $no++;  ?></td>  
                        <td><?php echo date('d-m-Y', strtotime($row['tanggal'])) ;?></td>
                        <td><?php echo $row['lokasi_bangunan'];?></td>
                        <td><?php echo $row['kegiatan'];?></td>
                        <td><?php echo $row['penggunaan'];?></td>
                        <td><?php echo $row['tingkat_bangunan'];?></td>
                        <td><?php echo $row['perencanaan_bangunan'];?></td>




                        <td> 
                          <div class="widget-content-right header-user-info ml-3">
                            <a href="cetak_laporan_plang.php?plang=<?php echo $row['id_sertifikat'] ?>" target="_blank">
                              <i class="fa fa-download fa-2x" aria-hidden="true"></i></a> 
                              </div>

                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>  

                  </div>
                </div>
              </div>
            </div>


