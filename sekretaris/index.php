<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
<?php 
include 'config.php';
$username = $_SESSION['username'];
$query = "SELECT * FROM user where username='$username'";
$hasil_query = mysqli_query($koneksi, $query);
$row=mysqli_fetch_array($hasil_query)                                 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Izin Mendirikan Bangunan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                          </div>
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="assets/images/avatars/admin.jpg" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                            Sekretaris
                                        </div>
                                    </div>
                                    <div class="widget-content-right header-user-info ml-3">
                                        <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                            <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>      
                          </div>
                    </div>
                </div>        
                <div class="ui-theme-settings">
                    <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                        <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
                    </button>

                </div>        
                <div class="app-main">
                    <div class="app-sidebar sidebar-shadow">
                        <div class="app-header__logo">
                            <div class="logo-src"></div>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>    <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">  

                                    <li class="app-sidebar__heading">Form</li>
                                    <li>
                                        <a href="index.php?p=pendaftaran">
                                            <i class="metismenu-icon pe-7s-mouse">
                                            </i>Berkas Izin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=pesan_petugas">
                                            <i class="metismenu-icon pe-7s-mouse">
                                            </i>Pesan Petugas
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?p=cek_status">
                                            <i class="metismenu-icon pe-7s-mouse">
                                            </i>Laporan Izin
                                        </a>
                                    </li>
                                    

                                </ul>
                            </div>
                        </div>
                    </div>    <div class="app-main__outer">
                        <div class="app-main__inner">
                            <?php
                            if (isset($_GET['p'])) {
                                $page = $_GET['p'];
                                switch ($page) {
                                    case 'home':   
                                    include "home.php";
                                    break;

                                    case 'pendaftaran':   
                                    include "pendaftaran.php";
                                    break;

                                    case 'pesan_petugas':   
                                    include "pesan_petugas.php";
                                    break;

                                    case 'cek_status':   
                                    include "cek_status.php";
                                    break;

                                    case 'lihat_berkas':    
                                    include "lihat_berkas.php";
                                    break;

                                    case 'revisi':    
                                    include "revisi.php";
                                    break;

                                    case 'saranaduan':    
                                    include "sardu.php";
                                    break;

                                     case 'edit_berita':    
                                    include "edit_berita.php";
                                    break;

                                     case 'edit_profil':    
                                    include "edit_profil.php";
                                    break;

                                    case 'edit_layanan':    
                                    include "edit_layanan.php";
                                    break;




                                    default:    
                                    echo "Maaf halaman tidak ditemukan";
                                    break;
                                }
                            }else {

                                include"home.php";

                            }


                            ?>             
                        </div>
                    </div>

                </div>




                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a> 
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="logout.php">Logout</a>
                  </div>
              </div>
          </div>
      </div>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
