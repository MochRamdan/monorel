  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/adminLTE/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- DataTables -->
<script src="<?= base_url('assets/adminLTE/plugins/datatables/jquery.dataTables.js')?>"></script>

<script src="<?= base_url('assets/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminLTE/dist/js/adminlte.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/adminLTE/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminLTE/dist/js/demo.js')?>"></script>

<!-- auto numeric -->
<script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

<script type="text/javascript">
  //rupiah
  $('.rupiah').autoNumeric('init');

  //dataTable
  $('.dataTabel').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
  });

</script>

</body>
</html>