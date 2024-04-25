<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Update Profil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-6">
            <div class="card">
              <div class="card-body">
                <form class="" action="#" method="POST" enctype="multipart/form-data">
                  <div class="d-flex justify-content-center align-items-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../../assets/img/default.png" alt="">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" value="Andi">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="123456789" value="123456789">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="prodi">Program Studi</label>
                    <select class="form-control" name="prodi" id="prodi">
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
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