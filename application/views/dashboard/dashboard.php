  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4 class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_pagu; ?></h4>

                <p>Pagu Anggaran di Tahun Sekarang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sum_realisasi; ?></h4>

                <p>Realisasi Anggaran di Tahun Sekarang</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4 class="rupiah" data-a-sign="Rp " data-a-dec="none" data-a-sep="."><?= $sisa_realisasi; ?></h4>

                <p>Sisa Anggaran di Tahun Sekarang</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><?= $bulat_persen;?><sup style="font-size: 20px">%</sup></h4>

                <p>Persentase Serapan di Tahun Sekarang</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main content table -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Realisasi Anggaran
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                  </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow:auto;">
                  <table class="table table-bordered table-striped dataTabel">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Tahun</th>
                      <th>Username</th>
                      <th>Nama LKK</th>
                      <th>Jumlah Pagu</th>
                      <th>Jumlah Realisasi</th>
                      <th>% Realisasi</th>
                      <th>Sisa Anggaran</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($anggaran as $key => $value) 
                      {
                        $sum = array_sum($value['anggaran']);
                        $pagu = $value['pagu'][0];
                        $pers_realisasi = ($sum/$pagu)*100;

                        $bulat_per = number_format($pers_realisasi,2);

                        $sisa = ($pagu-$sum);

                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$value['tahun'][0]."</td>";
                        echo "<td>".$value['username'][0]."</td>";
                        echo "<td>".$value['nama_lkk'][0]."</td>";
                        echo "<td class='rupiah' data-a-sign='Rp ' data-a-dec='none' data-a-sep='.'>".$value['pagu'][0]."</td>";
                        echo "<td class='rupiah' data-a-sign='Rp ' data-a-dec='none' data-a-sep='.'>".$sum."</td>";
                        echo "<td>".$bulat_per."</td>";
                        echo "<td class='rupiah' data-a-sign='Rp ' data-a-dec='none' data-a-sep='.'>".$sisa."</td>";
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
        <!-- /.content tabel -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->