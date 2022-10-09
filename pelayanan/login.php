<?php 
session_start();
include 'config.php';
if (isset($_POST['login'])) {
    $query = "SELECT * FROM user WHERE username=? AND password=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ss", $_POST['username'], $_POST['password']);
    $sukses = mysqli_stmt_execute($stmt);
    $hasil_query = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($hasil_query);
        // echo $data['username'];
    if ($data['username'] == $_POST['username']) {
        $_SESSION["username"] = $data['username'];
        $_SESSION["hak_akses"] = $data['hak_akses'];
        header("location: index.php");
    }else{
        echo "<script>alert('Username dengan password tidak cocok, silakan login kembali!')</script>";
        echo "<script>window.location = 'login.php'</script>";
    }
        // header("location: index2.php");
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
<link href="./main.css" rel="stylesheet"></head>


<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
            
              <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="username">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-success">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="#">Forgot Password?</a>
        </div>
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
