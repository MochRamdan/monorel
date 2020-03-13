<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
      <li><a href="#" title="Go to Home" class="tip-bottom">Home</a> <span class="divider">/</span></li>
      <li><a href="#" title="Daftar LKK" class="tip-bottom">Daftar LKK</a> <span class="divider">/</span></li>
      <li class="active">Form LKK</li>
    </ul>
    <h1>Form LKK</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
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

<script src="<?= base_url('assets/js/excanvas.min.js') ?>"></script>
<!-- <script src="<? //= base_url('assets/js/jquery.min.js') 
                  ?>"></script> -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/js/jquery.ui.custom.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.resize.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.peity.min.js') ?>"></script>
<script src="<?= base_url('assets/js/fullcalendar.min.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.dashboard.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.gritter.min.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.interface.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.chat.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.validate.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.form_validation.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.wizard.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.uniform.js') ?>"></script>
<script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.popover.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/js/matrix.tables.js') ?>"></script>

<script type="text/javascript">
  //tombol simpan
  $('#tombol-simpan').click(function() {
    var url;
    url = '<?= base_url("Lkk/save") ?>';

    $.ajax({
      url: url,
      method: 'post',
      data: $('#form').serialize(),
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