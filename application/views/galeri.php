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
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('Tutorial'); ?>">Tutorial</a></li>
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('Galeri'); ?>">Galeri</a></li>
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
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background: url('<?= base_url()?>assets/image/protokol_kesehatan_1.jpg') no-repeat scroll center 0/cover"></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Galeri</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url(); ?>">Halaman Utama</a></li>
                        <li class="active">Galeri</li>
                    </ol>
                    
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h5>Foto-foto lingkungan RT 05/RW VII, Kelurahan Genuk</h5>
                </div>
                <div class="row imageGallery1" id="gallery">
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_01.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_01.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_02.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_02.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_03.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_03.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_04.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_04.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_05.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_05.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_06.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_06.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_07.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_07.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_08.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_08.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_09.jpeg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_09.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_10.jpeg" alt="">
                            <div class="hover">
                                <a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_10.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_11.jpeg" alt="">
                            <div class="hover">
                                <a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_11.jpeg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="<?= base_url(); ?>assets/image/gallery/gallery_12.jpeg" alt="">
                            <div class="hover">
                                <a class="light" href="<?= base_url(); ?>assets/image/gallery/gallery_12.jpeg"><i class="fa fa-expand"></i></a>
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
    </body>
</html>