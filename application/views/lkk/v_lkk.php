<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
      <li><a href="#" title="Go to Home" class="tip-bottom">Home</a> <span class="divider">/</span></li>
      <li class="active">Daftar LKK</li>
    </ul>
    <h1>Daftar LKK</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <button class="btn Button">Refresh</button>
    <!-- <a href="<? //= base_url('Lkk/add_lkk') 
                  ?>" class="btn btn-primary">Tambah</a> -->
    <button class="btn btn-primary tbl-tambah">Tambah</button>
    <div class="row-fluid tabel-data">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama LKK</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody id="data">
                <?php $no = 1;
                foreach ($datas as $key => $value) { ?>
                  <tr class="odd gradeX">
                    <td><?= $no; ?></td>
                    <td><?= $value->name; ?></td>
                    <td class="center">
                      <a href="javascript:;" class="btn btn-primary btn-xs edit" data-toggle="tooltip" data-placement="top" title="Edit" data="<?= $value->lkk_id; ?>">Edit</a>
                      <a href="javascript:;" class="btn btn-danger btn-xs hapus" data-toggle="tooltip" data-placement="top" title="Hapus" data="<?= $value->lkk_id; ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                  $no++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row-fluid form-data">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Form-lkk</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="#" id="form" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Nama LKK :</label>
                <div class="controls">
                  <input type="text" name="nama_lkk" class="span11" placeholder="Nama LKK" />
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" id="tombol-simpan" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="span3">
        <div class="widget-box">
          <div class="widget-title">
            <h5 style="color: red;">Penjelasan</h5>
          </div>
          <div class="widget-content nopadding">
            <span class="help-inline" style="color: black;">diisi dengan nama LKK (Lembaga Kemasyarakatan Kelurahan)</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->

<!-- jQuery UI -->
<!-- <script src="<? //= base_url('assets/js/jquery.min.js') 
                  ?>"></script> -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/js/jquery.ui.custom.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.uniform.js') ?>"></script>
<script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.tables.js') ?>"></script>

<script type="text/javascript">
  $(".tabel-data").show();
  $(".form-data").hide();

  //hide tabel ketika klik tombol tambah
  $(".tbl-tambah").click(function() {
    $(".tabel-data").hide();
    $(".form-data").show();
  });

  //tombol simpan
  $('#tombol-simpan').click(function() {
    var url;
    var name = $('input[name="nama_lkk"]').val();
    url = '<?= base_url("Lkk/save") ?>';

    $.ajax({
      url: url,
      method: 'post',
      data: {
        "name": name
      },
      dataType: 'json',
      async: false,
      success: function(respon) {
        if (respon.success == true) {
          alert("Berhasil menyimpan");
        }
      },
      error: function() {
        alert('Could not add data');
      }
    });
  })
</script>

</body>

</html>