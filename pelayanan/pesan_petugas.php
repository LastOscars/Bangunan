            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
              <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                  <span>PESAN PETUGAS</span>
                </a>
              </li>
              <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                  <span>PESAN DARI PETUGAS</span>
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
                         <form class="" action="proses_tambah_pesan.php" method="POST" enctype="multipart/form-data">
                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10"><textarea name="pesan" id="alamat" class="form-control"></textarea></div>
                          </div>
                          <div class="form-group">
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Petugas</label>
                            <select class="col-sm-4" id="pesan" name="tujuan_petugas">
                              <option>Pilih Petugas</option>
                              <?php   
                          include 'config.php';
                          $query = "SELECT * FROM user";
                          $hasil_query = mysqli_query($koneksi, $query);
                          while ($row=mysqli_fetch_assoc($hasil_query)) 
                          {
                            ?>
                            <option value="<?php echo $row['id_user'] ?>"><?php echo $row['username'] ?>
                            </option>
                            <?php } ?>
                            </select>
                          </div>
                        </div>
                          <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Kesalahan berkas</label>
                            <div class="col-sm-10"><input name="kesalahan" id="exampleFile" type="file" class="form-control-file">
                              <small class="form-text text-muted">Upload File PDF</small>
                            </div>
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
                <div class="card-body"><h5 class="card-title">Tampilan Pesan</h5>
                                    <table class="mb-0 table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pesan</th>
                                                <th>Pesan Dari Petugas</th>
                                                <th>Kesalahan</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                              <?php   
                              include 'config.php';
                              $query = "SELECT * FROM pesan_petugas, user where pesan_petugas.id_user=user.id_user";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                    <td><?php echo $no++;  ?></td>
                                  <td><?php echo $row['pesan'];?></td>
                                  <td><?php echo $row['hak_akses'];?></td>
                                  <td><a href="./file/<?php echo $row['kesalahan'];?>"><?php echo $row['kesalahan'];?></a></td>
                                  
                                 

                               
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
                    
                    
                  </form>
                </div>
              </div>

            </div>
          
        </div>


