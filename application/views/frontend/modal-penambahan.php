<div class="modal fade" id="modal-penambahan">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Penambahan Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Entri</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="cmbButirKegiatan">Butir Kegiatan</label>
                    <select class="form-control" id="cmbButirKegiatan"></select>
                  </div>
                  <div class="form-group">
                    <label for="txtNomorDanTanggalSuratTugas">Free Text</label>
                    <input type="text" class="form-control" id="txtNomorDanTanggalSuratTugas" placeholder="Nomor dan Tanggal Surat Tugas">
                  </div>
                  <div class="form-group">
                    <label for="txtPejabatPemberiTugas">Pejabat Pemberi Tugas</label>
                    <input type="text" class="form-control" id="txtPejabatPemberiTugas" placeholder="Pejabat Pemberi Tugas">
                  </div>
                  <div class="form-group">
                    <label for="cmbLokasiKegiatan">Lokasi Kegiatan</label>
                    <select name="cmbLokasiKegiatan" id="cmbLokasiKegiatan"></select>
                  </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->

          </div>

    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSaveKegiatan">Simpan</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<script>
</script>