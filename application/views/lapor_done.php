<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo esc_url(base_url()); ?>assets/image/favicon.png" type="image/png">
        <title>SIPANCO-19</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/css/style.css">
        
        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/css/responsive.css">

        <link rel="stylesheet" href="<?php echo esc_url(base_url()); ?>assets/scss/_elements.scss">
        
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?php echo esc_url(base_url()); ?>"><img src="<?php echo esc_url(base_url()); ?>/assets/image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="<?php echo esc_url(base_url()); ?>">Halaman Utama</a></li> 
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lapor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor')); ?>">Perjalanan Antar Kota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor/luar_negeri')); ?>">Perjalanan Luar Negeri</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Tutorial')); ?>">Tutorial</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Galeri')); ?>">Galeri</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Login')); ?>" target="_blank">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Dashboard')); ?>" target="_blank">Dashboard</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background: url('<?php echo esc_attr(base_url())?>assets/image/protokol_kesehatan_3.jpg') no-repeat scroll center 0/cover"></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Lapor Perjalanan</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo esc_url(base_url())?>">Halaman Utama</a></li>
                        <li class="active">Lapor</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
               <div class="section_title text-center">
                    <?php if($hasil == "Berhasil"){?>
                    <h3>Laporan Berhasil Diterima</h3>
                    <h5>Silakan menerapkan perilaku hidup bersih dan sehat (PHBS) selama 14 hari</h5>
                    <h5>Segera melapor ke petugas RT setempat apabila selama 14 hari ini mengalami gejala Covid-19!</h5>
                     <div class="button-group-area mt-40">
                         <a href="<?php echo esc_url(base_url())?>" class="btn theme_btn button_hover theme_btn_two">Kembali ke halaman utama</a>
                     </div>
                 <?php } else {?>
                    <h3>Laporan Gagal</h3>
                    <h5>Silakan mengulang mengisi formulir pelaporan!</h5>

                    <div class="button-group-area mt-40">                     
                         <a href="<?php echo esc_url(base_url())?>" class="btn theme_btn button_hover theme_btn_two">Kembali ke halaman utama</a>
                     </div>
                 <?php }?>                        
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
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
       
       
       <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/popper.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/mail-script.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/stellar.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/stellar.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery.form.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/contact.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/custom.js"></script>
    </body>
</html>