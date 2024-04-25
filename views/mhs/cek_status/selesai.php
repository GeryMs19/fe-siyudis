<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Cek Status Pendaftaran
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mb-5">
              <div class="m-3">
                <ul class="bar-progres">
                  <li class="progres">Pengisian Data</li>
                  <li class="progres">Pengajuan Berkas SK</li>
                  <li class="progres">Submit Pendaftaran</li>
                  <li class="progres">Validasi Admin FTI</li>
                  <li class="progres">Selesai</li>
                </ul>
              </div>
              <div class="card-header">
                  <div class="d-flex justify-content-center align-items-center">
                      <div class="col-6">
                        <div class="form-group">
                          <label class="form-label" for="nama">Nama :</label>
                          <input class="form-control" type="text" disabled name="nama" id="nama" placeholder="Andi" value="Andi">
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="nim">NIM :</label>
                          <input class="form-control" type="text" disabled name="nim" id="nim" placeholder="Andi" value="123456789">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label class="form-label" for="prodi">Program Studi :</label>
                          <select class="form-control" disabled name="prodi" id="prodi">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="status">Status :</label>
                          <input class="form-control" type="text" disabled name="status" id="status" placeholder="Sudah Divalidasi" value="Sudah Divalidasi" style="color: green">
                        </div>
                      </div>
                    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection() ?>