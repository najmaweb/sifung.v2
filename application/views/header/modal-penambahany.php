<div id="modal-penambahan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Penambahan Kegiatan.</p>
            <div class="form-group">
            <label for="txtTarget">Dasar / Surat Tugas</label>
            <input type="text" class="form-control" id="txtDasar" placeholder="Dasar / Surat Tugas">
            </div>

            <div class="form-group">
            <label for="cmbButirKegiatan">Pejabat Pemberi Tugas</label>
            <?php echo form_dropdown('cmbpemberi',$pemberi,1,'id="cmbpemberi" class="form-control"');?>
            </div>
            <div class="form-group">
            <label for="cmbprop">Lokasi Kegiatan</label>
            <?php echo form_dropdown('cmbprop',$prop,1,'id="cmbprop" class="form-control"');?>
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
            <input type="text" class="form-control" id="txtRingkasan" placeholder="Ringkasan">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSaveHeader">Simpan</button>
    </div>
    </div>

  </div>
</div>
