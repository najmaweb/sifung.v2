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

      <!-- tab begin -->
      <div class="row">
          <div class="col-12">
            <h4><?php echo "";?> <small><?php echo "";?></small></h4>
          </div>
        </div>
        <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="commonTab" data-toggle="pill" href="#tabCommon" role="tab" aria-controls="tabCommon" aria-selected="true">Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="documentTab" data-toggle="pill" href="#tabDocument" role="tab" aria-controls="tabDocument" aria-selected="false">Dokumen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="presentTab" data-toggle="pill" href="#tabPresent" role="tab" aria-controls="tabPresent" aria-selected="false">Presen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="klinisTab" data-toggle="pill" href="#tabKlinis" role="tab" aria-controls="tabKlinis" aria-selected="false">Klinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="penilaianklinisTab" data-toggle="pill" href="#penilaianKlinis" role="tab" aria-controls="tabKlinis" aria-selected="false">Penilaian Pemeriksaan Klinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="kesimpulanTab" data-toggle="pill" href="#tabKesimpulan" role="tab" aria-controls="tabKesimpulan" aria-selected="false">Penetapan Diagnosa</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="tabCommon" role="tabpanel" aria-labelledby="commonTab">
                     <!-- start tab pertama-->
                     <div class="row">
            <div class="col-12"><label class="sifunglabel">Nomor Operasional</label>
                <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Kegiatan" id="txtEditNops">
                <input type="text" style="display:none" id="myurtx">
            </div>
            </div>
              <div class="row">
            <div class="col-12"><label class="sifunglabel" id="testie">Tgl Operasional</label>
              <div class="input-group sifungtext" data-target-input="nearest" id="dtpEdittgops">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpEdittgops" />
                <div class="input-group-append" data-target="#dtpEdittgops" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
            </div>
              <div class="row">
            <div class="col-12"><label class="sifunglabel">Jenis Kegiatan</label>
            <div class="sifunglabel">
                <input type="radio" name="kegiatan" class="editKegiatan" value="I" jnsppk="asal">Impor
                <input type="radio" name="kegiatan" class="editKegiatan" value="E" jnsppk="tujuan">Ekspor
                <input type="radio" name="kegiatan" class="editKegiatan" value="K" jnsppk="tujuan">Keluar Antar Area
                <input type="radio" name="kegiatan" class="editKegiatan" value="M" jnsppk="asal">Masuk Antar Area
            </div>
              </div>
              </div>





              <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,1,'id="cmbEditMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Total</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Total" id="txtEditJmlTotal">
                    </div>
                  </div>





              <div class="row">
              <div class="col-12"><label class="sifunglabel">Asal</label>
                <div class="asalnegara">
                  <?php echo form_dropdown('asalnegara',$asalnegara,1,'id="cmbEditasalnegara" class="form-control mb-2 mr-sm-2 sifungtext editasalnegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                </div>
                <div class="asaldaerah">
                  <?php echo form_dropdown('asaldaerah',$asaldaerah,1,'id="cmbEditAsalDaerah" class="form-control mb-2 mr-sm-2 sifungtext editasaldaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
                </div>

              </div>
              </div>
              <div class="row">
              <div class="col-12"><label class="sifunglabel">Tujuan</label>
                <div class="tujuannegara">
                  <?php echo form_dropdown('tujuannegara',$asalnegara,1,'id="cmbEditTujuannegara" class="form-control mb-2 sifungtext mr-sm-2 edittujuannegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                </div>
                <div class="tujuandaerah">
                  <?php echo form_dropdown('tujuandaerah',$asaldaerah,1,'id="cmbEditTujuanDaerah" class="form-control mb-2 sifungtext mr-sm-2 edittujuandaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-12"><label class="sifunglabel">Nama Pemilik</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nama Pemilik" id="txtEditPemilik">
              </div>
              </div>


                     <!-- end tab pertama-->
                  </div>
                  <div class="tab-pane fade" id="tabDocument" role="tabpanel" aria-labelledby="documentTab">
                  <!-- start tab kedua -->   
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 1</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 1" id="txtEditDocument1">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 1</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument1',array('absah','tidak absah'),1,'id="cmbEditDocument1" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 2</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 2" id="txtEditDocument2">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 2</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument2',array('absah','tidak absah'),1,'id="cmbEditDocument2" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 3</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 3" id="txtEditDocument3">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 3</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument3',array('absah','tidak absah'),1,'id="cmbEditDocument3" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 4</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 4" id="txtEditDocument4">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 4</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument4',array('absah','tidak absah'),1,'id="cmbEditDocument4" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  
                  <!-- end tab kedua -->
                  </div>
                  <div class="tab-pane fade" id="tabPresent" role="tabpanel" aria-labelledby="presentTab">
                  <!-- start tab ketiga -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,1,'id="cmbEditMediaview" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" disabled="disabled"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtEditJmlHewan">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jenis Kelamin</label>
                      <?php echo form_dropdown('jeniskelamin',$kelamin,1,'id="cmbEditJenisKelamin" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Warna Bulu (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Warna Bulu" id="txtEditWarnaBulu">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Kondisi Umum</label>
                    <input type="text" id="txtEditKondisi" class="form-control mb-2 mr-sm-2 sifungtext">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nafsu makan & minum</label>
                    <?php echo form_dropdown('tblnafsu',$tblnafsu,1,'id="cmbEditNafsu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                  </div>

                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Discharge</label>
                      <?php echo form_dropdown('discharge',$discharge,1,'id="cmbEditDischarge" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" name="txteditketerangan" id="txteditketerangan" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <!-- end tab ketiga -->
                  </div>
                  <div class="tab-pane fade" id="tabKlinis" role="tabpanel" aria-labelledby="klinisTab">
                  <!-- start tab keempat -->   
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Suhu standard normal</label>
                      <input type="text" disabled="disabled"  class="form-control mb-2 mr-sm-2 sifungtext" value="<?php echo $me[0]->suhu;?>" id="cmbEditSuhu">
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txtEdittsuhu">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" value="<?php echo $me[0]->pulsus;?>" placeholder="Pulsus" id="txtEditPulsus">
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txtEditHasilPeriksaPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Respirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" value="<?php echo $me[0]->respirasi;?>" placeholder="Respirasi" id="txtEditRespirasi">
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Resipirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txtEditHasilPeriksaRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Limfoglandula</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbEditLimfoglandula" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                    <div class="col-6"><label class="sifunglabel">Mukosa</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txtEditMukosa">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-6"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbEditTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                    <div class="col-6"><label class="sifunglabel">Lesi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txtEditLesi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                    <textarea class="form-control mb-2 mr-sm-2 sifungtext" name="txtEditKetKlinis" id="txtEditKetKlinis" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <!-- end tab keempat -->
                  </div>



                  <div class="tab-pane fade" id="penilaianKlinis" role="tabpanel" aria-labelledby="penilaianklinisTab">
                  <!-- start tab kelima -->   
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Pemeriksaan Suhu" id="txtEdittsuhu2">
                  </div>
                  <div class="col-6"><label>Suhu</label>
                    <?php echo form_dropdown('editPenSuhu',$pensuhu,'1','id="editPenSuhu" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Pulsus" id="txtEditHasilPeriksaPulsus2">
                    </div>
                    <div class="col-6"><label>Pulsus</label>
                    <?php echo form_dropdown('editPenPulsus',$penpulsus,'1','id="editPenPulsus" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Respirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Respirasi" id="txtEditHasilPeriksaRespirasi2">
                    </div>
                    <div class="col-6"><label>Respirasi</label>
                    <?php echo form_dropdown('editPenRespirasi',$penrespirasi,'1','id="editPenRespirasi" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Limfoglandula</label>
                    <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbEditLimfoglandula2" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                    <div class="col-6"><label>Limfoglandula</label>
                    <?php echo form_dropdown('editPenLimfoglandula',$penlimfo,'1','id="editPenLimfoglandula" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Mukosa</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Mukosa" id="txtEditMukosa2">
                    </div>
                    <div class="col-6"><label>Mukosa</label>
                    <?php echo form_dropdown('editPenMukosa',$penmukosa,'1','id="editPenMukosa" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-6"><label class="sifunglabel">Turgor kulit</label>
                    <!--<input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa TUrgor" id="cmbEditTurgor2">-->
                    <?php echo form_dropdown('cmbEditTurgor2',$tblturgor,'1','id="cmbEditTurgor2" class="form-control mb-2 mr-sm-2 sifungtext"  disabled="disabled"');?>
                  </div>
                  <div class="col-6"><label>Turgor</label>
                    <?php echo form_dropdown('editPenTurgor',$penturgor,'1','id="editPenTurgor" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Lesi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Lesi" id="txtEditLesi2">
                    </div>
                  <div class="col-6"><label>Lesi</label>
                    <?php echo form_dropdown('editPenLesi',$penlesi,'1','id="editPenLesi" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <!-- end tab kelima -->
                  </div>




                  <div class="tab-pane fade" id="tabKesimpulan" role="tabpanel" aria-labelledby="kesimpulanTab">
                    <!-- start tab ke enam -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <?php echo form_dropdown('suhu',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="txtEdittsuhu3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <?php echo form_dropdown('pulsus',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="txtEditHasilPeriksaPulsus3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipirasi</label>
                    <?php echo form_dropdown('respirasi',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="txtEditHasilPeriksaRespirasi3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula</label>
                    <?php echo form_dropdown('limfoglandula',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="cmbEditLimfoglandula3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa</label>
                    <?php echo form_dropdown('mukosa',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="txtEditMukosa3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                  <?php echo form_dropdown('turgor',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="cmbEditTurgor3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi</label>
                    <?php echo form_dropdown('lesi',array("-"=>"Pilihlah","0"=>"Belum sesuai","1"=>"Sudah sesuai"),1,'id="txtEditLesi3" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12"><label class="sifunglabel">Diagnosa Akhir</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Diagnosa Akhir" id="txtEditDiagnosaAkhir"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12"><label class="sifunglabel">Tindak Lanjut</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtEditTindakLanjut"></textarea>
                      </div>
                    </div>
                    <!-- end tab ke enam -->
                    </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      <!-- tab end -->
      <?php if(1==3){?>
        <div class="row">
        <div class="col-12"><label class="sifunglabel">Riwayat kesehatan</label>
          <?php echo form_dropdown('tblriwayat',$tblriwayat,1,'id="cmbEditRiwayat" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
        </div>

        <div class="row">
          <div class="col-12"><label class="sifunglabel">Palpasi/Aukustasi/Perkusi</label>
            <?php echo form_dropdown('tblsentuh',$tblsentuh,1,'id="cmbEditRaba" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-12"><label class="sifunglabel">Rekam medis</lable>
            <?php echo form_dropdown('tblrekam',$tblrekam,1,'id="cmbEditRekam" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
        </div>

        <div class="row" style="display:none">
        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Urut:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urut" id="txtEditUrt">
            </div>

        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Urutx:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urutx" id="txtEditUrtx">
            </div>
        <div class="col-12">
          <label for="email" class="mr-sm-2 sifunglabel">Capaian:</label>
              <input type="text" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Capaian" id="txtEditId">
        </div>
        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Kd Butir:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kd Butir" id="txtEditKdButir">
            </div>
        </div>
        <?php }?>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnUpdateRincian">Update</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Tutup</button>
      </div>

    </div>
  </div>
</div>