$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#laporForm').validate({
            ignore: [],
            rules: {
                NIK: {
                    required: true,
                    minlength: 16,
                    maxlength: 16
                },
                nama: {
                    required: true,
                    minlength: 3
                },
                kab_kota:{
                    required: true,
                }
            },
            messages: {
                NIK: {
                    required: "NIK Tidak Boleh Kosong!",
                    minlength: "NIK harus 16 digit",
                    maxlength: "NIK harus 16 digit"
                },
                nama: {
                    required: "Nama Tidak Boleh Kosong!",
                    minlength: "Nama minimal 3 Karakter"
                },
                kab_kota: {
                    required: "Anda Belum Memilih Provinsi dan Kota/Kabupaten"
                },
                
            },
            // submitHandler: function(form) {
            //     $(form).ajaxSubmit({
            //         type:"POST",
            //         data: $(form).serialize(),
            //         url:"Lapor/lapor",
            //         success: function() {
            //             $('#laporForm :input').attr('disabled', 'disabled');
            //             $('#laporForm').fadeTo( "slow", 1, function() {
            //                 $(this).find(':input').attr('disabled', 'disabled');
            //                 $(this).find('label').css('cursor','default');
            //                 $('#success').fadeIn()
            //                 $('.modal').modal('hide');
		          //       	$('#success').modal('show');
            //             })
            //         },
            //         error: function() {
            //             $('#laporForm').fadeTo( "slow", 1, function() {
            //                 $('#error').fadeIn()
            //                 $('.modal').modal('hide');
		          //       	$('#error').modal('show');
            //             })
            //         }
            //     })
            // }
        })
    })
    

    $("#provinsi").change(function(e){

        $.ajax({
            method: "POST",
            url: "Lapor/filter_provinsi/"+$("#provinsi").val(),
            // data: "value=" + $("#provinsi").val(),
            
            success : function(data){
                // MyTable.fnDestroy();
                $('#filter_provinsi').html(data);
                // refresh();
            },
            error: function(data){

            }
        });
        
    });

    $(function() {
        $('#laporForm2').validate({
            rules: {
                NIK: {
                    required: true,
                    minlength: 16,
                    maxlength: 16
                },
                nama: {
                    required: true,
                    minlength: 3
                },
            },
            messages: {
                NIK: {
                    required: "NIK Tidak Boleh Kosong!",
                    minlength: "NIK harus 16 digit",
                    maxlength: "NIK harus 16 digit"
                },
                nama: {
                    required: "Nama Tidak Boleh Kosong!",
                    minlength: "Nama minimal 3 Karakter"
                },
                
            },
            // submitHandler: function(form) {
            //     $(form).ajaxSubmit({
            //         type:"POST",
            //         data: $(form).serialize(),
            //         url:"Lapor/lapor",
            //         success: function() {
            //             $('#laporForm :input').attr('disabled', 'disabled');
            //             $('#laporForm').fadeTo( "slow", 1, function() {
            //                 $(this).find(':input').attr('disabled', 'disabled');
            //                 $(this).find('label').css('cursor','default');
            //                 $('#success').fadeIn()
            //                 $('.modal').modal('hide');
                  //        $('#success').modal('show');
            //             })
            //         },
            //         error: function() {
            //             $('#laporForm').fadeTo( "slow", 1, function() {
            //                 $('#error').fadeIn()
            //                 $('.modal').modal('hide');
                  //        $('#error').modal('show');
            //             })
            //         }
            //     })
            // }
        })
    })


    
 })(jQuery)
})