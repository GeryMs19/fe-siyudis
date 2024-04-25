<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Belum Divalidasi</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>53</h3>

                <p>Berkas Diajukan</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Sudah Divalidasi</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12 col-12">
            <br>
            <div class="card card-warning card-outline p-3">
              <div class="inner">
                <i class="fas fa-info-circle"></i>
                <span class="card-info">Informasi Pendaftaran Yudisium</span>
                <p class="text-justify px-3">
                  1. Periode pendaftaran  yudisium FTI dilakukan setiap bulan dan biasanya dilakukan pada akhir bulan. <br>
                  2. Mahasiswa diharuskan untuk mendaftarkan akun dan mengumpulkan berkas pendaftaran yudisium dengan mengajukan berkas terlebih dahulu lewat menu pengajuan berkas. <br>
                  3. Setelah mengajukan berkas, mahasiswa harus melengkapi seluruh berkas pendaftaran dan dapat melihat status dari pendaftaran pada menu cek status. <br>
                  4. Apabila pendaftaran sudah divalidasi, silahkan unduh tanda terima dan join di grup whatsapp yang tersedia sesuai dengan program studi. <br>
                  5. Apabila terdapat hal yang tidak dimengerti silahkan tanyakan pada Admin Fakultas.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>