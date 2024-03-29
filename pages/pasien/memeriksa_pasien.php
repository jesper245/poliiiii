
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Poli</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .card-header {
      background-color: #3081D0; /* Adjust this value as needed */
      color: white; /* This will make the text color white */
      width: 100%; /* Adjust this value as needed */
      height: 10%; /* Adjust this value as needed */
      margin: 0 auto; /* This will center the card if it's less than 100% width */
      border-radius: 10px; /* Adjust this value as needed */
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .card-header, .login-box-msg {
      text-align: left;
    }
    .register-logo {
      text-align: left;
    }
      .register-box {
      width: 100%;
    }
    .register-card-body {
      width: 100%;
    }
    .table {
      width: 100%;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Daftar Pasien</b></a>
  </div>

  <div class="card-header">
      <h3><p class="login-box-msg">Daftar pasien</p></h3>
  </div>


  <div class="card">
    <div class="card-body register-card-body">
      <form action="memeriksa_pasien_proses.php" method="post">
      <b>Nama pasien</b>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama_pasien" name="no_rm">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>


        <?php
          include  "conf/conn.php";
          $sql="SELECT nama_pasien FROM periksa";
          //echo $sql;
          $query = "SELECT nama_pasien FROM periksa";
          $result = $conn->query($query);?>
          
          

        </div>
        <b>tanggal periksa</b>
        <div class="input-group mb-3">

        <?php
          include  "conf/conn.php";
          $sql="SELECT tgl_periksa FROM periksa";
          //echo $sql;
          $query = "SELECT tgl_periksa FROM periksa";
          $result = $conn->query($query);

          $poli_options = [];
          while ($row = $result->fetch_assoc()) {;
          }
          $conn->close(); ?>
          <select name="id" class="form-control" placeholder="Daftar Poli" required>
            <?php 
            $jadwal = $hari . $jam_mulai . $jam_selesai;
            foreach ($poli_options as $id => $jadwal) {
                echo '<option value="' . $id . '">' . $jadwal . '</option>';} ?>
          </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>

        <div class="card">
    <div class="card-body register-card-body">
      <form action="memeriksa_pasien_proses.php" method="post">
      <b>catatan</b>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="catatan" name="no_rm">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>



        <?php
          include  "conf/conn.php";
          $sql="SELECT catatan FROM periksa";
          //echo $sql;
          $query = "SELECT catatan FROM periksa";
          $result = $conn->query($query);
           ?>

<div class="card">
    <div class="card-body register-card-body">
      <form action="memeriksa_pasien_proses.php" method="post">
      <b>obat</b>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="obat" name="no_rm">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>



        <?php
          include  "conf/conn.php";
          $sql="SELECT obat FROM periksa";
          //echo $sql;
          $query = "SELECT obat FROM periksa";
          $result = $conn->query($query);
           ?>

        <div class="row">
          <!-- /.col -->
          <div class="col-3">
            <button type="submit" class="btn btn-primary btn-block">periksa</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>