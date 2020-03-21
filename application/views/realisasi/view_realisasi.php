  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper tabel-realisasi">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Realisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Realisasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tombol Add</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <button id="tbl-refresh" class="btn btn-default">Refresh</button>
                <button id="tbl-tambah" class="btn btn-success">Tambah</button>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Tombol Aksi Realisasi Anggaran
          </div>
        </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>

    <section id="tabel-realisasi" class="content">
      <div id="tabel-lkk" class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Realisasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama LKK</th>
                    <th>Pagu Anggaran</th>
                    <th>Realisasi</th>
                    <th>% Realisasi</th>
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
    </section>

    <!-- section form realisasi -->
    <section id="form-realisasi" class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Realisasi Anggaran</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form id="form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama LKK</label>
                    <select class="form-control select2" style="width: 100%" id="show-lkk" name="lkk">

                    </select>
                  </div>
                  <div class="form-group">
                    <label>Jenis Realisasi</label>
                    <select class="form-control select2" style="width: 100%;" id="show-kategori" name="kategori">
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Volume</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-pencil-ruler"></i></span>
                      </div>
                      <input class="form-control" type="number" name="volume" placeholder="Jumlah Volume">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Satuan</label>
                    <select class="form-control select2" style="width: 100%;" id="show-satuan" name="satuan">
                      
                    </select>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jumlah Anggaran</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-money-bill"></i></span>
                      </div>
                      <input id="anggaran" name="anggaran" class="form-control" type="text" data-a-sign="Rp " data-a-dec="none" data-a-sep="." placeholder="Anggaran">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Keterangan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-info-circle"></i></span>
                      </div>
                      <input id="keterangan" name="keterangan" class="form-control" type="text" placeholder="Keterangan">
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary" id="tombol-simpan">Simpan</button>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Form Isian Realisasi Anggaran PIPPK
          </div>
        </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>

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

  <!-- bs-custom-file-input -->
  <script src="<?= base_url('assets/adminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js')?>"></script>

  <!-- auto numeric -->
  <script src="<?= base_url('assets/js/autoNumeric.js') ?>"></script>

  <script>
    $(document).ready(function() {
      var save_method;
      //load function data
      load_data();

      //hide form 
      $('#form-realisasi').hide();

      //rupiah
      $('#anggaran').autoNumeric('init');

      //dataTable
      $("#example1").DataTable();

      // fungsi tampil data
      function load_data() {
        $.ajax({
          type: 'ajax',
          url: '<?= base_url() ?>Realisasi/data',
          async: false,
          dataType: 'json',
          success: function(data) {

            console.log(data.realisasi);
            console.log(data.pagu);

            // $.each(data.pagu, function(i, item)
            // {
            //     alert(data.pagu[i].PageName);
            // });

            var html = '';
            var jmlRealisasi = 0;
            var persen = 0;

            $.each(data.pagu, function (i, v)
            {
              $.each(data.realisasi, function (ii, vv)
              {
                if (data.pagu[i].pagu_id == data.realisasi[ii].pagu_id) 
                {
                  jmlRealisasi += data.realisasi[ii].anggaran;
                }
                var nilaiPagu = data.pagu[i].pagu;
                persen = (jmlRealisasi/nilaiPagu)*100;
                html += '<tr>'+
                  '<td>' +data.pagu[i].name+ '</td>' +
                  '<td>' +data.pagu[i].pagu+ '</td>' +
                  '<td>' +jmlRealisasi+ '</td>' +
                  '<td>' +persen+ '</td>' +
                  '<td>' +
                  '<a href="javascript:;" class="btn btn-primary edit" data-toggle="tooltip" data-placement="top" title="Edit" data="' + data.realisasi[ii].realisasi_id + '">Edit</a>' + ' ' +
                  '<a href="javascript:;" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="Hapus" data="' + data.realisasi[ii].realisasi_id + '">Hapus</a>' +
                  '</td>' +
                '</tr>';
              });
            });

            // var html = '';
            // var i;
            // for (i = 0; i < data.pagu.length; i++) {
            //   html += '<tr>' +
            //     '<td>' + data[i].name + '</td>' +
            //     '<td>' + data[i].name + '</td>' +
            //     '<td>' + data[i].name + '</td>' +
            //     '<td>' + data[i].pagu + '</td>' +
            //     '<td>' +
            //     '<a href="javascript:;" class="btn btn-primary edit" data-toggle="tooltip" data-placement="top" title="Edit" data="' + data[i].pagu_id + '">Edit</a>' + ' ' +
            //     '<a href="javascript:;" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="Hapus" data="' + data[i].pagu_id + '">Hapus</a>' +
            //     '</td>' +
            //     '</tr>';
            // }
            $('#show_data').html(html);
          }

        });
      }

      //tambah data
      $('#tbl-tambah').click(function() {
        save_method = 'add';
        $.ajax({
          url: "<?= base_url()?>Realisasi/get_realisasi",
          type: "GET",
          dataType: "JSON",
          success: function(success) {
            var optPagu = "";
            var optKategori = "";
            var optSatuan = "";

            //loop pagu
            $.each(success.pagu, function(k, v) {
              // set value pagu
              var valPagu = success.pagu[k].pagu_id;
              var titlePagu = success.pagu[k].name;
              optPagu += "<option value='" + valPagu + "'>" + titlePagu + "</option>";
            });

            //loop kategori
            $.each(success.kategori, function(k, v) {
              // set value kategori
              var valKategori = success.kategori[k].kategori_id;
              var titleKategori = success.kategori[k].nama_kategori;
              optKategori += "<option value='" + valKategori + "'>" + titleKategori + "</option>";
            });

            //loop satuan
            $.each(success.satuan, function(k, v) {
              // set value for service category
              var valSatuan = success.satuan[k].satuan_id;
              var titleSatuan = success.satuan[k].nama_satuan;
              optSatuan += "<option value='" + valSatuan + "'>" + titleSatuan + "</option>";
            });

            //append to id
            $('#show-lkk').append(optPagu);
            $('#show-kategori').append(optKategori);
            $('#show-satuan').append(optSatuan);

            $('#form')[0].reset();
            $('#tabel-realisasi').hide();
            $('#form-realisasi').show();
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
          url = '<?= base_url("Realisasi/save") ?>';
        } else {
          url = '<?= base_url("Realisasi/update") ?>';
        }

        $.ajax({
          url: url,
          method: 'post',
          data: $('#form').serialize(),
          dataType: 'json',
          async: false,
          success: function(respon) {
            if (respon.success) {
              $('#tabel-realisasi').show();
              $('#form-realisasi').hide();
              alert("Berhasil menyimpan");
              load_data();
            }else{
              alert(respon.success);
            }
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
            $('#show-lkk').append(servCat);


            $('[name="pagu_id"]').val(data.nilai.pagu_id);
            $('[name="pagu"]').val(data.nilai.pagu);
            $('#exampleModal').find('.modal-title').text('Edit Info Pagu');
            $('#exampleModal').modal('show');
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert('Error Get Data From ajax');
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