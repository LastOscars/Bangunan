          <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>LIST PENDAFTARAN</span>
                </a>
            </li>
        </ul>       
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="main-card mb-10 card">
                                <div class="card-body"><h5 class="card-title">Data Diri</h5>
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
                              $query = "SELECT * FROM berkas_izin ";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                    <td><?php echo $no++;  ?></td>
                                    <td><?php echo $row['Tanggal'];?></td>
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
</div>
