            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
              <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                  <span>LAPORAN BERKAS IMB</span>
                </a>
              </li>
              <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                  <span>LAPORAN IMB SELESAI</span>
                </a>
              </li>
              <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                  <span>LAPORAN SURAT IZIN SELESAI</span>
                </a>
              </li>
               <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                  <span>LAPORAN PLANG TERCETAK</span>
                </a>
              </li>
              
            </ul>       
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <div class="col-lg-12">
                      <div class="main-card mb-10 card">
                        <div class="card-body"><h5 class="card-title">LAPORAN SELESAI IMB</h5>
                          <table class="mb-0 table table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pemohon</th>
                                <th>Alamat</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten</th>
                                <th>Status</th>
                                <th>Catatan</th>

                              </tr>
                            </thead>

                            <tbody>
                              <?php   
                              include 'config.php';
                              $query = "SELECT * FROM berkas_izin";
                              
                              $hasil_query = mysqli_query($koneksi, $query);
                               $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query))


                              {
                                ?>
                                <tr>
                                  <td><?php echo $no++;  ?></td>
                                   <td><?php echo date('d-m-Y', strtotime($row['Tanggal'])) ;?></td>
                                  <td><?php echo $row['nama_pemohon'];?></td>
                                  <td><?php echo $row['alamat_pemohon'];?></td>
                                  <td><?php echo $row['desa_pemohon'];?></td>
                                  <td><?php echo $row['kecamatan_pemohon'];?></td>
                                  <td><?php echo $row['kabupaten_pemohon'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  <td><?php echo $row['catatan'];?></td>
                                  
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
                </div>

              </div>
              <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
               <div class="card-header">
                      LAPORAN TAHUNAN IMB
                    </div>
                    <div class="card-body">
                      <form action="cetak_laporan_tahunan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-3">
                              <label>Tahun</label>
                              <select class="form-control" name="tahun">
                                <?php
                                $mulai= date('Y') - 50;
                                for($i = $mulai;$i<$mulai + 100;$i++){
                                  $sel = $i == date('Y') ? ' selected="selected"' : '';
                                  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                }
                                ?>
                              </select>
                            </div>
                            
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="cetak_tahun" value="Cetak">
                      </form>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header">
                      LAPORAN MINGGUAN IMB
                    </div>
                    <div class="card-body">
                      <form action="cetak_laporan_seluruh_mingguan.php" method="post">
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-3">
                              <label>Dari</label>
                              <input type="date" class="form-control" id="dariTgl" name="dariTgl" required>
                            </div>
                            <div class="col-md-3">
                              <label>Sampai</label>
                              <input type="date" class="form-control" id="sampaiTgl" name="sampaiTgl" required>
                            </div>
                            
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="cetak_mingguan" value="Cetak">
                      </form>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-header">
                      LAPORAN BULANAN IMB
                    </div>
                    <div class="card-body">
                      <form action="cetak_laporan_seluruh_bulanan.php" method="post">
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-3">
                              <label>Bulan</label>
                              <select class="form-control" name="bulan" required>
                                <option></option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label>Tahun</label>
                              <select class="form-control" name="tahun">
                                <?php
                                $mulai= date('Y') - 50;
                                for($i = $mulai;$i<$mulai + 100;$i++){
                                  $sel = $i == date('Y') ? ' selected="selected"' : '';
                                  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                }
                                ?>
                              </select>
                            </div>
                            
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="cetak_bulan" value="Cetak">
                      </form>
                    </div>
                  </div>
                </div>
                  <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <div class="main-card mb-3 card">
              <div class="card-body"><h5 class="card-title">LAPORAN SURAT IZIN</h5>
                 <table class="mb-0 table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Lokasi Bangunan</th>
                                                <th>Kondisi Bangunan</th>
                                                <th>Tingkat Bangunan</th>
                                                <th>Ukuran Bangunan</th>
                                                <th>Diatas Bangunan</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                              <?php   
                              include 'config.php';
                              $query = "SELECT * FROM history_sertifikat";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                    <td><?php echo $no++;  ?></td>
                                  <td><?php echo date('d-m-Y', strtotime($row['ttanggal'])) ;?></td>
                                  <td><?php echo $row['tnama'];?></td>
                                  <td><?php echo $row['talamat'];?></td>
                                  <td><?php echo $row['tlokasi_bangunan'];?></td>
                                  <td><?php echo $row['tkondisi_bangunan'];?></td>
                                  <td><?php echo $row['ttingkat_bangunan'];?></td>
                                  <td><?php echo $row['tukuran_bangunan'];?></td>
                                  <td><?php echo $row['tdiatas_tanah'];?></td>
                                  <td><?php echo $row['tstatus'];?></td>
                                  
                                 

                                
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
              <h5 class="card-title">LAPORAN YANG SUDAH TERCETAK</h5>
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
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                              <?php   
                              include 'config.php';
                              $query = "SELECT * FROM history_plang_imb";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                    <td><?php echo $no++;  ?></td>
                                   <td><?php echo date('d-m-Y', strtotime($row['ttgl_imb'])) ;?></td>
                                  <td><?php echo $row['tlokasi_imb'];?></td>
                                  <td><?php echo $row['tkegiatan'];?></td>
                                  <td><?php echo $row['tpenggunaan'];?></td>
                                 
                                  <td><?php echo $row['tjumlah_lantai'];?></td>
                                  <td><?php echo $row['tperencanaan_bangunan'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  
                                 
                                  
                               
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

            </div>



          </form>
        </div>
      </div>

    </div>

  </div>


