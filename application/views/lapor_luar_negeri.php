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
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lapor</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor')); ?>">Perjalanan Antar Kota</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Lapor/luar_negeri')); ?>">Perjalanan Luar Negeri</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Tutorial')); ?>">Tutorial</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(base_url('Galeri')); ?>">Galeri</a></li>
                            <li class="nav-item submenu dropdown ">
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
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="" style="background: url('<?php echo esc_attr(base_url())?>assets/image/protokol_kesehatan_3.jpg') no-repeat scroll center 0/cover"></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Lapor Perjalanan Luar Negeri</h2>
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
                    <h4>Formulir Pelaporan Pasca Bepergian Luar Negeri<br>Selama Pandemi COVID-19</h4>
                </div>
                <div class="row">
                   <div class="msg" style="display:none;">
                      <?php echo esc_html(@$this->session->flashdata('msg')); ?>
                    </div>

                    <div class="col-md-12 text-center">
                        <form class="row contact_form justify-content-center" action="<?php echo esc_attr(base_url('Lapor/lapor'))?>" method="post" id="laporForm2" novalidate="novalidate">
                            <input type="hidden" name="negara" value="102">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="NIK" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="NIK" name="NIK" placeholder="Masukkan NIK Anda" onkeypress="return isNumber(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control"  name="status"  value="0" >
                                <input type="hidden" class="form-control"  name="provinsi"  value="0" >
                                <input type="hidden" class="form-control"  name="kab_kota" value="0" >
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Negara" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <div class="form-select" >
                                                    <select size="1" class="form-control" id="negara" name="negara" >
                                                            <option value='1'>Afghanistan</option>
                                                    </select>
                                                </div>
                                            </div>    
                                    </div>  
                                </div>
                                
                               <?php
                                    $today = date('Y-m-d');
                                    $value_date = tanggal(int($today[8].$today[9]), int($today[5].$today[6]), int($today[0].$today[1].$today[2].$today[3]));

                                ?>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tanggal_1" placeholder="" value="Tanggal Kembali ke Wilayah RT 05" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo esc_attr($today)?>" onchange="handler(event);">
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
                                                <input type="text" id="value_date" class="form-control" name="value_date" placeholder="" value="<?php echo esc_attr($value_date)?>" disabled="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="justify-content-center">
                                    <button type="submit" value="submit" class="btn theme_btn button_hover">Laporkan</button>
                                </div>
                            </div>
                        </form>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery.form.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo esc_url(base_url()); ?>assets/js/contact.js"></script>
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

            $(document).ready(function(){

              $("#negara").select2({
                 ajax: { 
                   url: '<?php echo esc_js(base_url()) ?>/Lapor/getNegara',
                   minimumInputLength: 3,
                   allowClear: true,
                   placeholder: 'masukkan nama negara',
                   type: "post",
                   dataType: 'json',
                   delay: 250,
                   data: function (params) {
                      return {
                        searchTerm: params.term // search term
                      };
                   },
                   processResults: function (response) {
                      return {
                         results: response
                      };
                   },
                   cache: true
                 }
             });
           });
        </script>
    </body>
</html>