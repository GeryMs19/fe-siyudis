<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Pendaftaran Yudisium
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-12 mb-5">
            <div class="card">
              <div class="card-body">
                <form class="" action="#" method="POST" enctype="multipart/form-data">
                  <div class="d-flex justify-content-center align-items-center py-2 mb-3" style="background-color: #EEC01D; border-radius: 20px;">
                    <b>Form Pendaftaran Yudisium</b>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                      <label class="form-label" for="sb_ukt">Surat Bebas UKT</label>
                      <input type="text" disabled class="form-control" name="sb_ukt" id="sb_ukt" placeholder="Diterbitkan">
                      <a href="../pengajuan_berkas/index.html">Lengkapi Berkas</a>
                    </div>
                    <div class="form-group col-1">
                      <input class="mt-5" type="checkbox" checked disabled>
                    </div>
                    <div class="form-group col-3">
                      <label class="form-label" for="sb_lab">Surat Bebas Lab</label>
                      <input type="text" disabled class="form-control" name="sb_lab" id="sb_lab" placeholder="Diterbitkan">
                    </div>
                    <div class="form-group col-1">
                      <input class="mt-5" type="checkbox" checked disabled>
                    </div>
                    <div class="form-group col-3">
                      <label class="form-label" for="sb_pus">Surat Bebas Pustaka</label>
                      <input type="text" disabled class="form-control" name="sb_pus" id="sb_pus" placeholder="Diterbitkan">
                    </div>
                    <div class="form-group col-1">
                      <input class="mt-5" type="checkbox" checked disabled>
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="transkrip">Transkrip</label>
                      <input type="file" class="form-control" name="transkrip" id="transkrip" required placeholder="transkrip">
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="toefl">Sertifikat TOEFL</label>
                      <input type="file" class="form-control" name="toefl" id="toefl" required placeholder="toefl">
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="ijazah">Ijazah SMA</label>
                      <input type="file" class="form-control" name="ijazah" id="ijazah" required placeholder="ijazah">
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="foto">Foto 3x4</label>
                      <input type="file" class="form-control" name="foto" id="foto" required placeholder="foto">
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="akta">Akta kelahiran</label>
                      <input type="file" class="form-control" name="akta" id="akta" required placeholder="akta">
                    </div>
                    <div class="form-group col-6">
                      <label class="form-label" for="surat_lunas">Surat Keterangan Lunas (Opsional)</label>
                      <input type="file" class="form-control" name="surat_lunas" id="surat_lunas" enabled placeholder="surat_lunas">
                    </div>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn text-white px-5" style="background-color: #EEC01D;">DAFTAR</button>
                  </div>
                </form>
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