<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Pengajuan Berkas UKT
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="col-12 my-3">
            <div class="container">
              <form action="#" class="" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-4">
                    <label class="form-label" for="ba_sidang">Berita Acara Sidang</label>
                    <input type="file" class="form-control" name="ba_sidang" id="ba_sidang" required placeholder="ba_sidang">
                  </div>
                  <div class="col-4">
                    <label class="form-label" for="khs">Kartu Hasil Studi (TerTTD Dosen Wali)</label>
                    <input type="file" class="form-control" name="khs" id="khs" required placeholder="khs">
                  </div>
                  <div class="col-4">
                    <label class="form-label" for="ss_lunas">Screenshot Lunas UKT AVITA</label>
                    <input type="file" class="form-control" name="ss_lunas" id="ss_lunas" required placeholder="ss_lunas">
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-warning text-white">Ajukan</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>