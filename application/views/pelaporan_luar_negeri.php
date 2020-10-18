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
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css">
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
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>                 
              </span>
              Data Pelaporan
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
                  <h4 class="card-title">Pelaporan Bepergian Luar Negeri</h4>
                  <p class="card-description">
                    Data Pelaporan Luar Negeri Warga RT 05/RW VII Pasca Bepergian Selama Pandemi Covid-19
                  </p>
                  <a onclick="myFunction()" href="#">   
                    <div id="myDIV">
                      <?php echo esc_html(show_msg($this->session->flashdata('msg')));?>
                    </div>
                  </a>
                  <table class="table table-striped" id="tabel-data">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Riwayat Bepergian</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no = 1;
                        foreach ($pelaporan_luar_negeri as $pelaporan){?>
                          <tr>
                            <td><?php echo esc_html($no)?></td>
                            <td><?php echo esc_html($pelaporan->nama)?></td>
                           
                            
                            <?php if($pelaporan->country_name == "Indonesia"){?>
                              <td><?php echo esc_html($pelaporan->provinsi.', '.$pelaporan->kota_kabupaten)?></td>
                            <?php }else{?>
                              <td><?php echo esc_html($pelaporan->country_name)?></td>
                            <?php }?>
                            
                         <?php 
                              $tanggal_mulai = tanggal(int($pelaporan->tanggal_mulai[8].$pelaporan->tanggal_mulai[9]), int($pelaporan->tanggal_mulai[5].$pelaporan->tanggal_mulai[6]), int($pelaporan->tanggal_mulai[0].$pelaporan->tanggal_mulai[1].$pelaporan->tanggal_mulai[2].$pelaporan->tanggal_mulai[3])); 

                              $tanggal_selesai = tanggal(int($pelaporan->tanggal_selesai[8].$pelaporan->tanggal_selesai[9]), int($pelaporan->tanggal_selesai[5].$pelaporan->tanggal_selesai[6]), int($pelaporan->tanggal_selesai[0].$pelaporan->tanggal_selesai[1].$pelaporan->tanggal_selesai[2].$pelaporan->tanggal_selesai[3])); 

                            ?>
                            
                            <?php if($pelaporan->pemantauan <= 14){
                              $pemantauan = 'Pemantauan Hari Ke-'.$pelaporan->pemantauan;
                              $sisa = $pelaporan->sisa;
                              ?>
                              <td><label class="badge badge-danger"><?php echo esc_html($pemantauan)?></td>
                            <?php }else{
                              $pemantauan = 'Selesai Pemantauan';
                              $sisa = "0";
                              ?>
                              <td><label class="badge badge-success"><?php echo esc_html($pemantauan)?></td>
                            <?php }?>
                            <td>
                              
                              <button type="button" class="btn btn-gradient-success btn-rounded btn-icon detail-pelaporan" data-toggle="modal" data-target="#modal_detail"
                              id="<?php echo esc_attr($pelaporan->id_pelaporan.'|'.$pelaporan->nama.'|'.$pelaporan->status.'|'.$pelaporan->country_name.'|'.$pelaporan->provinsi.'|'.$pelaporan->kota_kabupaten.'|'.$tanggal_mulai.'|'.$tanggal_selesai.'|'.$pemantauan.'|'.$sisa) ?>"
                              >
                                <i class="mdi mdi-eye"></i>
                              </button>

                              <button type="button" class="btn btn-gradient-danger btn-rounded btn-icon" data-toggle="modal" data-target="#modal_hapus" onclick="deletePelaporan('<?php echo esc_attr(base_url('Pelaporan/hapus/'.$pelaporan->id_pelaporan.'_luarnegeri'))?>')">
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
                <a href="<?php echo esc_url(base_url('Login/logout'))?>" class="btn btn-info">Ya, Logout</a>
            </div>
        </div>
      </div>
  </div>

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

  <!-- Modal detail -->
        <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span>&nbsp;Detail Pelaporan</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
              </div>
              <div class="modal-body" id="IsiModal">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span>  Tutup</button>
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

  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"type="text/javascript"></script>

  <script type="text/javascript">
     $(document).ready(function () {
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();

      today = dd + '/' + mm + '/' + yyyy;
      
      $('#tabel-data').dataTable({
        dom: 'Bfrtip',
        buttons: [
            { extend: 'pdf', className: 'btn btn-gradient-info', title:'Pelaporan Bepergian Luar Negeri Kota Warga RT 05 RW VII Kelurahan Genuk', messageTop: 'Tanggal : '+today },
            { extend: 'print', className: 'btn btn-gradient-success', title:'Pelaporan Bepergian Luar Negeri Warga RT 05 RW VII Kelurahan Genuk' }
        ],
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
      $('#tabel-data').buttons().container().appendTo( '#example_wrapper .col-md-3:eq(0)' );
    });

    function deletePelaporan(url) {
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
  
    $(document).ready(function() {
        // even ketika link a href diklik
        $('.detail-pelaporan').on("click", function(){
        // ambil nilai id dari link detail simpan dalam var DataMahasiswa
        var dataPelaporan= this.id;
        // Pecah DataMahasiswa dengan tanda | sebagai pemisah data hasilnya
        // disimpan dalam array datanya
        var datanya = dataPelaporan.split("|");
        // Untuk pengujian data
        if (datanya[2]=='1') { var status='Warga Tetap';} else {var status='Anak Kos/Pendatang';}
        
        $("#IsiModal").html('<table class="table"><tr></tr><tr><td width="200">Nomor Pelaporan</td><td width="10">:</td><td>'+datanya[0]+'</td></tr><tr><td>Nama Lengkap</td><td>:</td><td>'+datanya[1]+'</td></tr><tr><td>Jenis Warga</td><td>:</td><td>'+status+'</td></tr><tr><td>Riwayat Bepergian</td><td>:</td><td>'+datanya[3]+'</td></tr><tr><td>Tanggal Kedatangan ke Wilayah RT 05</td><td>:</td><td>'+datanya[6]+'</td></tr><tr><td>Tanggal Selesai Pemantauan</td><td>:</td><td>'+datanya[7]+'</td></tr><tr><td>Status</td><td>:</td><td>'+datanya[8]+'</td></tr><tr><td>Sisa Hari Pemantauan</td><td>:</td><td>'+datanya[9]+' Hari</td></tr></table>');
        });
   
    });
  </script>
</body>
</html>
