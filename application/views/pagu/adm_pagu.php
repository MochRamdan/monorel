  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pagu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pagu</li>
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
              <h3 class="card-title">Tabel Pagu</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="TABLE_1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Tahun</th>
                    <th>Username</th>
                    <th>Jumlah Pagu</th>
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

      <!-- tabel detail pagu -->
      <div id="tabel-lkk" class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Detail Pagu</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="TABLE_2" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Tahun</th>
                    <th>Nama LKK</th>
                    <th>Nilai Pagu</th>
                  </tr>
                </thead>
                <tbody id="show_detail">

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <!-- modal -->
      <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <input type="hidden" name="pagu_id">
                  <label for="exampleFormControlSelect1">Nama LKK :</label>
                  <select class="form-control" id="daftar_lkk" name="daftar_lkk">

                  </select>
                </div>
                <div class="form-group">
                  <label for="pagu" class="col-form-label">Jumlah Pagu :</label>
                  <input type="text" class="form-control" id="pagu" name="pagu" data-a-sign="Rp " data-a-dec="none" data-a-sep="." placeholder="Jumlah Pagu">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" id="tombol-simpan" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div> -->

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

      //rupiah
      $('.rupiah').autoNumeric('init');

      //dataTable
      $("#TABLE_1").DataTable();
      $('#TABLE_2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
      });

      //fungsi tampil data
      function load_data() {
        $.ajax({
          type: 'ajax',
          url: '<?= base_url() ?>Pagu/data_adm',
          async: false,
          dataType: 'json',
          success: function(data) {
            // console.log(data.pagu);
            var html = '';

            $.each(data.pagu, function( i, l ){
              html += '<tr>' +
                '<td class="tahun">' + l.tahun[0] + '</td>' +
                '<td>' + l.username[0] + '</td>' +
                '<td class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep=".">' + l.pagu + '</td>' +
                '<td>' +
                '<a href="javascript:;" class="btn btn-primary detail" data-toggle="tooltip" data-placement="top" title="Detail" data="' + l.admin_id[0] + '">Detail</a>' + ' ' +
                '</td>' +
                '</tr>';

            });
            $('#show_data').html(html);
          }
        });
      }

      //klik detail
      $('#show_data').on('click', '.detail', function(){
        var id = $(this).attr('data');
        var url = "<?= base_url('Pagu/get_detail')?>/" + id;

        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(respon){
            console.log(respon);
            var html = '';
            var i;

            for (i = 0; i < respon.detail.length; i++) {

              html += '<tr>' +
                '<td>' + respon.detail[i].tahun + '</td>' +

                '<td>' + respon.detail[i].name + '</td>' +

                '<td class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep=".">' + respon.detail[i].pagu + '</td>' +
                '</tr>';
            }
            $('#show_detail').html(html);
          },
          error: function(){
            alert('Could not get data');
          }
        });
      });

      //tambah data pagu
      $('#tbl-tambah').click(function() {
        save_method = 'add';
        $.ajax({
          url: "<?= base_url() ?>Lkk/get_lkk",
          type: "GET",
          dataType: "JSON",
          success: function(success) {
            var servCat = "";
            var optsNik = "";
            var optsName = "";

            //loop data lkk
            $.each(success.lkk, function(k, v) {
              // set value for service category
              var valServ = success.lkk[k].lkk_id;
              var titleServ = success.lkk[k].name;
              servCat += "<option value='" + valServ + "'>" + titleServ + "</option>";
            });

            //append to id
            $('#daftar_lkk').append(servCat);

            $('#form')[0].reset();
            $('#exampleModal').find('.modal-title').text('Form Atur Jumlah Pagu');
            $('#exampleModal').modal('show');
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error Get Data From ajax');
          }
        })
      });

      //click tombol refresh
      $('#tbl-refresh').click(function() {
        load_data();
      })

      //tombol simpan
      $('#tombol-simpan').click(function() {
        var url;

        if (save_method == 'add') {
          url = '<?= base_url("Pagu/save") ?>';
        } else {
          url = '<?= base_url("Pagu/update_pagu") ?>';
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

            // load_data();
          },
          error: function() {
            alert('Could not add data');
          }
        });
      })

      //edit pagu
      $('#show_data').on('click', '.edit', function() {
        save_method = 'update';
        var id = $(this).attr('data');
        var url = "<?= base_url('Pagu/get_edit'); ?>/" + id;
        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {

            var servCat = "";
            var optsNik = "";
            var optsName = "";

            //loop data lkk
            $.each(data.lkk, function(k, v) {
              // set value for service category
              var valServ = data.lkk[k].lkk_id;
              var titleServ = data.lkk[k].name;

              if (data.lkk[k].lkk_id == data.nilai.lkk_id) {
                servCat += "<option value='" + valServ + "' selected>" + titleServ + "</option>";
              }else{
                servCat += "<option value='" + valServ + "'>" + titleServ + "</option>";
              }
            });

            //masukan ke form
            $('#daftar_lkk').append(servCat);
            $('[name="pagu_id"]').val(data.nilai.pagu_id);
            $('[name="pagu"]').val(data.nilai.pagu);
            $('#exampleModal').find('.modal-title').text('Edit Info Pagu');
            $('#exampleModal').modal('show');
          }
        })
      });

      //delete pagu
      $('#show_data').on('click', '.delete', function() {
        var id = $(this).attr('data');
        var conf = confirm("Yakin.. akan menghapus data ini?");
        if (conf) {
          var url = "<?php echo base_url('Pagu/delete'); ?>/" + id;
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