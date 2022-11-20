<div class="modal fade" id="modal-penambahan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="test">Penambahan Capaian</h4>
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
                    <label for="txtTarget">Target</label>
                    <input type="text" class="form-control" id="txtTarget" placeholder="Target">
                  </div>
                  <div class="form-group">
                    <label for="txtPejabatPemberiTugas">Masa Penilaian</label>                    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="dtpmasapenilaian">
                    </div>
                  <!--  <input type="text" class="form-control" id="txtAkhirMasaPenilaian" placeholder="Akhir Masa Penilaian"> -->
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




