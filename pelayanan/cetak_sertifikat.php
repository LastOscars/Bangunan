            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
              <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-1">
                  <span>LAPORAN IZIN IMB</span>
                </a>
              </li>
              
            </ul>       
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <div class="col-lg-12">
                      <div class="main-card mb-10 card">
                        <div class="card-body"><h5 class="card-title">PESAN PETUGAS</h5>
                         <table class="mb-0 table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>No Registrasi</th>
                              <th>Tanggal Terima</th>
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
                            while ($row=mysqli_fetch_assoc($hasil_query)) 
                            {
                              ?>
                              <tr>
                                <td><?php echo $row['id_pendaftaran'];?></td>
                                <td><?php echo $row['no_register'];?></td>
                                <td><?php echo $row['Tanggal'];?></td>
                                <td><?php echo $row['nama_pemohon'];?></td>
                                <td><?php echo $row['alamat_pemohon'];?></td>
                                <td><?php echo $row['desa_pemohon'];?></td>
                                <td><?php echo $row['kecamatan_pemohon'];?></td>
                                <td><?php echo $row['kabupaten_pemohon'];?></td>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo $row['catatan'];?></td>


                                <td> 
                                  <div class="widget-content-right header-user-info ml-3">
                                    <a href="index.php?p=lihat_berkas&id_pendaftaran=<?php echo $row['id_pendaftaran'];?>">
                                      <button type="lihat_berkas" name="lihat_berkas" class=" btn btn-primary">
                                        <i class="fa text-white fa-edit pr-1 pl-1"></i></a>
                                      </button>
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
                </div>

              </div>
              <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                 <div class="card-header">
                    LAPORAN HARIAN
                  </div>
                  <div class="card-body">
                    <form action="cetak_laporan_harian.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-3">
                            <label>Masukkan tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                          </div>
                          
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary" name="cetak" value="Cetak">
                    </form>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-header">
                    LAPORAN MINGGUAN
                  </div>
                  <div class="card-body">
                    <form action="cetak_laporan_mingguan.php" method="post" enctype="multipart/form-data">
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
                      <input type="submit" class="btn btn-primary" name="cetak" value="Cetak">
                    </form>
                  </div>
                </div>
                <div class="card mb-3">
                  <div class="card-header">
                    LAPORAN BULANAN
                  </div>
                  <div class="card-body">
                    <form action="cetak_laporan_bulanan.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-md-3">
                            <label>Bulan</label>
                            <select class="form-control" name="bulan" required>
                              <option></option>
                              <option value="01">Januari</option>
                              <option value="02">Februari</option>
                              <option value="03">Maret</option>
                              <option value="04">April</option>
                              <option value="05">Mei</option>
                              <option value="06">Juni</option>
                              <option value="07">Juli</option>
                              <option value="08">Agustus</option>
                              <option value="09">September</option>
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
                      <input type="submit" class="btn btn-primary" name="cetak" value="Cetak">
                    </form>
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
</div>


