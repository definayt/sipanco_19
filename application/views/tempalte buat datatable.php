<script type="text/javascript">
  $(document).ready(function () {
    $('#tabel-data').dataTable({
      "paging": true,
      "pageLength" : 10,
      "lengthMenu" : [10, 20, 50, 100],
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      language :{
        paginate :{
          previous : "<",
          next : ">"
        },
        lengthMenu: "Menampilkan _MENU_ data",
        zeroRecords: "Tidak ada data",
        info: "Menampilkan halaman _PAGE_ dari _PAGES_",
        infoEmpty: "",
        search : "Pencarian"
      }
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"type="text/javascript"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">