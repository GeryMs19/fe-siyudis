<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Pengajuan Berkas Yudisium
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-12 mb-5">
            <div class="pengajuan">
              <br />
              <div class="title-text">
                <div class="title login">Bebas UKT</div>
                <div class="title signup">Bebas Pustaka</div>
              </div>
              <div class="form-container">
                <div class="slide-controls">
                  <input type="radio" name="slide" id="login" checked />
                  <input type="radio" name="slide" id="signup" />
                  <label for="login" class="slide login">Bebas UKT</label>
                  <label for="signup" class="slide signup">Bebas Pustaka</label>
                  <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                  <form action="#" class="login mb-5">
                    <div class="row">
                      <div class="form-group col-4">
                        <label class="form-label" for="ba_sidang">Berita Acara Sidang</label>
                        <input type="file" class="form-control" name="ba_sidang" id="ba_sidang" required placeholder="ba_sidang">
                      </div>
                      <div class="form-group col-4">
                        <label class="form-label" for="khs">Kartu Hasil Studi (TerTTD Dosen Wali)</label>
                        <input type="file" class="form-control" name="khs" id="khs" required placeholder="khs">
                      </div>
                      <div class="form-group col-4">
                        <label class="form-label" for="ss_lunas">Screenshot Lunas UKT AVITA</label>
                        <input type="file" class="form-control" name="ss_lunas" id="ss_lunas" required placeholder="ss_lunas">
                      </div>
                    </div>
                    <div class="field btn">
                      <div class="btn-layer"></div>
                      <input type="submit" value="Ajukan" />
                    </div>
                  </form>
                  <form action="#" class="signup">
                    <div class="row">
                    </div>
                    <div class="field btn">
                      <div class="btn-layer"></div>
                      <input type="submit" value="Ajukan" />
                    </div>
                  </form>
                </div>
              </div>
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