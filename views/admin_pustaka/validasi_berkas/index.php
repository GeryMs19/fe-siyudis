<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Validasi Berkas
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mb-5">
              <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="background-color: #EEC01D;">No</th>
                    <th style="background-color: #EEC01D;">Tanggal</th>
                    <th style="background-color: #EEC01D;">Nama</th>
                    <th style="background-color: #EEC01D;">NIM</th>
                    <th style="background-color: #EEC01D;">Prodi</th>
                    <th style="background-color: #EEC01D;">Status Peminjaman</th>
                    <th style="background-color: #EEC01D;">Status</th>
                    <th style="background-color: #EEC01D;">Surat Bebas Pustaka</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><b>Tidak Ada</b></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><b>Tidak Ada</b></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><b>Tidak Ada</b></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><b>Tidak Ada</b></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><b>Tidak Ada</b></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="background-color: #EEC01D;">No</th>
                    <th style="background-color: #EEC01D;">Tanggal</th>
                    <th style="background-color: #EEC01D;">Nama</th>
                    <th style="background-color: #EEC01D;">NIM</th>
                    <th style="background-color: #EEC01D;">Prodi</th>
                    <th style="background-color: #EEC01D;">Status Peminjaman</th>
                    <th style="background-color: #EEC01D;">Status</th>
                    <th style="background-color: #EEC01D;">Surat Bebas Pustaka</th>
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