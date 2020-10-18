<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIPANCO-19 Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets_admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets_admin/vendors/css/vendor.bundle.base.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets_admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo esc_url(base_url()); ?>assets_admin/images/favicon.png" />

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo esc_url(base_url('Dashboard')); ?>"><img src="<?php echo esc_url(base_url()); ?>assets_admin/images/logo_admin.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo esc_url(base_url('Dashboard')); ?>"><img src="<?php echo esc_url(base_url()); ?>assets_admin/images/favicon.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo esc_url(base_url()); ?>assets_admin/images/user.png" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?php echo esc_html($userdata->nama);?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo esc_url(base_url('Profil'))?>">
                <i class="mdi mdi-account-settings mr-2 text-success"></i>
                Profil
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal_logout">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo esc_url(base_url()); ?>assets_admin/images/user.png" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <?php $name = explode(" ", $userdata->nama);?> 
                <span class="font-weight-bold mb-2"><?php echo esc_html($name[0]);?></span>
                <span class="text-secondary text-small"><?php echo esc_html($userdata->username);?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url(base_url())?>" target="_blank">
              <span class="menu-title">SIPANCO-19</span>
              <i class="mdi mdi-white-balance-sunny menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url(base_url('Dashboard'))?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Data Warga RT 05</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi mdi-account-multiple menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo esc_url(base_url('Penduduk/kk'))?>">Data KK</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo esc_url(base_url('Penduduk/all'))?>">Data Seluruh Penduduk</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Data Pelaporan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo esc_url(base_url('Pelaporan/dalam_negeri'))?>">Antar Kota</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo esc_url(base_url('Pelaporan/luar_negeri'))?>">Luar Negeri</a></li>
                
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url(base_url('Petugas'))?>">
              <span class="menu-title">Petugas RT</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>
                  
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo esc_url(base_url()); ?>assets_admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">KK
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo esc_html($jumlah_kk);?></h2>
                  <h6 class="card-text">Total KK di Lingkungan RT 05/RW VII</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo esc_url(base_url()); ?>assets_admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h4 class="font-weight-normal mb-3">Warga
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo esc_html($jumlah_warga);?></h2>
                  <h6 class="card-text">Total Warga di Lingkungan RT 05/RW VII</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo esc_url(base_url()); ?>assets_admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h4 class="font-weight-normal mb-3">Pelaporan
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo esc_html($jumlah_pelaporan);?></h2>
                  <h6 class="card-text">Total Warga RT 05/RW VII yang Melapor Pasca Bepergian Selama Pandemi Covid-19</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pelaporan Terbaru</h4>
                  <p class="card-description">
                    Data Pelaporan Terbaru Warga RT 05/RW VII Pasca Bepergian Selama Pandemi Covid-19
                  </p>
                  <table class="table table-striped" >
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Warga</th>
                        <th>Riwayat Bepergian</th>
                        <th>Tanggal Kedatangan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                      if(empty($pelaporan_terbaru)){
                        ?>
                        <tr><td colspan="6" style="text-align: center;">Tidak ada pelaporan terbaru</td></tr>
                      <?php }else{
                        $no = 1;
                        foreach ($pelaporan_terbaru as $pelaporan){?>
                          <tr>
                            <td><?php echo esc_html($no);?></td>
                            <td><?php echo esc_html($pelaporan->nama);?></td>
                            
                            <?php if($pelaporan->status == "1"){?>
                              <td>Warga Tetap</td>
                            <?php }else{?>
                              <td>Anak Kos/Pendatang</td>
                            <?php }?>
                            
                            <?php if($pelaporan->country_name == "Indonesia"){?>
                              <td><?php echo esc_html($pelaporan->provinsi.', '.$pelaporan->kota_kabupaten);?></td>
                            <?php }else{?>
                              <td><?php echo esc_html($pelaporan->country_name);?></td>
                            <?php }?>
                            
                            <?php $tanggal_mulai = tanggal(int($pelaporan->tanggal_mulai[8].$pelaporan->tanggal_mulai[9]), int($pelaporan->tanggal_mulai[5].$pelaporan->tanggal_mulai[6]), int($pelaporan->tanggal_mulai[0].$pelaporan->tanggal_mulai[1].$pelaporan->tanggal_mulai[2].$pelaporan->tanggal_mulai[3])); ?>
                            <td><?php echo esc_html($tanggal_mulai);?></td>
                            
                            <?php if($pelaporan->pemantauan <= 14){?>
                              <td><label class="badge badge-danger"><?php echo esc_html("Pemantauan Hari Ke-".$pelaporan->pemantauan);?></td>
                            <?php }else{?>
                              <td><label class="badge badge-success">Selesai Pemantauan</td>
                            <?php }?>
                          </tr>
                          <?php $no++;}}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=" footer py-3">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>
            <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> KKN TIM II UNDIP KABUPATEN SEMARANG <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Modals logout -->  
  <div class="modal fade" id="modal_logout" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin Logout?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                <a href="<?php echo esc_url(base_url('Login/logout'))?>" class="btn btn-info">Ya, Logout</a>
            </div>
        </div>
      </div>
  </div>
  <!-- plugins:js -->
  <script src="<?php echo esc_url(base_url()); ?>assets_admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo esc_url(base_url()); ?>assets_admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo esc_url(base_url()); ?>assets_admin/js/off-canvas.js"></script>
  <script src="<?php echo esc_url(base_url()); ?>assets_admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo esc_url(base_url()); ?>assets_admin/js/dashboard.js"></script>

  <!-- End custom js for this page-->

  
</body>

</html>
