<?php 
session_start();
include 'config.php';
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM user WHERE username=? AND password=?";
  $stmt = mysqli_prepare($koneksi, $query);
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  $sukses = mysqli_stmt_execute($stmt);
  $hasil_query = mysqli_stmt_get_result($stmt);
  $cek = mysqli_num_rows($hasil_query);
        // echo $data['username'];
  if($cek > 0){

    $data = mysqli_fetch_assoc($hasil_query);

  // cek jika user login sebagai admin
    if($data['hak_akses']=="verifikasi"){

    // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['hak_akses'] = "kasi_verifikasi";
    // alihkan ke halaman dashboard admin
      header("location:verfikasi/index.php");

  // cek jika user login sebagai pegawai
    }else if($data['hak_akses']=="kasi_pemrosesan"){
    // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['hak_akses2'] = "kasi_pemrosesan";
    // alihkan ke halaman dashboard pegawai
      header("location:pemrosesan/index.php");

  // cek jika user login salah
    }
    else if($data['hak_akses']=="pelayanan"){
    // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['hak_akses3'] = "pelayanan";
    // alihkan ke halaman dashboard pegawai
      header("location:pelayanan/index.php");

  // cek jika user login salah
    }    else if($data['hak_akses']=="sekretariat"){
    // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['hak_akses4'] = "sekretariat";
    // alihkan ke halaman dashboard pegawai
      header("location:sekretaris/index.php");
    }
    else{

    //alihkan ke halaman login kembali
      echo "<script>alert('Username dengan Password tidak cocok, silakan login kembali!')</script>";
      echo "<script>window.location = 'index.php'</script>";
    } 
  }else{
    echo "<script>alert('Username dengan Password tidak cocok, silakan login kembali !')</script>";
    echo "<script>window.location = 'index.php'</script>";
  }
}
?>
<!DOCTYPE html>
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
<link href="main.css" rel="stylesheet"></head>


<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
            <label for="username">Username</label>
              <input type="text" id="username" class="form-control" placeholder="username" name="username">
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="inputPassword">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
              
            </div>
          </div>
          
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
      
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=".vendor/jquery/jquery.min.js"></script>
  <script src=".vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src=".vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
