<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
  </style>
<div class="modal " id="addrincian">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Penambahan Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <div class="col-3">
            <label for="email" class="mr-sm-2">Capaian:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Capaian" id="txtId" disabled="disabled">
            </div>
            <div class="col-3">Jenis Kegiatan
              <br>
              <input type="radio" name="kegiatan" class="kegiatan" value="I" toShow="negara" toHide="daerah" jnsppk="asal" checked="checked">Impor
              <input type="radio" name="kegiatan" class="kegiatan" value="E" toShow="negara" toHide="daerah" jnsppk="tujuan">Ekspor
              <input type="radio" name="kegiatan" class="kegiatan" value="K" toShow="daerah" toHide="negara" jnsppk="tujuan">Keluar
              <input type="radio" name="kegiatan" class="kegiatan" value="M" toShow="daerah" toHide="negara"  jnsppk="asal">Masuk
            </div>
            <div class="col-3">Kondisi Alat Angkut
            <?php echo form_dropdown('tblsikonangkut',$tblsikonangkut,1,'id="cmbKondisiAngkutan" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
            <div class="col-3">Turgor kulit
            <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbTurgor" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
            <label for="email" class="mr-sm-2">Urut:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Urut" id="txtUrt" disabled="disabled">
            </div>
            <div class="col-3">Asal
              <div class="negara">
                <?php echo form_dropdown('asalnegara',$asalnegara,1,'id="asalnegara" class="form-control negara"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;;display:none"');?>
              </div>
              <div class="daerah">
                <?php echo form_dropdown('asaldaerah',$asaldaerah,1,'id="asaldaerah" class="form-control daerah"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;display:none" ');?>
              </div>

            </div>
            <div class="col-3">Nafsu makan & minum
            <?php echo form_dropdown('tblnafsu',$tblnafsu,1,'id="cmbNafsu" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
            </div>
            <div class="col-3">Suhu standard normal
            <?php echo form_dropdown('cmbSuhu',$tblsuhu,1,'id="cmbSuhu" class="form-control mb-2 mr-sm-2 daerah"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">Nama Pemilik
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nama Pemilik" id="txtPemilik">
            </div>
            <div class="col-3">Keadaan hewan saat berdiri
            <?php echo form_dropdown('tblpresen',$tblpresen,1,'id="cmbPenampakan" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
            </div>
            <div class="col-3">Hasil pemeriksaan suhu
            <input type="number" class="form-control mb-2 mr-sm-2" placeholder="Hasil Pemeriksaan Suhu" id="txtsuhu">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
            <label for="email" class="mr-sm-2">Kd Butir:</label>
              <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Kd Butir" id="txtKdButir" disabled="disabled">
            </div>
            <div class="col-3">Jenis Media Pembawa
            <?php echo form_dropdown('media',$media,1,'id="cmbMedia" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="col-3">Riwayat kesehatan
            <?php echo form_dropdown('tblriwayat',$tblriwayat,1,'id="cmbriwayat" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="col-3">Rekam medis
            <?php echo form_dropdown('tblrekam',$tblrekam,1,'id="cmbRekam" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">Nomor Kegiatan
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nomor Kegiatan" id="txtNops">
            </div>
            <div class="col-3">Asal Media Pembawa
            <?php echo form_dropdown('tbldaerah',$tbldaerah,1,'id="cmbAsalMedia" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="col-3">Jumlah Hewan yang diperiksa
            <input type="number" class="form-control mb-2 mr-sm-2" placeholder="Jumlah Hewan yang diperiksa" id="txtJmlHewan">
            </div>
            <div class="col-3">Kesimpulan
            <textarea  class="form-control mb-2 mr-sm-2" placeholder="Kesimpulan" id="txtKesimpulan"></textarea>
            </div>
        </div>
        <div class="row">
        <div class="col-3">Tgl Operasional
          <div class="input-group" data-target-input="nearest" id="dtptgops">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtptgops" />
              <div class="input-group-append" data-target="#dtptgops" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            </div>
          <div class="col-3">Jenis Alat Angkut
          <?php echo form_dropdown('tbljnsangkut',$tbljnsangkut,1,'id="cmbAngkutan" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>          </div>
          <div class="col-3">Palpasi/Aukustasi/Perkusi
            <?php echo form_dropdown('tblsentuh',$tblsentuh,1,'id="cmbRaba" class="form-control mb-2 mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-3">x
          </div>
        </div>


    </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnSveRincian">Simpan</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>