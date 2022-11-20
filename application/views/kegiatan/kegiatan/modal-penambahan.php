<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
</style>

<div id="modal-penambahan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Penambahan Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <label for="txtTarget">Dasar / Surat Tugas</label>
            <input type="text" class="form-control" id="txtDasar" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="cmbsubbutir">Sub Butir</label>
            <?php echo form_dropdown('cmbsubbutir',$subbutir,1,'id="cmbsubbutir" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="cmbpember">Pejabat Pemberi Tugas</label>
            <?php echo form_dropdown('cmbpemberi',$pemberi,1,'id="cmbpemberi" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="cmbprop">Lokasi Kegiatan</label>
            <?php echo form_dropdown('cmbprop',$prop,1,'id="cmbprop" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
              <label for="txtPejabatPemberiTugas">Mulai Kegiatan</label>                    
              <div class="input-group" data-target-input="nearest" id="dtpmasapenilaianawal">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpmasapenilaianawal" />
                <div class="input-group-append" data-target="#dtpmasapenilaianawal" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
              </div>
            <div>
            <label for="txtPejabatPemberiTugas">Selesai Kegiatan</label>                    
            <div class="input-group date" data-target-input="nearest" id="dtpmasapenilaianakhir">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpmasapenilaianakhir"/>
                <div class="input-group-append" data-target="#dtpmasapenilaianakhir" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            </div>
            <div class="form-group">
            <label for="txtTarget">Ringkasan</label>
            <textarea class="form-control" name="txtRingkasan" id="txtRingkasan" cols="30" rows="10"></textarea>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSaveHeader">Simpan</button>
    </div>
    </div>

  </div>
</div>
