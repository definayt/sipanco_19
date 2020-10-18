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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->

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
                <i class="mdi mdi-account-multiple menu-icon"></i>                 
              </span>
              Data Warga RT 05
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
                  <h4 class="card-title">Data Seluruh Penduduk</h4>
                  <a href="<?= base_url('Penduduk/pdf')?>"class="btn btn-gradient-info mr-2" target="_blank">Print</a><br><br>
                  <a onclick="myFunction()" href="#">   
                    <div id="myDIV">
                      <?php echo show_msg($this->session->flashdata('msg'));?>
                    </div>
                  </a>
                  <table class="table table-striped" id="tabel-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <!-- <th>Jenis Warga</th> -->
                        <th>Nama</th>
                        <!-- <th>Tanggal Kedatangan</th> -->
                        <!-- <th>Password</th> -->
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no = 1;
                        foreach ($dataPenduduk as $penduduk){?>
                          <tr>
                            <td><?= $no?></td>
                            <td><?= $penduduk->NIK?></td>
                            <td><?= $penduduk->nama?></td>
                            
                            <td>
                              <button type="button" class="btn btn-gradient-warning btn-rounded btn-icon btn-edit" data-toggle="modal" data-target="#editModal" id="<?php echo $penduduk->NIK.'|'.$penduduk->nama ?>">
                                <i class="mdi mdi-lead-pencil"></i>
                              </button>
                              <button type="button" class="btn btn-gradient-danger btn-rounded btn-icon" data-toggle="modal" data-target="#modal_hapus" onclick="deletePendduduk('<?= base_url('Penduduk/hapus_penduduk/'.$penduduk->NIK)?>')">
                                <i class="mdi mdi-delete-forever"></i>
                              </button>
                            </td>
                          </tr>
                          <?php $no++;}?>
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
                <a href="<?= base_url('Login/logout')?>" class="btn btn-info">Ya, Logout</a>
            </div>
        </div>
      </div>
  </div>

 <!-- Modal Edit-->
    <form action="<?= base_url('Penduduk/update')?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Penduduk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"id="IsiModal">
                ...
                
             
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-gradient-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-gradient-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
  <!-- Modals hapus -->  
   <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus data ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
  </div>
  <!-- plugins:js -->
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

  <!-- End custom js for this page-->
  <script src="https://code.jquery.com/jquery-3.5.1.js"type="text/javascript"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#tabel-data').dataTable({
        "paging": true,
        "pageLength" : 10,
        "lengthMenu" : [10, 20, 50, 100],
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json"
        }
      });
    });

     function deletePendduduk(url) {
      $('#btn-delete').attr('href', url);
    }

     function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

    //Edit Penduduk
        // $('.btn-edit').on('click',function(){
        //     // get data from button edit
        //     const id = $(this).data('id');
        //     const name = $(this).data('name');
        //     // Set data to Form Edit
        //     $('.NIK').val(id);
        //     $('.nama').val(name);
            
        //     // Call Modal Edit
        //     $('#editModal').modal('show');
        // });

        $(document).ready(function() {
        // even ketika link a href diklik
            $('.btn-edit').on("click", function(){
            // ambil nilai id dari link detail simpan dalam var DataMahasiswa
            var dataPenduduk= this.id;
           
            var datanya = dataPenduduk.split("|");
            let inputs = '';
            // let value = parseInt($(this).val());
            // for(let i = 1;i<=value;i++){
              inputs += '<div class="form-group"><label>Nama</label><input type="text" class="form-control nama" name="nama" placeholder="Nama" value="'+datanya[1]+'"></div><input type="hidden" name="NIK" class="NIK">';
            // }
            // $('#IsiModal').html(inputs);
            $("#IsiModal").html('<div class="form-group"><label>Nama</label><input type="text" class="form-control nama" name="nama" placeholder="Nama" value="'+datanya[1]+'"></div><input type="hidden" name="NIK" value="'+datanya[0]+'">');
            });
       
        });

  </script>

  
</body>

</html>
