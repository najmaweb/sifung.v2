<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
  </style>
<div class="modal " id="editrincian">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-3"><label class="sifunglabel">Nomor Operasional</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Kegiatan" id="txtEditNops">
          </div>
          <div class="col-3"><label class="sifunglabel">Nama Pemilik</label>
          <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nama Pemilik" id="txtEditPemilik">
          </div>
          <div class="col-3"><label class="sifunglabel">Riwayat kesehatan</label>
          <?php echo form_dropdown('tblriwayat',$tblriwayat,1,'id="cmbEditRiwayat" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>

          <div class="col-3"><label class="sifunglabel">Nafsu makan & minum</label>
            <?php echo form_dropdown('tblnafsu',$tblnafsu,1,'id="cmbEditNafsu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
          </div>
        </div>

        <div class="row">
          <div class="col-3"><label class="sifunglabel">Tgl Operasional</label>
            <div class="input-group sifungtext" data-target-input="nearest" id="dtpEdittgops">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtpEdittgops" />
              <div class="input-group-append" data-target="#dtpEdittgops" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="col-3"><label class="sifunglabel">Media Pembawa</label>
            <?php echo form_dropdown('media',$media,1,'id="cmbEditMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtEditJmlHewan">
          </div>
          <div class="col-3"><label class="sifunglabel">Palpasi/Aukustasi/Perkusi</label>
            <?php echo form_dropdown('tblsentuh',$tblsentuh,1,'id="cmbEditRaba" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
        </div>

        <div class="row">
          <div class="col-3"><label class="sifunglabel">Jenis Kegiatan</label>
              <br>
              <input type="radio" name="kegiatan" class="editKegiatan" value="I" jnsppk="asal">Impor
              <input type="radio" name="kegiatan" class="editKegiatan" value="E" jnsppk="tujuan">Ekspor
              <input type="radio" name="kegiatan" class="editKegiatan" value="K" jnsppk="tujuan">Keluar
              <input type="radio" name="kegiatan" class="editKegiatan" value="M" jnsppk="asal">Masuk
            </div>
          <div class="col-3"><label class="sifunglabel">Jenis Alat Angkut</label>
            <?php echo form_dropdown('tbljnsangkut',$tbljnsangkut,1,'id="cmbEditAngkutan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>          
          </div>

          <div class="col-3"><label class="sifunglabel">Keadaan hewan saat berdiri</label>
            <?php echo form_dropdown('tblpresen',$tblpresen,1,'id="cmbEditPenampakan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
          </div>

          <div class="col-3"><label class="sifunglabel">Turgor kulit</label>
            <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbEditTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
        </div>

        <div class="row">
          <div class="col-3"><label class="sifunglabel">Asal</label>
              <div class="asalnegara">
                <?php echo form_dropdown('asalnegara',$asalnegara,1,'id="cmbEditasalnegara" class="form-control mb-2 mr-sm-2 sifungtext editasalnegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
              </div>
              <div class="asaldaerah">
                <?php echo form_dropdown('asaldaerah',$asaldaerah,1,'id="cmbEditAsalDaerah" class="form-control mb-2 mr-sm-2 sifungtext editasaldaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
              </div>

            </div>
                      <div class="col-3"><label class="sifunglabel">Kondisi Alat Angkut</label>
            <?php echo form_dropdown('tblsikonangkut',$tblsikonangkut,1,'id="cmbEditKondisiAngkutan" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            </div>
            <div class="col-3"><label class="sifunglabel">Suhu standard normal</label>
            <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbEditSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
            </div>


            <div class="col-3"><label class="sifunglabel">Rekam medis</lable>
            <?php echo form_dropdown('tblrekam',$tblrekam,1,'id="cmbEditRekam" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
        </div>
        <div class="row">
          <div class="col-3"><label class="sifunglabel">Tujuan</label>
              <div class="tujuannegara">
                <?php echo form_dropdown('tujuannegara',$asalnegara,1,'id="cmbEditTujuannegara" class="form-control mb-2 sifungtext mr-sm-2 edittujuannegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
              </div>
              <div class="tujuandaerah">
                <?php echo form_dropdown('tujuandaerah',$asaldaerah,1,'id="cmbEditTujuanDaerah" class="form-control mb-2 sifungtext mr-sm-2 edittujuandaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
              </div>

            </div>

            <div class="col-3">
            </div>

        <div class="col-3"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txEdittSuhuriil">
        </div>

        <div class="col-3"><label class="sifunglabel">Kesimpulan</label>
            <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtEditKesimpulan"></textarea>
            </div>
        </div>
        <div class="row" style="display:none">
        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Urut:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urut" id="txtEditUrt">
            </div>

        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Urutx:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urutx" id="txtEditUrtx">
            </div>
        <div class="col-3">
          <label for="email" class="mr-sm-2 sifunglabel">Capaian:</label>
              <input type="text" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Capaian" id="txtEditId">
        </div>
        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Kd Butir:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kd Butir" id="txtEditKdButir">
            </div>
        </div>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnUpdateRincian">Update</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Tutup</button>
      </div>

    </div>
  </div>
</div>