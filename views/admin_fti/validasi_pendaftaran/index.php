<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Kelola Data Yudisium
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
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">No</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Tanggal</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Nama</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">NIM</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Prodi</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">FC Ijazah SMA</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">FC Akta Kelahiran</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas UKT</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas Lab</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas Pustaka</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Sertifikat TOEFL</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Pas Foto 3x4</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Detail Berkas</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Status</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Tanda Terima</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailBerkas">Lihat</button></td>
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
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailBerkas">Lihat</button></td>
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
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailBerkas">Lihat</button></td>
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
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailBerkas">Lihat</button></td>
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
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><input type="checkbox" disabled></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#detailBerkas">Lihat</button></td>
                    <td>
                      <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTerima">Terima</button>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalTolak">Tolak</button>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Buat</button></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">No</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Tanggal</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Nama</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">NIM</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Prodi</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">FC Ijazah SMA</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">FC Akta Kelahiran</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas UKT</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas Lab</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">SK Bebas Pustaka</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Sertifikat TOEFL</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Pas Foto 3x4</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Detail Berkas</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Status</th>
                    <th class="small align-items-center m-0" style="background-color: #EEC01D;">Tanda Terima</th>
                  </tr>
                  </tfoot>
                </table>
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

    

    