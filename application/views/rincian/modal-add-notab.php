<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
  .modal-body{
      display: flex;
      flex-direction: row;
    }
  .modal-body .row{
    width: 300px;
  }
  .row{
      display:flex;
      flex-direction:column;
    }
    .col-3{
      flex: 0 0 2%;
/*      display:flex;
      flex-direction:row;
      width: 400px;*/
    }
    .col-3 .sifungtext{
      width:250px;
    }
    .col-3 .sifunglabel{
      width: 350px;
    }
    @media screen and (max-width:800px) {
    .modal-body{
      display: flex;
      flex-direction: column;
      width: 1000px;
    }
    .row{
      display:flex;
      flex-direction:column;
    }
    /*.col-3{
      display:flex;
      flex-direction:row;
    }*/
    .col-3 .sifungtext{
      width:400px;
    }
    .col-3 .sifunglabel{
      width: 350px;
    }
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
            <label class="sifunglabel">Nomor Operasional</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Kegiatan" id="txtNops">
          </div>
          <div class="col-3"><label class="sifunglabel">Tgl Operasional</label>
            <div class="input-group sifungtext" data-target-input="nearest" id="dtptgops">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtptgops" />
              <div class="input-group-append" data-target="#dtptgops" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
          <div class="col-3"><label class="sifunglabel">Jenis Kegiatan</label>
              <div class="sifunglabel">
              <input type="radio" name="kegiatan" class="kegiatan" value="I" jnsppk="asal">Impor
              <input type="radio" name="kegiatan" class="kegiatan" value="E" jnsppk="tujuan">Ekspor
              <input type="radio" name="kegiatan" class="kegiatan" value="K" jnsppk="tujuan">Keluar
              <input type="radio" name="kegiatan" class="kegiatan" value="M" jnsppk="asal">Masuk
              </div>
            </div>
            <div class="col-3"><label class="sifunglabel">Asal</label>
              <div class="asalnegara">
                <?php echo form_dropdown('asalnegara',$asalnegara,1,'id="cmbasalnegara" class="form-control mb-2 mr-sm-2 sifungtext addasalnegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
              </div>
              <div class="asaldaerah">
                <?php echo form_dropdown('asaldaerah',$asaldaerah,1,'id="cmbAsalDaerah" class="form-control mb-2 mr-sm-2 sifungtext addasaldaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete"  style="height:40px;display:none" ');?>
              </div>
            </div>
            <div class="col-3"><label class="sifunglabel">Tujuan</label>
              <div class="tujuannegara">
                <?php echo form_dropdown('tujuannegara',$asalnegara,1,'id="cmbTujuannegara" class="form-control mb-2 mr-sm-2 sifungtext addtujuannegara domainppk"  data-dropdown-css-class="select2-danger sifungtext sifung-autocomplete" style="height:40px;"');?>
              </div>
              <div class="tujuandaerah">
                <?php echo form_dropdown('tujuadaerah',$asaldaerah,1,'id="cmbTujuanDaerah" class="form-control mb-2 mr-sm-2 sifungtext addtujuandaerah domainppk"  data-dropdown-css-class="select2-danger sifungtext sifung-autocomplete"  style="height:40px;display:none" ');?>
              </div>
            </div>
        </div>

        <div class="row">
        <div class="col-3"><label class="sifunglabel">Nama Pemilik</label>
          <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nama Pemilik" id="txtPemilik">
          </div>
        <div class="col-3"><label class="sifunglabel">Media Pembawa</label>
            <?php echo form_dropdown('media',$media,1,'id="cmbMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete sifungtext" style="height:40px;"');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Jenis Alat Angkut</label>
            <?php echo form_dropdown('tbljnsangkut',$tbljnsangkut,1,'id="cmbAngkutan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>          
          </div>
          <div class="col-3">
            <label class="sifunglabel">Kondisi Alat Angkut</label>
            <?php echo form_dropdown('tblsikonangkut',$tblsikonangkut,1,'id="cmbKondisiAngkutan" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>


        </div>
        <div class="row">
        <div class="col-3"><label class="sifunglabel">Riwayat kesehatan</label>
          <?php echo form_dropdown('tblriwayat',$tblriwayat,1,'id="cmbRiwayat" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtJmlHewan">
          </div>
          <div class="col-3"><label class="sifunglabel">Keadaan hewan saat berdiri</label>
            <?php echo form_dropdown('tblpresen',$tblpresen,1,'id="cmbPenampakan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px" ');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Suhu standard normal</label>
            <?php echo form_dropdown('cmbSuhu',$tblsuhu,1,'id="cmbSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px" ');?>
            </div>
            <div class="col-3"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txtsuhu">
        </div>
        </div>
        <div class="row">
        <div class="col-3"><label class="sifunglabel">Nafsu makan & minum</label>
            <?php echo form_dropdown('tblnafsu',$tblnafsu,1,'id="cmbNafsu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px" ');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Palpasi/Aukustasi/Perkusi</label>
            <?php echo form_dropdown('tblsentuh',$tblsentuh,1,'id="cmbRaba" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-3"><label class="sifunglabel">Turgor kulit</label>
            <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>

          <div class="col-3"><label class="sifunglabel">Rekam medis</label>
            <?php echo form_dropdown('tblrekam',$tblrekam,1,'id="cmbRekam" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="col-3"><label class="sifunglabel">Kesimpulan</label>
            <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtKesimpulan"></textarea>
            </div>

          </div>
        <div class="row lima" style="display:none">
        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Urut:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urut" id="txtUrt">
            </div>

        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Urutx:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urutx" id="txtUrtx">
            </div>
        <div class="col-3">
          <label for="email" class="mr-sm-2 sifunglabel">Capaian:</label>
              <input type="text" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Capaian" id="txtId">
        </div>
        <div class="col-3">
            <label for="email" class="mr-sm-2 sifunglabel">Kd Butir:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kd Butir" id="txtKdButir">
            </div>
        </div>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSveRincian">Simpan</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>