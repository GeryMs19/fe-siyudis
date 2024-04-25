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

  <!-- Modal Terima -->
  <div class="modal fade" id="modalTerima">
    <div class="modal-dialog">
      <form class="modal-content">

        <!-- Header modal -->
        <div class="modal-header">
          <h4 class="modal-title">Terima Pengajuan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Isi modal -->
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menerima pengajuan ini?</p>
        </div>

        <!-- Footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Terima</button>
        </div>

      </form>
    </div>
  </div>

  <!-- Modal Tolak -->
  <div class="modal fade" id="modalTolak">
    <div class="modal-dialog">
      <form action="" class="modal-content">

        <!-- Header modal -->
        <div class="modal-header">
          <h4 class="modal-title">Tolak Pengajuan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Isi modal -->
        <div class="modal-body">
              <label for="keterangan">Alasan Penolakan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
        </div>

        <!-- Footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Tolak</button>
        </div>

      </form>
    </div>
  </div>
<?= $this->endSection() ?>