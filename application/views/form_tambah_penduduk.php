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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->

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
                <p class="mb-1 text-black"><?php echo esc_html($userdata->nama)?></p>
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
                <span class="font-weight-bold mb-2"><?php echo esc_html($name[0])?></span>
                <span class="text-secondary text-small"><?php echo esc_html($userdata->username)?></span>
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
                <i class="mdi mdi-account-multiple menu-icon"></i>                 
              </span>
              Tambah Data KK
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  
                </li>
              </ul>
            </nav>
          </div>
          
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" id="form_profil" action="<?php echo esc_attr(base_url('Penduduk/proses_tambah_kk'))?>">
                    <div class="form-group">
                      <label for="no_kk">Nomor KK</label>
                      <input type="text" class="form-control" id="nomorKK" name="no_kk" placeholder="Nomor KK" onkeypress="return isNumber(event)" required="true" minlength="16" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="nik_kk">NIK Kepala Keluarga</label>
                      <input type="text" class="form-control" id="nik_kk_1" name="nik_kk_1" placeholder="NIK Kepala Keluarga" onkeypress="return isNumber(event)" required="true" minlength="16" maxlength="16">
                    </div>
                    <div class="form-group">
                      <label for="nama_kk">Nama Kepala Keluarga</label>
                      <input type="text" class="form-control" id="nama_kk_1" name="nama_kk_1" placeholder="Nama Kepala Keluarga" required="true">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Jumlah Anggota Keluarga (Tidak termasuk kepala keluarga)</label>
                        <input type="number" class="form-control" id="jum_kk" name="jum_kk" placeholder="Jumlah Anggota Keluarga (Tidak termasuk kepala keluarga)" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="true">
                    </div>
                    <div id="container"></div>
                    
                    <button type="submit" name="button_tambah_kk" class="btn btn-gradient-primary mr-2">Tambah Data</button>
                    <a href="<?php echo esc_url(base_url('Penduduk/kk'))?>" class="btn btn-gradient-danger">Batal</a>
                  </form>
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script type="text/javascript">
      function isNumber(evt) {
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
          }
          return true;
      }

      $('#jum_kk').on('change keyup',function(){
        let inputs = '';
        let value = parseInt($(this).val());
        for(let i = 1;i<=value;i++){
          inputs += `<div class="form-group">
                      <label for="nik_kk">NIK Anggota Keluarga ${i}</label>
                      <input type="number" class="form-control" id="nik_kk_${i+1}" name="nik_kk_${i+1}" placeholder="NIK Kepala Keluarga" onkeypress="return isNumber(event)" minlength="16" maxlength="16" required="true">
                    </div>
                    <div class="form-group">
                      <label for="nama_kk">Nama Anggota Keluarga ${i}</label>
                      <input type="text" class="form-control" id="nama_kk_${i+1}" name="nama_kk_${i+1}" placeholder="Nama Kepala Keluarga" required="true">
                    </div>` 
        }
        $('#container').html(inputs)

      })
  </script>

  
</body>

</html>
