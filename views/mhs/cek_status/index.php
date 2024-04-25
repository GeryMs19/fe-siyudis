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
                  <li>Selesai</li>
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
                          <input class="form-control" type="text" disabled name="status" id="status" placeholder="Belum Divalidasi" value="Belum Divalidasi" style="color: red">
                        </div>
                      </div>
                    </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Student ID</th>
                    <th>Status</th>
                    <th>Detail</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Surat Pernyataan</td>
                    <td><p class="small text-center rounded bg-success">Diterima</p></td>
                    <td><button type="button" class="btn btn-primary">Lihat</button></td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Surat Bebas UKT</td>
                    <td><p class="small text-center rounded bg-warning">Menunggu</p></td>
                    <td><button type="button" class="btn btn-primary">Lihat</button></td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Surat Keterangan</td>
                    <td><p class="small text-center rounded bg-danger">Ditolak</p></td>
                    <td><button type="button" class="btn btn-primary">Lihat</button></td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Surat Keterangan</td>
                    <td><p class="small text-center rounded bg-warning">Menunggu</p></td>
                    <td><button type="button" class="btn btn-primary">Lihat</button></td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Surat Keterangan</td>
                    <td><p class="small text-center rounded bg-success">Diterima</p></td>
                    <td><button type="button" class="btn btn-primary">Lihat</button></td>
                    <td>-</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Student ID</th>
                    <th>Status</th>
                    <th>Detail</th>
                    <th>Keterangan</th>
                  </tr>
                  </tfoot>
                </table>
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