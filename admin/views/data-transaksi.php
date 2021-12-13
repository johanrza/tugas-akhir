<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Transaksi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light"><b>Pecinta</b>Uang</span><br>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="data-kategori.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Data Kategori</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="data-transaksi.php" class="nav-link active">
                <i class="nav-icon fas fa-file"></i>
                <p>Data Transaksi</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Hutang Piutang
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data-hutang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hutang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="data-piutang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Piutang</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="../models/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Transaksi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Data Transaksi</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus"></i> &nbsp Tambah Transaksi
                  </button><br><br>
                  <?php 
                    if(isset($_GET['alert'])){
                      if($_GET['alert']=='gagal'){
                  ?>
                  <button class="close toastsDefaultWarning"></button>
                  <?php
                        }elseif($_GET['alert']=="berhasil"){
                      ?>
                  <button class="close toastsDefaultSuccess"></button>
                  <?php
                        }elseif($_GET['alert']=="berhasilupdate"){
                      ?>
                  <button class="close toastsDefaultSuccessUpdate"></button>
                  <?php
                      }
                    }
                  ?>
                  <div class="box-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" required="required" class="form-control datepicker2">
                              </div>

                              <div class="form-group">
                                <label>Jenis</label>
                                <select name="jenis" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <option value="Pemasukan">Pemasukan</option>
                                  <option value="Pengeluaran">Pengeluaran</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required="required">
                                  <option value="">- Pilih -</option>
                                  <option value=""></option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Nominal</label>
                                <input type="number" name="nominal" required="required" class="form-control"
                                  placeholder="Masukkan Nominal ..">
                              </div>

                              <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" class="form-control" rows="3"></textarea>
                              </div>

                              <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" name="trnfoto" required="required" class="form-control">
                                <small>File yang di perbolehkan *PDF | *JPG | *jpeg </small>
                              </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="1%">NO</th>
                          <th>TANGGAL</th>
                          <th>KATEGORI</th>
                          <th>KETERANGAN</th>
                          <th>PEMASUKAN</th>
                          <th>PENGELUARAN</th>
                          <th>OPSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Trident</td>
                          <td>Internet Explorer 4.0</td>
                          <td>Win 95+</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                          <td>
                            <button type="button" class="btn btn-warning btn-sm" title="Edit Data" data-toggle="modal" data-target="#edit_transaksi_">
                              <i class="fa fa-cog"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal" data-target="#hapus_transaksi_">
                              <i class="fa fa-trash"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-sm" title="Lihat" data-toggle="modal" data-target="#lihat_transaksi_">
                              <i class="fa fa-eye"></i>
                            </button>

                            <!-- Modal update -->
                            <form action="transaksi_update.php" method="post" enctype="multipart/form-data">
                              <div class="modal fade" id="edit_transaksi_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title" id="exampleModalLabel">Edit Transaksi</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Tanggal</label>
                                        <input type="hidden" name="id" value="">
                                        <input type="date" style="width:100%" name="tanggal" required="required"
                                          class="form-control datepicker2" value="">
                                      </div>

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Jenis</label>
                                        <select name="jenis" style="width:100%" class="form-control"
                                          required="required">
                                          <option value="">- Pilih -</option>
                                          <option value="Pemasukan">Pemasukan</option>
                                          <option value="Pengeluaran">Pengeluaran</option>
                                        </select>
                                      </div>

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Kategori</label>
                                        <select name="kategori" style="width:100%" class="form-control"
                                          required="required">
                                          <option value="">- Pilih -</option>
                                        </select>
                                      </div>

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Nominal</label>
                                        <input type="number" style="width:100%" name="nominal" required="required"
                                          class="form-control" placeholder="Masukkan Nominal .." value="">
                                      </div>

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" style="width:100%" class="form-control"
                                          rows="4"></textarea>
                                      </div>

                                      <div class="form-group" style="width:100%;margin-bottom:20px">
                                        <label>Upload File</label>
                                        <input type="file" name="trnfoto" class="form-control"><br>
                                        <!-- <small></small> -->
                                        <p class="help-block">Bila File tidak dirubah kosongkan saja</p>
                                      </div>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Tutup</button>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <!--/Modal update -->

                            <!-- Modal hapus -->
                            <div class="modal fade" id="hapus_transaksi_" tabindex="-1"
                              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Hapus Data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini ?</p>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <a href="" class="btn btn-primary">Hapus</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer-tabel.php'; ?>
