<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>
Periode & Tanda Terima
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Periode & Tanda Terima</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <label for="periode">Periode : Maret/2024</label><br>
                <p class="badge badge-danger" id="periode">Periode Sudah Berakhir atau Belum Dimulai</p>
                <form action="../../admin_fti/periode/selesai.html" method="get">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label class="form-label" for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tanggal_awal" placeholder="tanggal_awal">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tanggal_akhir" placeholder="tanggal_akhir">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                      <div class="form-group" id="linkSection">
                        <button type="button" class="btn btn-primary my-2" id="addLinkButton">Tambah Link</button>
                        <div class="row linkRow">
                        </div>
                      </div>
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
    
    <script>
      var addButton = document.getElementById('addLinkButton');
      var linkSection = document.getElementById('linkSection');

      addButton.addEventListener('click', function() {
        var newRow = document.createElement('div');
        newRow.classList.add('row', 'linkRow');
        newRow.innerHTML = `
          <div class="col-md-6">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link[]">
          </div>
          <div class="col-md-6">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan[]">
          </div>
          <div class="col-md-12 my-2">
            <button type="button" class="btn btn-danger removeLinkButton">Hapus</button>
          </div>
        `;
        linkSection.appendChild(newRow);
      });

      linkSection.addEventListener('click', function(event) {
        if (event.target.classList.contains('removeLinkButton')) {
          var row = event.target.closest('.linkRow');
          linkSection.removeChild(row);
        }
      });
    </script>
<?= $this->endSection() ?>