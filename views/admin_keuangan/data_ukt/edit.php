<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Edit Berkas
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card mb-5">
              <div class="card-body">
                <form class="row" action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group col-md-6">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option selected value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="no_surat">No Surat</label>
                    <input type="text" class="form-control" id="no_surat" placeholder="no_surat" value="01/TES/HA/X/2024" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="terbit">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="terbit" placeholder="terbit" value="12-01-2024" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="peninjau">Peninjau</label>
                    <select class="form-control" name="peninjau" id="peninjau" required>
                      <option selected value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                      <option value="1">asd (123)</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="form-label" for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" cols="10" rows="10">lorem ipsum</textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-secondary">Kembali</button></button>
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