
$(document).ready(function(){
  $("#submitCekKarantina").click(function(){ // Ketika tombol simpan di klik
    
    $(this).html("Mencari Data...").attr("disabled", "disabled");
    
    $.ajax({
      url: baseurl + 'Home/cekKarantina', // File tujuan
      type: 'POST', // Tentukan type nya POST atau GET
      data: {NIK: $("#NIK").val()}, // Set data yang akan dikirim
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ // Ketika proses pengiriman berhasil
        
        $("#submitCekKarantina").html("CEK").removeAttr("disabled");
        
        
        $("#hasil_cek").html(response.hasil);
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
        alert(xhr.responseText); // munculkan alert
      }
    });
  });
});