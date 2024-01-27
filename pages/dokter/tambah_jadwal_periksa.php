<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH JADWAL PERIKSA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH JADWAL </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/dokter/tambah_jadwal_periksa_proses.php">
              <div class="box-body">
              <form method="post" action="tambah_jadwal_periksa_proses.php">
                  <!-- elemen formulir lainnya -->
                  <label for="id_dokter">ID Dokter:</label>
                  <input type="text" name="id_dokter" id="id_dokter">
                  <!-- elemen formulir lainnya -->
                  <input type="submit" value="Submit">
                </form>
              <div class="form-group">
                  <label>Hari</label>
                  <select name="hari" class="form-control" placeholder="Hari" required>
                    <option value="1"> senin <option>
                      <option value="2"> selasa <option>
                      <option value="3"> rabu <option>
                      <option value="4"> kamis <option>
                      <option value="5"> jumat <option>
                      <option value="6"> sabtu <option>
                      <option value="7"> minggu <option>
                  </select>
                <div class="form-group">
                <label>Jam Mulai</label>
                  <input type="time" name="jam_mulai" class="form-control" value="<?php echo $row['jam_mulai']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Jam Selesai</label>
                  <input type="time" name="jam_selesai" class="form-control" value="<?php echo $row['jam_selesai']; ?>" required>
                </div>	
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->