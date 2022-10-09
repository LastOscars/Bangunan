          <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>BERKAS IZIN PEMOHON</span>
                </a>
            </li>
        </ul>       
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="main-card mb-10 card">
                                <div class="card-body"><h5 class="card-title">Pendaftaran Permohonan IMB</h5>
                                    <table class="mb-0 table table-bordered">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                                <th>Nama Pemohon</th>
                                                <th>Alamat</th>
                                                <th>Desa</th>
                                                <th>Kecamatan Pemohon</th>
                                                <th>Kabupaten Pemohon</th>
                                                <th>Wilayah</th>
                                                <th>Jalan</th>
                                                <th>Desa</th>
                                                <th>Status Tanah</th>
                                                <th>Permohonan Izin</th>
                                                <th>Nama Perwakilan</th>
                                                <th>Jabatan Perwakilan</th>
                                                <th>Jabatan Perwakilan</th>
                                                <th>Jabatan Perwakilan</th>
                                                <th>Surat Kuasa</th>
                                                <th>Foto Copy KTP</th>
                                                <th>Foto Copy Akta Pendirian Perusahaan</th>
                                                <th>Foto Copy Sertifikat Non Pertanian</th>
                                                <th>Foto Copy Ijin Lokasi</th>
                                                <th>Foto Copy Gambar Teknis</th>
                                                <th>Foto Copy SPPT PBB</th>
                                                <th>Aksi</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                              <?php   
                              include 'config.php';
                              $id = $_GET['id_pendaftaran'];
                              $query = "SELECT * FROM berkas_izin where id_pendaftaran='$id'";
                              $hasil_query = mysqli_query($koneksi, $query);
                              $no=1;
                              while ($row=mysqli_fetch_assoc($hasil_query)) 
                              {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                  <td><?php echo $row['nama_pemohon'];?></td>
                                  <td><?php echo $row['alamat_pemohon'];?></td>
                                  <td><?php echo $row['desa_pemohon'];?></td>
                                  <td><?php echo $row['kecamatan_pemohon'];?></td>
                                  <td><?php echo $row['kabupaten_pemohon'];?></td>
                                  <td><?php echo $row['wilayah'];?></td>
                                  <td><?php echo $row['jalan'];?></td>
                                  <td><?php echo $row['desa'];?></td>
                                  <td><?php echo $row['status_tanah'];?></td>
                                  <td><?php echo $row['izin'];?></td>
                                  <td><?php echo $row['nama_perwakilan'];?></td>
                                  <td><?php echo $row['alamat_perwakilan'];?></td>
                                  <td><?php echo $row['telepon_perwakilan'];?></td>
                                  <td><?php echo $row['jabatan_perwakilan'];?></td>
                                  <td><?php echo $row['surat_kuasa'];?></td>
                                  <td><a href="../datapdf/<?php echo $row['FC_KTP'];?>"><?php echo $row['FC_KTP'];?></a></td>
                                  <td><a href="../datapdf/<?php echo $row['FC_APP'];?>"><?php echo $row['FC_APP'];?></a></td>
                                  <td><a href="../datapdf/<?php echo $row['FC_SNP'];?>"><?php echo $row['FC_SNP'];?></a></td>
                                 <td><a href="../datapdf/<?php echo $row['FC_IK'];?>"><?php echo $row['FC_IK'];?></a></td>
                                  <td><a href="../datapdf/<?php echo $row['gambar_teknis'];?>"><?php echo $row['gambar_teknis'];?></a></td>
                                  <td><a href="../datapdf/<?php echo $row['FC_SPPT'];?>"><?php echo $row['FC_SPPT'];?></a></td>
                                  <td> 
                             <div class="widget-content-right header-user-info ml-3">
                              <a href="proses_kirim_berkas.php?id_pendaftaran=<?php echo $row['id_pendaftaran'];?>">
                              <i class="fa fa-share fa-2x" aria-hidden="true"></i></a>
                              <a  href="index.php?p=revisi&id_pendaftaran=<?php echo $row['id_pendaftaran'];?>"><i class="fas fa-recycle fa-2x" aria-hidden="true"></i></a>
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
