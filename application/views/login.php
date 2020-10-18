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
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>assets_admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller" >
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth" style="background: url('<?= base_url()?>assets/image/banner_bg.jpg') no-repeat scroll center 0/cover">
        <div class="row w-100" >
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?=base_url(); ?>assets_admin/images/logo.png">
              </div>
              <h4>Login</h4>

              <h6 class="font-weight-light">Masukkan username dan password</h6>
              <form class="pt-3" id="loginForm" action="<?= base_url('Login/login')?>" method="post" >
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mb-3">
                  
                  <button type="submit" value="submit" class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <?php
                  echo show_err_msg($this->session->flashdata('error_msg'));
                ?>              
                <div class="mb-2">
                  <a class="btn btn-block btn-gradient-danger btn-lg font-weight-medium auth-form-btn" href="<?= base_url()?>">Kembali ke Halaman Utama</a>
                    
                  
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>assets_admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>assets_admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>assets_admin/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>assets_admin/js/misc.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/contact.js"></script>
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>
  <!-- endinject -->
</body>

</html>
