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

    <!-- tabel realisasi -->
    <section id="tabel-realisasi" class="content">
      <div id="tabel-lkk" class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Realisasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="TABLE_1" class="table table-bordered table-striped example1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama LKK</th>
                    <th>Pagu Anggaran</th>
                    <th>Realisasi</th>
                    <th>Realisasi (%)</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="show_data">
                  <?php 
                  $no = 1;
                  foreach ($anggaran as $key => $value) 
                  {
                    $sum = array_sum($value['anggaran']);
                    $pagu = $value['pagu'][0];
                    $persen_realisasi = ($sum/$pagu)*100;

                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$value['nama_lkk'][0]."</td>";
                    echo "<td class='rupiah' data-a-sign='Rp ' data-a-dec='none' data-a-sep='.'>".$value['pagu'][0]."</td>";
                    echo "<td class='rupiah' data-a-sign='Rp ' data-a-dec='none' data-a-sep='.'>".$sum."</td>";
                    echo "<td>".$persen_realisasi."</td>";
                    echo "<td>"."<a href='javascript:;' class='btn btn-info detail' data-toggle='tooltip' data-placement='top' title='Detail' data='".$value['pagu_id'][0]."'>Detail</a>"."</td>";
                    echo "</tr>";
                    $no++;
                  }
                  ?>
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

    <!-- table detail -->
    <section id="tabel-detail" class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title title-detail"><p class="title-lkk">Nama LKK</p> <span class="title-pagu rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep=".">Nilai Pagu Anggaran</span></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="TABLE_2" class="table table-bordered table-striped example1">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Realisasi</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
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
                  <input class="form-control" type="hidden" id="realisasi_id" name="realisasi_id">

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

      //hide form 
      $('#form-realisasi').hide();

      //rupiah
      $('#anggaran').autoNumeric('init');
      $('.rupiah').autoNumeric('init');

      //dataTable
      $("#TABLE_1").DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
        "searching": true,
        "paging": true
      });

      $("#TABLE_2").DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
        "searching": false,
        "paging": false
      });

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
            $('#tabel-detail').hide();
            $('#form-realisasi').show();
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert('Error Get Data From ajax');
          }
        })
      });

      //click tombol refresh
      // $('#tbl-refresh').click(function() {
      //   load_data();
      // })

      //tombol simpan
      $('#tombol-simpan').click(function() {
        var url;

        if (save_method == 'add') {
          url = '<?= base_url("Realisasi/save") ?>';
        } else {
          url = '<?= base_url("Realisasi/update_detail") ?>';
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
              // load_data();
            }else{
              alert(respon.success);
            }
          },
          error: function() {
            alert('Could not add data');
          }
        });
      })

      //detail
      $('#show_data').on('click', '.detail', function(){
        var id = $(this).attr('data');
        var url = "<?= base_url('Realisasi/get_detail')?>/" + id;

        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(respon){
            var html = '';
            var lkk = '';
            var pagu = '';

            var i;
            for (i = 0; i < respon.detail.length; i++) {
              lkk = respon.detail[i].name;
              pagu = respon.detail[i].pagu;

              html += '<tr>' +
                '<td>' + respon.detail[i].tanggal + '</td>' +
                '<td class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep=".">' + respon.detail[i].anggaran + '</td>' +
                '<td>' + respon.detail[i].volume + '</td>' +
                '<td>' + respon.detail[i].nama_satuan + '</td>' +
                '<td>' + respon.detail[i].keterangan + '</td>' +
                '<td>' +
                '<a href="javascript:;" class="btn btn-primary edit" data-toggle="tooltip" data-placement="top" title="Edit" data="' + respon.detail[i].realisasi_id + '">Edit</a>' + ' ' +
                '<a href="javascript:;" class="btn btn-danger delete" data-toggle="tooltip" data-placement="top" title="Hapus" data="' + respon.detail[i].realisasi_id + '">Hapus</a>' +
                '</td>' +
                '</tr>';
            }
            $('#tabel-detail').find('.title-lkk').text('LKK '+lkk);
            $('#tabel-detail').find('.title-pagu').text('Pagu Anggaran '+pagu);
            $('#show_detail').html(html);
          },
          error: function(){
            alert('Could not get data');
          }
        })
      })

      //edit detail
      $('#show_detail').on('click', '.edit', function() {
        save_method = 'update';
        var id = $(this).attr('data');
        var url = "<?= base_url('Realisasi/edit_detail'); ?>/" + id;

        $.ajax({
          url: url,
          method: 'GET',
          dataType: 'JSON',
          success: function(data) {
            var optPagu = "";
            var optKategori = "";
            var optSatuan = "";

            var choicePagu = data.realisasi.pagu_id;
            var choiceKategori = data.realisasi.kategori_id;
            var choiceSatuan = data.realisasi.satuan_id;

            //loop pagu
            $.each(data.pagu, function(k, v) {
              // set value pagu
              var valPagu = data.pagu[k].pagu_id;
              var titlePagu = data.pagu[k].name;

              if (valPagu == choicePagu) {
                optPagu += "<option value='" + valPagu + "' selected>" + titlePagu + "</option>";
              }else{
                optPagu += "<option value='" + valPagu + "'>" + titlePagu + "</option>";
              }
            });

            //loop kategori
            $.each(data.kategori, function(k, v) {
              // set value kategori
              var valKategori = data.kategori[k].kategori_id;
              var titleKategori = data.kategori[k].nama_kategori;

              if (valKategori == choiceKategori) {
                optKategori += "<option value='" + valKategori + "' selected>" + titleKategori + "</option>";
              }else{
                optKategori += "<option value='" + valKategori + "'>" + titleKategori + "</option>";
              }
            });

            //loop satuan
            $.each(data.satuan, function(k, v) {
              // set value for service category
              var valSatuan = data.satuan[k].satuan_id;
              var titleSatuan = data.satuan[k].nama_satuan;

              if (valSatuan == choiceSatuan) {
                optSatuan += "<option value='" + valSatuan + "' selected>" + titleSatuan + "</option>";
              }else{
                optSatuan += "<option value='" + valSatuan + "'>" + titleSatuan + "</option>";
              }
            });

            //for form realisasi
            $('[name="realisasi_id"]').val(data.realisasi.realisasi_id);
            $('[name="volume"]').val(data.realisasi.volume);
            $('[name="anggaran"]').val(data.realisasi.anggaran);
            $('[name="keterangan"]').val(data.realisasi.keterangan);

            //append to id
            $('#show-lkk').append(optPagu);
            $('#show-kategori').append(optKategori);
            $('#show-satuan').append(optSatuan);

            // $('#form')[0].reset();
            $('#tabel-realisasi').hide();
            $('#tabel-detail').hide();
            $('#form-realisasi').show();
          },
          error: function(jqXHR, textStatus, errorThrown){
            alert('Error Get Data From ajax');
          }
        })
      });

      //delete realisasi
      $('#show_detail').on('click', '.delete', function() {
        var id = $(this).attr('data');
        var conf = confirm("Yakin.. akan menghapus data ini?");
        if (conf) {
          var url = "<?php echo base_url('Realisasi/delete'); ?>/" + id;
          $.ajax({
            url: url,
            method: 'GET',
            dataType: 'JSON',
            success: function(data) {
              alert(data);
              //pakai ajax reload
              // load_data();
            }
          })
        }
        return false;
      });

    });
  </script>
  </body>

  </html>