<footer class="main-footer">
  <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0-rc</div>
  <strong>Copyright &copy; 2014-2021
    <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["excel", "pdf", "print", "colvis"],
      })
      .buttons()
      .container()
      .appendTo("#example1_wrapper .col-md-6:eq(0)");

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
<!-- Page specific script -->
<script>
  $(function () {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    
    $('.toastsDefaultSuccess').append(function () {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'BERHASIL',
        subtitle: 'Subtitle',
        body: 'Selamat, data yang anda tambahkan berhasil di simpan.'
      })
    });
    
    $('.toastsDefaultSuccessUpdate').append(function () {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'UPDATE BERHASIL',
        subtitle: 'Subtitle',
        body: 'Selamat, data yang anda update berhasil di simpan.'
      })
    });

    $('.toastsDefaultInfo').append(function () {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'BERHASIL DIHAPUS',
        body: 'Data anda berhasil dihapus'
      })
    });

    $('.toastsDefaultDanger').append(function () {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').append(function () {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'PERINGATAN!',
        subtitle: 'Subtitle',
        body: 'Ekstensi file yang anda masukan tidak sesuai.'
      })
    });
  });
</script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
</body>

</html>
