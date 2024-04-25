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
                    <th style="background-color: #EEC01D;">No</th>
                    <th style="background-color: #EEC01D;">Tanggal</th>
                    <th style="background-color: #EEC01D;">Nama</th>
                    <th style="background-color: #EEC01D;">NIM</th>
                    <th style="background-color: #EEC01D;">Prodi</th>
                    <th style="background-color: #EEC01D;">
                      <select class="rounded font-weight-bold btn btn-default" id="filterStatus">
                        <option value="">Filter Status</option>
                        <option value="Sudah Divalidasi">Sudah Divalidasi</option>
                        <option value="Belum Divalidasi">Belum Divalidasi</option>
                      </select>
                    </th>
                    <th style="background-color: #EEC01D;">Periode</th>
                    <th style="background-color: #EEC01D;">Tahun</th>
                    <th style="background-color: #EEC01D;">SK</th>
                    <th style="background-color: #EEC01D;">Surat</th>
                    <th style="background-color: #EEC01D;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>01-01-2023</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-success" disabled>Sudah Divalidasi</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td>
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>01-01-2023</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-danger" disabled>Belum Divalidasi</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td>
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>01-01-2023</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-success" disabled>Sudah Divalidasi</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td>
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>01-01-2023</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-danger" disabled>Belum Divalidasi</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td>
                      <a href="edit.html" class="btn btn-warning btn-sm">Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</button>
                      <a href="detail.html" class="btn btn-success btn-sm">Detail</a>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>01-01-2023</td>
                    <td>Gery</td>
                    <td>123456</td>
                    <td>Sistem Informasi</td>
                    <td><p class="small text-center rounded bg-success" disabled>Sudah Divalidasi</p></td>
                    <td>Januari</td>
                    <td>2023</td>
                    <td>Diterbitkan</td>
                    <td><button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalBerkas">Lihat</button></td>
                    <td>
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
                    <th style="background-color: #EEC01D;">Status</th>
                    <th style="background-color: #EEC01D;">Periode</th>
                    <th style="background-color: #EEC01D;">Tahun</th>
                    <th style="background-color: #EEC01D;">SK</th>
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
<?= $this->endSection() ?>