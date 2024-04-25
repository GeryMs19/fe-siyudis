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
                <!-- alert berhasil -->
                <div class="alert alert-success" role="alert">Pendaftaran Yudisium berhasil diajukan.</div>
                <h1>DAFTAR YUDISIUM</h1>
                <label for="periode">Periode : Maret/2024</label><br>
                <!--success disabled alert-->
                <div class="bg-info disabled color-palette p-4 rounded" role="alert">Anda sudah melakukan pendaftaran Yudisium.</div>
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