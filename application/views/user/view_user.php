  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="tabel-lkk" class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button id="tbl-refresh" class="btn btn-default">Refresh</button>
              <button id="tbl-tambah" class="btn btn-success">Tambah</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="overflow:auto;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form">
                <div class="form-group">
                  <input type="hidden" name="admin_id">
                  <label for="username" class="col-form-label">Username :</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Baru">
                </div>
                <div class="form-group">
                  <label for="password" class="col-form-label">Default Password :</label>
                  <input type="text" class="form-control" id="password" name="" value="12345" disabled="disabled">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="password" value="12345">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" id="tombol-simpan" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
  <script src="<?= base_url('assets/adminLTE/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/adminLTE/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?= base_url('assets/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/adminLTE/dist/js/adminlte.min.js') ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/adminLTE/dist/js/demo.js') ?>"></script>
  <!-- page script -->

  <!-- auto numeric -->
  <script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

  <script>
    $(function() {
      var save_method;
      //load function data
      load_data();

      //dataTable
      $("#example1").DataTable();

      //click tombol refresh
      $('#tbl-refresh').click(function() {
        load_data();
      })

      //fungsi tampil data
      function load_data() {
        $.ajax({
          type: 'ajax',
          url: '<?= base_url() ?>User/data',
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              html += '<tr>' +
                '<td>' + data[i].username + '</td>' +
                '<td>' + data[i].level + '</td>' +
                '<td>' +
                '<a href="javascript:;" class="btn btn-primary edit" data-toggle="tooltip" data-placement="top" title="Edit" data="' + data[i].admin_id + '">Edit</a>' + ' ' +
                '<a href="javascript:;" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="Hapus" data="' + data[i].admin_id + '">Hapus</a>' +
                '</td>' +
                '</tr>';
            }
            $('#show_data').html(html);
          }
        });
      }

      //click tombol tambah
      $('#tbl-tambah').click(function(){
        save_method = 'add';
        $('#form')[0].reset();
        $('#exampleModal').find('.modal-title').text('Form Tambah User');
        $('#exampleModal').modal('show');
      })

      //tombol simpan
      $('#tombol-simpan').click(function() {
        var url;

        if (save_method == 'add') {
          url = '<?= base_url("User/save") ?>';
        } else {
          url = '<?= base_url("User/update_user") ?>';
        }

        $.ajax({
          url: url,
          method: 'post',
          data: $('#form').serialize(),
          dataType: 'json',
          async: false,
          success: function(respon) {
            if (respon.success) {
              $('#exampleModal').modal('hide');
              $('#form')[0].reset();
              alert("Berhasil menyimpan");
              load_data();
            }else{
              alert(respon.success);
            }

            load_data();
          },
          error: function() {
            alert('Could not add data');
          }
        });
      })

      //edit
      $('#show_data').on('click', '.edit', function() {
        save_method = 'update';
        var id = $(this).attr('data');
        var url = "<?= base_url('User/get_edit'); ?>/" + id;
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            $('[name="admin_id"]').val(data.admin_id);
            $('[name="username"]').val(data.username);
            $('#exampleModal').find('.modal-title').text('Edit Kategori Realisasi');
            $('#exampleModal').modal('show');
          }
        })
      });

      //delete
      $('#show_data').on('click', '.delete', function() {
        var id = $(this).attr('data');
        var conf = confirm("Yakin.. akan menghapus data ini?");
        if (conf) {
          var url = "<?php echo base_url('User/delete'); ?>/" + id;
          $.ajax({
            url: url,
            method: 'GET',
            dataType: 'JSON',
            success: function(data) {
              alert(data);
              //pakai ajax reload
              load_data();
            }
          })
        }
        return false;
      });

    });
  </script>
  </body>

  </html>