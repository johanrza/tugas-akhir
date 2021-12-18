<?php include '../cekpegawai.php';?>
<?php include 'header.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php
              include '../connection.php';
              $masuk = mysqli_query($kon, "SELECT sum(nominal_transaksi) as tot_masuk FROM tb_transaksi WHERE jenis_transaksi='Pemasukan'");
              $data = mysqli_fetch_assoc($masuk);
              ?>
              <h4><?= "Rp. ".number_format($data['tot_masuk'])." ,-" ?></h4>

              <p>Total Pemasukan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="views/data-transaksi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              include '../connection.php';
              $keluar = mysqli_query($kon, "SELECT sum(nominal_transaksi) as tot_keluar FROM tb_transaksi WHERE jenis_transaksi='Pengeluaran'");
              $data = mysqli_fetch_assoc($keluar);
              ?>
              <h4><?= "Rp. ".number_format($data['tot_keluar'])." ,-" ?></h4>

              <p>Total Pengeluaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="views/data-transaksi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <?php
              include '../connection.php';
              $hutang = mysqli_query($kon, "SELECT sum(nominal_hutang) as tot_hutang FROM tb_hutang");
              $data = mysqli_fetch_assoc($hutang);
              ?>
              <h4><?= "Rp. ".number_format($data['tot_hutang'])." ,-" ?></h4>

              <p>Total Hutang</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="views/data-hutang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <?php
              include '../connection.php';
              $piutang = mysqli_query($kon, "SELECT sum(nominal_piutang) as tot_piutang FROM tb_piutang");
              $data = mysqli_fetch_assoc($piutang);
              ?>
              <h4><?= "Rp. ".number_format($data['tot_piutang'])." ,-" ?></h4>


              <p>Total Piutang</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="views/data-piutang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </div>
  </section>
  <!-- /.content -->
</div>
<?php include 'footer.php';?>