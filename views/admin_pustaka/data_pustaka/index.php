<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Kelola Bebas Pustaka
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
                    <th style="background-color: #EEC01D;">
                      <select class="rounded font-weight-bold btn btn-default" id="filterStatus">
                        <option value="">Filter Status</option>
                        <option value="Diterima">Diterima</option>
                        <option value="Menunggu">Menunggu</option>
                        <option value="Ditolak">Ditolak</option>
                      </select>
                    </th>
                    <th style="background-color: #EEC01D;">Periode</th>
                    <th style="background-color: #EEC01D;">Tahun</th>
                    <th style="background-color: #EEC01D;">SK Bebas Pustaka</th>
                    <th style="background-color: #EEC01D;">Surat</th>
                    <th style="background-color: #EEC01D;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-success" disabled>Diterima</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td class="text-center">
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-warning">Menunggu</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td class="text-center">
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-danger">Ditolak</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td class="text-center">
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-warning">Menunggu</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td class="text-center">
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>2020-01-01</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-success">Diterima</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td class="text-center">
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="background-color: #EEC01D;">No</th>
                    <th style="background-color: #EEC01D;">Tanggal</th>
                    <th style="background-color: #EEC01D;">Nama</th>
                    <th style="background-color: #EEC01D;">NIM</th>
                    <th style="background-color: #EEC01D;">Prodi</th>
                    <th style="background-color: #EEC01D;">Status Berkas</th>
                    <th style="background-color: #EEC01D;">Periode</th>
                    <th style="background-color: #EEC01D;">Tahun</th>
                    <th style="background-color: #EEC01D;">SK Bebas Pustaka</th>
                    <th style="background-color: #EEC01D;">Surat</th>
                    <th style="background-color: #EEC01D;">Aksi</th>
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

  <!-- Modal Hapus -->
  <div class="modal fade" id="modalHapus">
    <div class="modal-dialog">
      <form action="#" method="POST" class="modal-content">

        <!-- Header modal -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Isi modal -->
        <div class="modal-body">
          <p>Apakah Anda yakin ingin menghapus data ini?</p>
        </div>

        <!-- Footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
<?= $this->endSection() ?>