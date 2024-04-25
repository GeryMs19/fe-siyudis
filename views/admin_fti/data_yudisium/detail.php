<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Detail Berkas
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-6 mb-5">
                <form class="">
                  <div class="d-flex justify-content-center align-items-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../../assets/img/default.png" alt="">
                  </div>
                  <div class="row text-center m-3 py-2">
                    <div class="col-6">
                        <label class="form-label" for="ijazah">Ijazah SMA</label>
                        <div class="bg-warning p-3 rounded">
                            <img class="img-fluid" src="../../../assets/img/default.png" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="akta">Akta Kelahiran</label>
                        <div class="bg-warning p-3 rounded">
                            <img class="img-fluid" src="../../../assets/img/default.png" alt="">
                        </div>
                    </div>
                  </div>
                  <div class="row text-center m-3 py-2">
                    <div class="col-6">
                        <label class="form-label" for="transkrip">Transkrip Nilai (TTD Wali)</label>
                        <div class="bg-warning p-3 rounded">
                            <img class="img-fluid" src="../../../assets/img/default.png" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="teofl">Sertifikat TOEFL</label>
                        <div class="bg-warning p-3 rounded">
                            <img class="img-fluid" src="../../../assets/img/default.png" alt="">
                        </div>
                    </div>
                  </div>
                </form>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>