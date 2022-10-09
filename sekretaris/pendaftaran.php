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
                                                <th>Nama Pemohon</th>
                                                <th>Alamat</th>
                                                <th>Wilayah</th>
                                                <th>Permohonan Ijin</th>
                                                <th>Status_tanah</th>
                                                <th>Status</th>
                                                <th>Catatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                              <?php   
                              include 'config.php';
                              $query = "SELECT * FROM berkas_izin where status='sekretariat'";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                   <td><?php echo $no++ ?></td>
                                  <td><?php echo $row['nama_pemohon'];?></td>
                                  <td><?php echo $row['alamat_pemohon'];?></td>
                                  <td><?php echo $row['wilayah'];?></td>
                                  <td><?php echo $row['izin'];?></td>
                                  <td><?php echo $row['status_tanah'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  <td><?php echo $row['catatan'];?></td>

                                

                                <td> 
                                 <div class="widget-content-right header-user-info ml-3">
                                    <a class="btn btn-primary" href="index.php?p=lihat_berkas&id_pendaftaran=<?php echo $row['id_pendaftaran'];?>"><i class="fas text-white fa-eye fa-1x" aria-hidden="true"></i></a>
                                  <!-- <button type="lihat_berkas" name="lihat_berkas" class=" btn btn-primary">
                                    
                                  </button> -->
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
</div>