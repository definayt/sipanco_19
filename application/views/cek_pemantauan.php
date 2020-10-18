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
                            <li class="nav-item active"><a class="nav-link" href="<?php echo esc_url(base_url()); ?>">Halaman Utama</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lapor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor')); ?>">Perjalanan Antar Kota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor/luar_negeri')); ?>">Perjalanan Luar Negeri</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Tutorial')); ?>">Tutorial</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Galeri')); ?>">Galeri</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
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
        <?php 
        if (!empty($dataPemantauan)) {
            if($dataPemantauan->pemantauan <= 14){
		?>        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
            	<div class="section_title text-center">
                    <h2 class="title_color"><br>Masa Pemantauan</h2>
                </div>               
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-user"></i>
                                <h6><?php echo esc_html($dataPemantauan->nama); ?></h6>
                                <p></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-map-marker"></i>
                                <h6>Riwayat Bepergian</h6>
                                <?php 
                                	$provinsi = $dataPemantauan->provinsi;
                                	if($provinsi != '-') {?>
                                	<h6><?php echo esc_html($dataPemantauan->kota_kabupaten.', '.$provinsi.', '.$dataPemantauan->country_name); ?></h6>
                                <?php }else{?>
                                	<h6><?php echo esc_html($dataPemantauan->country_name); ?></h6>
                                <?php }?>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_info">
                            <div class="info_item">
                            	<?php
								  	$tanggal_mulai = tanggal(int($dataPemantauan->tanggal_mulai[8].$dataPemantauan->tanggal_mulai[9]), int($dataPemantauan->tanggal_mulai[5].$dataPemantauan->tanggal_mulai[6]), int($dataPemantauan->tanggal_mulai[0].$dataPemantauan->tanggal_mulai[1].$dataPemantauan->tanggal_mulai[2].$dataPemantauan->tanggal_mulai[3]));
								  	$tanggal_selesai = tanggal(int($dataPemantauan->tanggal_selesai[8].$dataPemantauan->tanggal_selesai[9]), int($dataPemantauan->tanggal_selesai[5].$dataPemantauan->tanggal_selesai[6]), int($dataPemantauan->tanggal_selesai[0].$dataPemantauan->tanggal_selesai[1].$dataPemantauan->tanggal_selesai[2].$dataPemantauan->tanggal_selesai[3]));
								  ?>
                            	<h6>Tanggal Mulai Pemantauan</h6>
                                <i class="lnr lnr-calendar-full"></i>
                                <h6><?php echo esc_html($tanggal_mulai); ?></h6>
                                <p></p>
                            </div>
                            <div class="info_item">
                            	<h6>Tanggal Selesai Pemantauan</h6>
                                <i class="lnr lnr-calendar-full"></i>
                                <h6><?php echo esc_html($tanggal_selesai); ?></h6>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan_1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h3>Pemantauan Kesehatan Telah Berlangsung Selama</h3>
                                    <div class="border_line"></div>
                                    <h1><?php echo esc_html($dataPemantauan->pemantauan);?></h1>
                                    <h3>Hari</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h3>Sisa Masa Pemantauan</h3>
                                    <div class="border_line"></div>
                                    <h1><?php echo esc_html($dataPemantauan->sisa);?></h1>
                                    <h3>Hari</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    		<?php }else{
    	?>
    	 <section class="contact_area section_gap">
            <div class="container">
            	<div class="section_title text-center">
                    <h2 class="title_color"><br>Anda Tidak Berada dalam Masa Pemantauan</h2>
                    <h5></h5>
                </div>               
                
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan_1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h2>Tetap Jaga Kesehatan Anda</h2>
                                    <div class="border_line"></div>
                                    <h1></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h2>Patuhi Protokol Kesehatan</h2>
                                    <div class="border_line"></div>
                                    <h1></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    	<?php }}else{ ?>
        <section class="contact_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color"><br>Anda Tidak Berada dalam Masa Pemantauan</h2>
                    <h5></h5>
                </div>               
                
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan_1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h2>Tetap Jaga Kesehatan Anda</h2>
                                    <div class="border_line"></div>
                                    <h1></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="categories_post">
                            <img src="<?php echo esc_url(base_url()); ?>assets/image/protokol_kesehatan.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h2>Patuhi Protokol Kesehatan</h2>
                                    <div class="border_line"></div>
                                    <h1></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <?php }?>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap py-3">
            <div class="container">
                <!-- <div class="border_line"></div> -->
                <div class="row d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> KKN TIM II UNDIP KAB. SEMARANG <i class="fa fa-heart-o" aria-hidden="true"></i>
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
        <script src="<?php echo esc_url(base_url()); ?>assets/js/mail-script.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/mail-script.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/stellar.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/custom.js"></script>
        <!-- contact js -->
        
    </body>
</html>