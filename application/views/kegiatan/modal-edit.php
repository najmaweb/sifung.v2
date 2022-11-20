<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
</style>
<div id="modal-edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Edit Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <label for="txtTarget">Dasar / Surat Tugas</label>
            <input type="text" class="form-control" id="txtEditDasar" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="cmbsubbutir">Sub Butir</label>
            <?php echo form_dropdown('cmbsubbutir',$subbutir,1,'id="cmbEditsubbutir" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="cmbEditpemberi">Pejabat Pemberi Tugas</label>
            <?php echo form_dropdown('cmbEditpemberi',$pemberi,1,'id="cmbEditPemberi" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="cmbEditprop">Lokasi Kegiatan</label>
            <?php echo form_dropdown('cmbEditprop',$prop,1,'id="cmbEditProp" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="txtPejabatPemberiTugas">Mulai Kegiatan</label>                    
            <div class="input-group" data-target-input="nearest" id="dtpEditMasaPenilaianAwal">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtpEditMasaPenilaianAwal" />
              <div class="input-group-append" data-target="#dtpEditMasaPenilaianAwal" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            </div>
          <div>
            <label for="txtPejabatPemberiTugas">Selesai Kegiatan</label>                    
            <div class="input-group date" data-target-input="nearest" id="dtpEditMasaPenilaianAkhir">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpEditMasaPenilaianAkhir"/>
                <div class="input-group-append" data-target="#dtpEditMasaPenilaianAkhir" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>

            </div>
            <div class="form-group">
            <label for="txtTarget">Ringkasan</label>
            <textarea type="text" class="form-control" id="txtEditRingkasan" placeholder="Ringkasan"></textarea>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnUpdateHeader">Simpan</button>
    </div>
    </div>

  </div>
</div>
