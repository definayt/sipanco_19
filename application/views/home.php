<!DOCTYPE html>
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
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<!-- <h6>Away from monotonous life</h6> -->
						<h2>SIPANCO-19</h2>
						<h4>Sistem Informasi Pelaporan dan Pemantauan Pasca Bepergian Selama Pandemi COVID-19</h4>
                        <h4>Kenangasari RT 05/RW VII Kelurahan Genuk</h4>
                        <div class="button-group-area mt-40">
    						<a href="<?php echo esc_url(base_url('Lapor'))?>" class="btn theme_btn button_hover">LAPOR Perjalanan Antar Kota</a>
                            <br><br>
                            <a href="<?php echo esc_url(base_url('Lapor/luar_negeri'))?>" class="btn theme_btn button_hover">LAPOR Perjalanan Luar Negeri</a>
                        </div>
					</div>
				</div>
            </div>
            <div class="hotel_booking_area position">
                <form id="form_cek_pemantauan" method="POST" action="<?php echo esc_attr(base_url('Home/cekPemantauan'))?>">
                    <div class="container">
                        <div class="hotel_booking_table">
                            <div class="col-md-5">
                                <h2>Cek Masa Pemantauan</h2>
                            </div>
                            <div class="col-md-8">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-7">                                                
                                            <div class="book_tabel_item">

                                                <div class="form-group">
                                                    <div class='input-group text'>
                                                        <input type='text' name="NIK" id="NIK" class="form-control" placeholder="Masukkan NIK Anda" onkeypress="return isNumber(event)"/>
                                                    </div>
                                                    <div class='input-group text'>
                                                        *NIK Tidak Boleh Kosong
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book_tabel_item">
                                                <button id="submitCekPemantauan" type="submit" class="book_now_btn button_hover" >Cek</button>   
                                                <!-- <a class="book_now_btn button_hover" href="#">Cek</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="hasil_cek" style="display:none;">
                  
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->

        <!--================ Tutorial area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Tutorial <br>Pelaporan Pasca<br>Aktivitas Bepergian</h2>
                            <p>Untuk mencegah penyebaran virus COVID-19, warga Kenangasari RT 5/RW VII, Kelurahan Genuk wajib melapor kepada petugas RT setempat setelah kembali dari aktivitas bepergian. Aktivitas bepergian yang wajib dilaporkan adalah aktivitas datang dari luar kota dan luar negeri. Langkah yang harus....</p>
                            <a href="<?php echo esc_url(base_url('Tutorial'))?>" class="button_hover theme_btn_two">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo esc_url(base_url()); ?>/assets/image/trip.gif" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ Tutorial Area =================-->

         <!--================ Galeri Area =================-->
        <section class="latest_blog_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Galeri</h2>
                    <p>Foto-foto Wilayah Kenangasari  RT 05/RW VII Kelurahan Genuk, Kecamatan Ungaran Barat, Kabupaten Semarang</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="<?php echo esc_url(base_url()); ?>/assets/image/gallery/gallery_01.jpeg" alt="post">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="<?php echo esc_url(base_url()); ?>/assets/image/gallery/gallery_02.jpeg" alt="post">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-recent-blog-post">
                            <div class="thumb">
                                <img class="img-fluid" src="<?php echo esc_url(base_url()); ?>/assets/image/gallery/gallery_03.jpeg" alt="post">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-top: 20px" class="text-center">
                    <a href="<?php echo esc_url(base_url('Galeri'))?>" class="button_hover theme_btn_two">Lihat Foto Lainnya</a>
                </div>
            </div>
        </section>
        <!--================ Galeri Area  =================-->
        
        <!--================ Peta Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Peta Wilayah RT 05/RW VII Kelurahan Genuk</h2>
                    <!-- <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p> -->
                </div>
                    <div id="map-container-google-1" class="map-container" style="height: 500px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7058101187318!2d110.40926732912163!3d-7.146427699677485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70861a4aa0e119%3A0xd042ad9af8606703!2sGg.%20Kenangasari%20III%2C%20Genuk%20Timur%2C%20Genuk%2C%20Kec.%20Ungaran%20Bar.%2C%20Semarang%2C%20Jawa%20Tengah%2050512!5e0!3m2!1sid!2sid!4v1594473609898!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
                    </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
        
       
        
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
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery-3.2.1.min.js"></script>
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

        <script type="text/javascript">
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }

            $(document).ready(function(){
                $('#submitCekPemantauan').attr('disabled',true);
                $('#NIK').keyup(function(){
                    if($(this).val().length !=0)
                        $('#submitCekPemantauan').attr('disabled', false);            
                    else
                        $('#submitCekPemantauan').attr('disabled',true);
                })
            });
        </script>
    </body>
</html>