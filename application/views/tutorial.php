<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url(); ?>assets/image/favicon.png" type="image/png">
        <title>SIPANCO-19</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
    </head>
    <body>
        <!--================Header Area =================-->
       <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="<?= base_url(); ?>">Halaman Utama</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lapor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Lapor'); ?>">Perjalanan Antar Kota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Lapor/luar_negeri'); ?>">Perjalanan Luar Negeri</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('Tutorial'); ?>">Tutorial</a></li>
                            <li class="nav-item "><a class="nav-link" href="<?= base_url('Galeri'); ?>">Galeri</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login'); ?>" target="_blank">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Dashboard'); ?>" target="_blank">Dashboard</a></li>
                                </ul>
                            </li>
                            
                            <!-- <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background: url('<?= base_url()?>assets/image/protokol_kesehatan_4.jpg') no-repeat scroll center 0/cover"></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Tutorial</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url(); ?>">Halaman Utama</a></li>
                        <li class="active">Tutorial</li>
                    </ol>
                    
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <p>Untuk mencegah penyebaran virus COVID-19, warga Kenangasari RT 5/RW VII, Kelurahan Genuk wajib melapor kepada petugas RT setempat setelah kembali dari aktivitas bepergian. Aktivitas bepergian yang wajib dilaporkan adalah aktivitas datang dari luar kota dan luar negeri. Pelaporan ini digunakan oleh Petugas RT dalam upaya memantau warga yang telah kembali ke wilayah RT 5/RW VII setelah melakukan perjalanan ke luar kota atau luar negeri selama pandemi COVID-19. <br><br></p>
                    <p>Masa pemantauan akan dilakukan selaman 14 hari. Dalam masa pemantauan, warga yang bersangkutan wajib menerapkan Perilaku Hidup Bersih dan Sehat serta melalakukan Pyshical Distancing secara lebih ketat. Apabila dalam rentang waktu 14 hari setelah melapor aktivitas bepergian warga yang bersangkutan mengalami gejala terjangkit virus Covid-19, maka warga tersebut wajib menghubungi petugas RT atau petugas kesehatan setempat.</p>
                </div>

                <div class=" panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button class="button_hover theme_btn_two col-md-12" data-target="#Exampleone" data-toggle="collapse" data-parent="#accordion1">
                                    Tutorial Pelaporan Pasca Perjalanan Antar Kota                                    
                                </button>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="Exampleone">
                            <div class="container py-5 background-timeline">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <!-- Timeline -->
                                        <ul class="timeline">
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Setelah Bepergian dari Luar Kota dan Kembali ke Wilayah RT 05</h2>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 1</h2>
                                                <p class="text-small mt-2 font-weight-light">Tekan tombol "LAPOR PERJALANAN ANTAR KOTA" pada halaman utama web SIPANCO-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_1.png" class="col-lg-12">
                                                <p class="text-small mt-2 font-weight-light">Atau Anda juga dapat memilih menu "PERJALANAN ANTAR KOTA" pada bagian atas menu web SIPANCO-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_2.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 2</h2>
                                                <p class="text-small mt-2 font-weight-light">Setelah formulir pelaporan muncul, isikan NIK dan Nama Anda pada kolom NIK dan Nama</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_3.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 3</h2>
                                                 <p class="text-small mt-2 font-weight-light">Pilih provinsi yang terakhir Anda kunjungi pada masa pandemi Covid-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_4.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 4</h2>
                                                 <p class="text-small mt-2 font-weight-light">Pilih kabupaten atau kota yang terakhir Anda kunjungi pada masa pandemi Covid-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_5.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 5</h2>
                                                 <p class="text-small mt-2 font-weight-light">Lengkapi tanggal anda kembali ke wilayah RT 05 setelah bepergian dari luar kota</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_6.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 6</h2>
                                                 <p class="text-small mt-2 font-weight-light">Tekan tombol "LAPORKAN" setelah Anda selesai melengkapi formulir pelaporan pasca perjalanan antar kota</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/dalam_negeri_7.png" class="col-lg-12">
                                            </li>
                                             <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 8</h2>
                                                 <p class="text-small mt-2 font-weight-light">Jika pelaporan berhasil, maka akan muncul tampilan sebagai berikut</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/laporan_sukses.png" class="col-lg-12">
                                            </li>
                                        </ul><!-- End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button onclick="topFunction()" id="myBtn" class="button_hover theme_btn_two col-md-12" data-target="#Exampletwo" data-toggle="collapse" data-parent="#accordion1">
                                    Tutorial Pelaporan Pasca Perjalanan Luar Negeri
                                </button>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="Exampletwo">
                            <div class="container py-5 background-timeline">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <!-- Timeline -->
                                        <ul class="timeline">
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Setelah Bepergian dari Luar Negeri dan Kembali ke Wilayah RT 05</h2>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 1</h2>
                                                <p class="text-small mt-2 font-weight-light">Tekan tombol "LAPOR PERJALANAN LUAR NEGERI" pada halaman utama web SIPANCO-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_1.png" class="col-lg-12">
                                                <p class="text-small mt-2 font-weight-light">Atau Anda juga dapat memilih menu "PERJALANAN LUAR NEGERI" pada bagian atas menu web SIPANCO-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_2.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 2</h2>
                                                <p class="text-small mt-2 font-weight-light">Setelah formulir pelaporan muncul, isikan NIK dan Nama Anda pada kolom NIK dan Nama</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_3.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 3</h2>
                                                 <p class="text-small mt-2 font-weight-light">Pilih negara yang terakhir Anda kunjungi pada masa pandemi Covid-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_4.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 4</h2>
                                                 <p class="text-small mt-2 font-weight-light">Lengkapi tanggal anda kembali ke wilayah RT 05 setelah bepergian dari luar negeri</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_5.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 5</h2>
                                                 <p class="text-small mt-2 font-weight-light">Tekan tombol "LAPORKAN" setelah Anda selesai melengkapi formulir pelaporan pasca perjalanan luar negeri</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/luar_negeri_6.png" class="col-lg-12">
                                            </li>
                                             <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 6</h2>
                                                 <p class="text-small mt-2 font-weight-light">Jika pelaporan berhasil, maka akan muncul tampilan sebagai berikut</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/laporan_sukses.png" class="col-lg-12">
                                            </li>
                                        </ul><!-- End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button onclick="topFunction()" id="myBtn" class="button_hover theme_btn_two col-md-12" data-target="#Examplethree" data-toggle="collapse" data-parent="#accordion1">
                                    Tutorial Cek Masa Pemantauan
                                </button>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="Examplethree">
                            <div class="panel-body">
                                <div class="container py-5 background-timeline">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <!-- Timeline -->
                                        <ul class="timeline">
                                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Mengecek Masa Pemantauan Selama 14 Hari Setelah Bepergian</h2>
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 1</h2>
                                                <p class="text-small mt-2 font-weight-light">Isikan NIK anda pada kolom CEK MASA PEMANTAUAN di halaman utama web SIPANCO-19</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/cek_pemantauan_1.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 2</h2>
                                                <p class="text-small mt-2 font-weight-light">Pastikan NIK yang Anda isikan sudah benar. Lalu tekan tombol "CEK"</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/cek_pemantauan_2.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 3</h2>
                                                 <p class="text-small mt-2 font-weight-light">Jika anda memiliki riwayat bepergian selama masa pandemi Covid-19 dan masih dalam masa pemantauan, maka akan muncul tampilan sebagai berikut</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/cek_pemantauan_3.png" class="col-lg-12">
                                            </li>
                                            <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                                <div class="timeline-arrow"></div>
                                                <h2 class="h5 mb-0">Langkah 4</h2>
                                                 <p class="text-small mt-2 font-weight-light">Jika anda tidak memiliki riwayat bepergian selama masa pandemi Covid-19 dan atau pernah bepergian tetapi sudah selesai menjalani pemantauan, maka akan muncul tampilan sebagai berikut</p>
                                                <img src="<?= base_url()?>assets/image/tutorial/cek_pemantauan_4.png" class="col-lg-12">
                                            </li>
                                        </ul><!-- End -->

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                     </div>
                </div>

                

            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ start footer Area  =================-->    
        <footer class="footer-area section_gap py-3">
            <div class="container">
                <!-- <div class="border_line"></div> -->
                <div class="row d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> KKN TIM II UNDIP KABUPATEN SEMARANG <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
        <!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/popper.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
        <script src="<?= base_url(); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
        <script src="<?= base_url(); ?>assets/js/stellar.js"></script>
        <script src="<?= base_url(); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/custom.js"></script>

        <script type="text/javascript">
            function topFunction() {
              document.body.scrollTop = 700; // For Safari
              document.documentElement.scrollTop = 700; // For Chrome, Firefox, IE and Opera
            }
        </script>
    </body>
</html>