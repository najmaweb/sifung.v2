<div id="modal-penambahan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Penambahan Rincian Kegiatan.</p>
            <div class="form-group">
            <label for="txtTarget">Index</label>
            <input type="text" class="form-control" id="txtIndex" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="txtTarget">Urut</label>
            <input type="text" class="form-control" id="txtUrut" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="txtTarget">Sub Urut</label>
            <input type="text" class="form-control" id="txtSuburut" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="txtTarget">Kode Butir Kegiatan</label>
            <input type="text" class="form-control" id="txtKdButir" placeholder="Dasar / Surat Tugas">
            </div>

            <div class="form-group">
            <label for="cmbButirKegiatan">Sub Butir Kegiatan</label>
            <?php echo form_dropdown('cmbkdsubutir',$cmbkdsubutir,1,'id="cmbkdsubutir" class="form-control"');?>
            </div>
            <div class="form-group">
            <label for="txtTarget">Nomor Kegiatan Operasional</label>
            <input type="text" class="form-control" id="txtDasar" placeholder="Dasar / Surat Tugas">
            </div>

            <div class="form-group">
            <label for="txtPejabatPemberiTugas">Tanggal Operasional</label>
            <div class="input-group" data-target-input="nearest" id="dtptgops">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtptgops" />
              <div class="input-group-append" data-target="#dtptgops" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            </div>



            <div class="form-group">
              <label for="">Jenis Kegiatan</label>
              <input type="radio">Import
            </div>


            <div class="form-group">
            <label for="txtTarget">Nama Pemilik</label>
            <input type="text" class="form-control" id="txtPemilik" placeholder="Dasar / Surat Tugas">
            </div>
            <div class="form-group">
            <label for="txtTarget">Ringkasan</label>
            <input type="text" class="form-control" id="txtRingkasan" placeholder="Ringkasan">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSaveRincian">Simpan</button>
    </div>
    </div>

  </div>
</div>
