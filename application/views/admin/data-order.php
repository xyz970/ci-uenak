<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->view('admin/css'); ?>
  <title>Data Order</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav ">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <!-- Notifications Dropdown Menu -->


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $this->session->userdata['nama']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-header">Data Pesanan</li>
            <li class="nav-item active">
              <a href="#" class="nav-link active">
                <i class="fas fa-money-bill-wave"></i>
                <p class="text">Data Pesanan</p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout') ?>">
                <i class="nav-icon fa fa-door-open text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="modal fade" id="tambah_pesanan">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="" style="padding-top: 2rem">
                      <form action="<?= base_url('admin/insertOrder') ?>" method="POST">
                        <input type="hidden" name="temp_id" value="">
                        <div class="">
                          <label class="" for="nama">Nama<span style="color: #a90011">*</span> </label>
                          <div class="">
                            <input class="form-control" data-input="nama" required name="nama" type="text">
                          </div>
                        </div>
                        <div class="">
                          <label class="" for="nomer_hp">Nomor HP <span style="color: #a90011">*</span> </label>
                          <div class="">
                            <input class="form-control" data-input="nomer_hp" required name="nomer_hp" type="text">
                            <small id="hpvalid" class="form-text text-muted invalid-feedback">
                              Format nomor salah
                            </small>
                          </div>
                        </div>
                        <div class="">
                          <label class="" for="nama">Nama Kue<span style="color: #a90011">*</span> </label>
                          <div class="">
                            <select name='kue' class="form-control">
                              <option></option>
                              <option value='blackforest'>Black Forest</option>
                              <option value='redvelvet'>Red Velvet</option>
                              <option value='lapislegit'>Lapis Legit</option>
                              <option value='bikaambon'>Bika Ambon</option>
                              <option value='rotitawar'>Roti Tawar</option>
                              <option value='puding'>Puding Cake Buah</option>
                            </select>
                          </div>
                        </div>
                        <div class="">
                          <label class="" for="jumlah">Jumlah Pesan<span style="color: #a90011">*</span> </label>
                          <div class="">
                            <input class="form-control" data-input="jumlah" required name="jumlah" type="text">
                          </div>
                        </div>
                        <div class="">
                          <label class="" for="catatan">Tambahan</label>
                          <div class="">
                            <textarea class="form-control" rows="3" cols="5" name="catatan" placeholder="Tulis Tambahan.."></textarea>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_pesanan">Tambah Pesanan</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="dataorder" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Pemesan</th>
                        <th>Nomor Hp</th>
                        <th>Kue</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Catatan</th>
                        <th>Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($pesanan as $key => $value) { ?>
                        <?php
                        if ($value->pembayaran == NULL) {?>
                          <div class="modal fade" id="bayar_pesanan<?=$value->id?>">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="" style="padding-top: 2rem">
                                  <form action="<?= base_url('admin/konfirmasi_pembayaran') ?>" method="POST">
                                    <input type="hidden" name="nama" value="<?=$value->nama_pemesan?>">
                                    <div class="">
                                      <label class="" for="Total">Total</label>
                                      <div class="">
                                        <input class="form-control" readonly data-input="total" value="<?= $value->total?>" required name="total" type="text">
                                      </div>
                                    </div>
                                    <div class="">
                                      <label class="" for="Bayar">Bayar</label>
                                      <div class="">
                                        <input class="form-control" data-input="bayar" required name="bayar" type="text">
                                      </div>
                                    </div>
                                </div>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <?php }?>
                        <!-- /.modal -->
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $value->nama_pemesan ?></td>
                          <td><?= $value->nomer_hp ?></td>
                          <td><?= $value->kue ?></td>
                          <td><?= $value->jumlah ?></td>
                          <td><?= $value->total ?></td>
                          <td><?= $value->catatan ?></td>
                          <td>
                            <button class="btn btn-danger" onclick="hapus(<?= $value->id ?>)"><i class="fa fa-trash"></i></button>
                            <button data-toggle="modal" data-target="#bayar_pesanan<?=$value->id?>" <?= $value->pembayaran != NULL ? "disabled " : " " ?> class="btn btn-info"><i class="fa fa-money-bill-wave"></i></button>

                          </td>
                        </tr>

                      <?php } ?>


                    </tbody>

                  </table>
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
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php $this->view('admin/script'); ?>
</body>

</html>