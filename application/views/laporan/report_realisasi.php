  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper tabel-realisasi">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Pagu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Pagu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- section form realisasi -->
    <section id="form-realisasi" class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Laporan Pagu</h3>

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
                    <label>Pilih Tahun</label>
                    <select class="form-control select2 tahun" style="width: 40%" id="tahun" name="tahun">

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Pilih Kategori</label>
                    <select class="form-control select2 kategori" style="width: 60%" id="kategori" name="kategori">

                    </select>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary" id="tombol-show">Tampilkan</button>
                    <button class="btn btn-success" id="show-excel">Eksport Ke Excel</button>
                    <button class="btn btn-warning" id="print">Print Laporan</button>
                  </div>
                  
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Form Laporan Pagu
          </div>
        </div>
        <!-- /.card -->

      </div><!-- /.container-fluid -->
    </section>

    <!-- table detail -->
    <section id="tabel-detail" class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title title-detail">Data Pagu</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="TABLE_1" class="table table-bordered table-striped example1">
                <thead>
                  <tr>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Volume</th>
                    <th>Satuan</th>
                    <th>Anggaran</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody id="show_realisasi">
                  
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

   <!-- table2excel -->
  <script src="<?= base_url('assets/js/jquery.table2excel.js') ?>"></script>

  <script src="<?= base_url('assets/js/jQuery.print.js') ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      //load function data
      load_data();

      //rupiah
      $('#rupiah').autoNumeric('init');

      //dataTable
      $('#TABLE_1').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false
      });

      function load_data(){
        $.ajax({
          type: 'ajax',
          url: '<?= base_url()?>Laporan/realisasi_form',
          async: false,
          dataType: 'json',
          success: function(data){
            var optYear = "";
            var optKategori = "";

            //loop year
            $.each(data.year, function(i, v) {
              var valYear = data.year[i].tahun;
              var titleYear = data.year[i].tahun;
              optYear += "<option value='" + valYear + "'>" + titleYear + "</option>";
            });

            //loop kategori
            $.each(data.kategori, function(k, v) {
              // set value kategori
              var valKategori = data.kategori[k].nama_kategori;
              var titleKategori = data.kategori[k].nama_kategori;
              optKategori += "<option value='" + valKategori + "'>" + titleKategori + "</option>";
            });

            $('.tahun').append(optYear);
            $('.kategori').append(optKategori);

            eliminate();
          },
          error: function(){
            alert('Could not add data');
          }
        });
      }

      function eliminate(){
        var seen = {};
        $('option').each(function() {
          var txt = $(this).text();
          if (seen[txt])
              $(this).remove();
          else
              seen[txt] = true;
        });
      }

      //tombol tampilkan
      $('#tombol-show').click(function(e){
        e.preventDefault();
        var tahun = $('.tahun').val();

        var kategori = $('.kategori').val();

        var url = "<?= base_url('Laporan/get_realisasi') ?>/" + tahun;

        $.ajax({
          url: url,
          method: 'get',
          dataType: 'json',
          async: false,
          success: function(respon){

            console.log(respon);
            // var html = '';

            // $.each(respon.pagu, function(i, v){
            //   // console.log(v.username);
            //   html += '<tr>' +
            //     '<td>' + v.tahun + '</td>' +
            //     '<td>' + v.username + '</td>' +
            //     '<td>' + v.name + '</td>' +
            //     '<td>' + v.pagu + '</td>' +
            //     '</tr>';
            // });
            // $('#show_pagu').html(html);
          },
          error: function(){
            alert('Could not get data');
          }
        })

      });

      $("#show-excel").click(function(){
        $("#TABLE_1").table2excel({
          exclude:".noExl",
          name:"Worksheet Name",
          filename:"SomeFile",
          fileext:".xls",
          preserveColors:true
        });
      });

      //print
      $("#print").click(function(e){
        e.preventDefault();
        $.print("#TABLE_1");
      })

    });
  </script>
  </body>

  </html>