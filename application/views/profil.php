<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIPANCO-19 Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/vendors/css/vendor.bundle.base.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/css/style.css">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  

  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>assets_admin/images/favicon.png" />

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url('Dashboard'); ?>"><img src="<?= base_url(); ?>assets_admin/images/logo_admin.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('Dashboard'); ?>"><img src="<?= base_url(); ?>assets_admin/images/favicon.png" alt="logo"/></a>
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
                <img src="<?= base_url(); ?>assets_admin/images/user.png" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?= $userdata->nama?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?= base_url('Profil')?>">
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
                <img src="<?= base_url(); ?>assets_admin/images/user.png" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <?php $name = explode(" ", $userdata->nama);?> 
                <span class="font-weight-bold mb-2"><?= $name[0]?></span>
                <span class="text-secondary text-small"><?=$userdata->username?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>" target="_blank">
              <span class="menu-title">SIPANCO-19</span>
              <i class="mdi mdi-white-balance-sunny menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Dashboard')?>">
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
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('Penduduk/kk')?>">Data KK</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('Penduduk/all')?>">Data Seluruh Penduduk</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('Pelaporan/dalam_negeri')?>">Antar Kota</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('Pelaporan/luar_negeri')?>">Luar Negeri</a></li>
                
              </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Petugas')?>">
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
                <i class="mdi mdi-account-settings"></i>                 
              </span>
              Profil
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Profil Admin</h4>  
                  <a onclick="myFunction()" href="#">   
                    <div id="myDIV">
                      <?php echo show_msg($this->session->flashdata('msg'));?>
                    </div>
                  </a>
                  <div class="tabs">
                    <ul role="tablist" class="nav nav-tabs">
                      <li class="nav-item"><a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Detail Profil</a></li>
                      <li class="nav-item"><a class="nav-link" href="#password" role="tab" data-toggle="tab">Ubah Password</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <br>
                        <form class="forms-sample" id="form_profil" action="<?= base_url('Profil/editProfil')?>" method="post">
                          <input type="hidden" class="form-control" id="id" name="id" value="<?= $userdata->id?>" >
                          <div class="form-group">
                            <label for="exampleInputNIK">NIK</label>
                            <input type="text" class="form-control" id="NIK" name="NIK" placeholder="NIK" value="<?= $userdata->NIK?>" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $userdata->username?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputNama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $userdata->nama?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputRole">Role</label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Role" value="<?= $userdata->role?>" disabled>
                          </div>                          
                          <button type="submit" class="btn btn-gradient-primary mr-2">Edit Profil</button>
                        </form>
                      </div>
                      <div class="tab-pane" id="password">
                        <form class="forms-sample" id="form_password" action="<?= base_url('Profil/editPassword')?>"  method="post">
                          <input type="hidden" class="form-control" id="id" name="id" value="<?= $userdata->id?>" >
                          <br>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password Saat Ini</label>
                            <input type="password" class="form-control" id="password_saat_ini" name="password_saat_ini" placeholder="Masukkan Password Anda">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" onclick="show_password()"class="form-check-input">
                                Tampilkan Password
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Password Baru</label>
                            <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru Anda">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" onclick="show_password2()"class="form-check-input">
                                Tampilkan Password
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password Baru Anda">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" onclick="show_password3()"class="form-check-input">
                                Tampilkan Password
                              </label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-gradient-primary mr-2">Edit Password</button>
                        </form>
                      </div>
                    </div>
                  </div>
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
                <a href="<?= base_url('Login/logout')?>" class="btn btn-info">Ya, Logout</a>
            </div>
        </div>
      </div>
  </div>
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

  <script src="<?= base_url(); ?>assets_admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>assets_admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>assets_admin/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>assets_admin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url(); ?>assets_admin/js/dashboard.js"></script>

  <script>
        function show_password(){
          var password = document.getElementById('password_saat_ini');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }
        function show_password2(){
          var password = document.getElementById('password_baru');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }
        function show_password3(){
          var password = document.getElementById('konfirmasi_password');
          if (password.type === "password") {
            password.type = "text"
          }
          else{
            password.type = "password";
          }
        }

        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
  </script>

  <!-- End custom js for this page-->

  
</body>

</html>
