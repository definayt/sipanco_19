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
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url(); ?>">Halaman Utama</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lapor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Lapor/dalam_negeri'); ?>">Perjalanan Antar Kota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Lapor/luar_negeri'); ?>">Perjalanan Luar Negeri</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('Tutorial'); ?>">Tutorial</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('Galeri'); ?>">Galeri</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('Login'); ?>">Login Admin</a></li>
                            
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
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Lapor</h2>
                    <ol class="breadcrumb">
                        <li><a href="<?= base_url(); ?>">Halaman Utama</a></li>
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
                    <h4 class="title_color">Formulir Pelaporan Pasca Bepergian Antar Kota<br>Selama Masa Pandemi Covid-19</h4>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <form class="row contact_form justify-content-center" action="<?php echo base_url('Lapor/lapor')?>" method="post" id="laporForm" novalidate="novalidate">
                            <div class="col-md-6 " >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="NIK" name="NIK" placeholder="Masukkan NIK Anda" onkeypress="return isNumber(event)">
                                </div>                             
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Status" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- <div class="input-group-icon mt-10">
                                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                                <div class="form-select"> -->
                                                    <select class="form-control"id="status" name="status">
                                                        <option value="1">Warga Tetap</option>
                                                        <option value="2">Anak Kos</option>
                                                    </select>
                                                <!-- </div>
                                            </div> -->    
                                        </div>
                                    </div>  
                                </div>
                                <div id="box_nama"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Riwayat Bepergian" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- <div class="input-group-icon mt-10">
                                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                                <div class="form-select"> -->
                                                    <select class="form-control"id="riwayat_bepergian" name="riwayat_bepergian">
                                                        <option value="1">Dalam Negeri</option>
                                                        <option value="2">Luar Negeri</option>
                                                    </select>
                                                <!-- </div>
                                            </div> -->    
                                        </div>
                                    </div>  
                                </div>

                                <div id="show-negara">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Provinsi" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- <div class="input-group-icon mt-10">
                                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                                <div class="form-select"> -->
                                                    <select class="form-control provinsi" id="provinsi" name="provinsi">
                                                        <?php foreach ($dataProvinsi as $provinsi){?>
                                                            <option value="<?= $provinsi->id?>"><?= $provinsi->provinsi?></option>
                                                        <?php }?>
                                                    </select>
                                                <!-- </div>
                                            </div>     -->
                                        </div>
                                    </div>  
                                </div>
                                <div id="filter_provinsi" class="filter_provinsi">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Kabupaten/Kota" disabled>
                                            </div>
                                        </div>  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <!--  <div class="input-group-icon mt-10">
                                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                                    <div class="form-select"> -->
                                                        <select class="form-control" id="kabupaten_kota" name="kabupaten_kota">
                                                            <?php foreach ($dataKabKota as $kabkota){?>
                                                                <option value="<?= $kabkota->id?>"><?= $kabkota->kota_kabupaten?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                               <!--  </div>    
                                            </div> -->
                                        </div>  
                                    </div>
                                </div>

                                </div>
                                <?php
                                    $today = date('Y-m-d');
                                    $value_date = tanggal(intval($today[8].$today[9]), intval($today[5].$today[6]), intval($today[0].$today[1].$today[2].$today[3]));

                                ?>

                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tanggal_1" placeholder="" value="Tanggal Kembali ke Wilayah RT 05" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?= $today?>" onchange="handler(event);">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="text" class="form-control" name="tanggal" placeholder="" value="Tanggal Kembali ke Wilayah RT 05" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <input type="text" id="value_date" class="form-control" name="value_date" placeholder="" value="<?= $value_date?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div> -->
                            <div class="col-md-12 text-center">
                                
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Laporkan</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
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
        
        <!-- contact js -->
        <script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/contact.js"></script>
        <script src="<?= base_url(); ?>assets/js/custom.js"></script>

        <script type="text/javascript">
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }

            function handler(e){
                var tanggal_pick = e.target.value;
                var datePart = tanggal_pick.match(/\d+/g),
                  year = datePart[0], // get only two digits
                  month = datePart[1], day = datePart[2];

                const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                      "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ];
                  
                document.getElementById('value_date').setAttribute('value',  day+' '+monthNames[parseInt(month)-1]+' '+year);
            }
           
        </script>
    </body>
</html>