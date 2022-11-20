<div class="modal fade" id="modal-penambahan">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Penambahan Capaian</h4>
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
                    <?php echo form_dropdown('cmbButirKegiatan',$butirkegiatan,1,'id="cmbButirKegiatan" class="form-control"');?>
                  </div>
                  <div class="form-group">
                    <label for="txtNomorDanTanggalSuratTugas">Target</label>
                    <input type="text" class="form-control" id="txtTarget" placeholder="Target">
                  </div>
                  <div class="form-group">
                    <label for="txtPejabatPemberiTugas">Masa Penilaian</label>
                    <input type="text" class="form-control" id="txtMasaPenilaian" placeholder="Masa Penilaian">
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
        <button type="button" class="btn btn-primary" id="btnSaveCapaian">Simpan</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<script>
</script>