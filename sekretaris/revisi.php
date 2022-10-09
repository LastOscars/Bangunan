<?php
$id_pendaftaran = $_GET['id_pendaftaran'];
$query = "SELECT * FROM berkas_izin where id_pendaftaran='$id_pendaftaran'";
$hasil_query = mysqli_query($koneksi, $query);
$row1=mysqli_fetch_array($hasil_query)                            
?>           
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
              <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                  <span>PESAN TOLAK BERKAS</span>
                </a>
              </li>
              
              
            </ul>       
            <div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                  <div class="card-body">
                    <div class="col-lg-12">
                      <div class="main-card mb-10 card">
                        <div class="card-body"><h5 class="card-title">PESAN TOLAK BERKAS</h5>
                         <form class="" action="proses_tolak_sekretariat.php" method="POST" enctype="multipart/form-data">
                         <input type="hidden" name="id_pendaftaran" value="<?php echo $row1['id_pendaftaran']; ?>"></input>
                          <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Pesan Tolak</label>
                            <div class="col-sm-10"><textarea name="catatan" id="catatan" class="form-control"></textarea></div>
                          </div>
                          
                          



                          <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                              <button type="submit" class="btn btn-primary" name="tolak">KIRIM</button>
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
          
        </div>


