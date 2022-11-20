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
            </div>
            </div>
              <div class="row">
            <div class="col-12"><label class="sifunglabel">Tgl Operasional</label>
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
                <input type="radio" name="kegiatan" class="editKegiatan" value="K" jnsppk="tujuan">Keluar
                <input type="radio" name="kegiatan" class="editKegiatan" value="M" jnsppk="asal">Masuk
            </div>
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
                    <div class="col-12"><label class="sifunglabel">Dokumen 1</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 1" id="txtEditDocument1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Dok 1</label>
                      <?php echo form_dropdown('dokument1',array('absah','tidak absah'),1,'id="cmbEditDocument1" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Dokumen 2</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 2" id="txtEditDocument2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Dok 2</label>
                      <?php echo form_dropdown('dokument2',array('absah','tidak absah'),1,'id="cmbEditDocument2" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Dok 3</label>
                      <?php echo form_dropdown('dokument3',array('absah','tidak absah'),1,'id="cmbEditDocument3" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Dok 4</label>
                      <?php echo form_dropdown('dokument4',array('absah','tidak absah'),1,'id="cmbEditDocument4" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  
                  <!-- end tab kedua -->
                  </div>
                  <div class="tab-pane fade" id="tabPresent" role="tabpanel" aria-labelledby="presentTab">
                  <!-- start tab ketiga -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,1,'id="cmbEditMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtEditJmlHewan">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jenis Kelamin (baru)</label>
                      <?php echo form_dropdown('jeniskelamin',array("Jantan","Betina"),1,'id="cmbEditJenisKelamin" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Warna Bulu (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Warna Bulu" id="txtEditWarnaBulu">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Kondisi Umum</label>
                    <?php echo form_dropdown('tblpresen',$tblpresen,1,'id="cmbEditPenampakan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nafsu makan & minum</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nafsu Makan" id="txtEditNafsu">
                  </div>

                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Discharge (baru)</label>
                      <?php echo form_dropdown('discharge',array("ada","tidak"),1,'id="cmbEditDischarge" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" name="txteditketerangan" id="txteditketerangan" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <!-- end tab ketiga -->
                  </div>
                  <div class="tab-pane fade" id="tabKlinis" role="tabpanel" aria-labelledby="klinisTab">
                  <!-- start tab keempat -->   
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbEditSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txEdittsuhu">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txEditPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txEditHasilPeriksaPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txEditRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txEditHasilPeriksaRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbEditLimfoglandula" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txEditMukosa">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbEditTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txEditLesi">
                    </div>
                  </div>
                  <!-- end tab keempat -->
                  </div>



                  <div class="tab-pane fade" id="penilaianKlinis" role="tabpanel" aria-labelledby="penilaianklinisTab">
                  <!-- start tab kelima -->   
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbEditSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txEdittsuhu2">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txEditPulsus2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txEditHasilPeriksaPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txEditRespirasi2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txEditHasilPeriksaRespirasi2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbEditLimfoglandula2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txEditMukosa2">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbEditTurgor2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txEditLesi2">
                    </div>
                  </div>
                  <!-- end tab kelima -->
                  </div>




                  <div class="tab-pane fade" id="tabKesimpulan" role="tabpanel" aria-labelledby="kesimpulanTab">
                    <!-- start tab ke enam -->
                    <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbEditSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txEdittsuhu3">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txEditPulsus3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txEditHasilPeriksaPulsus3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txEditRespirasi3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txEditHasilPeriksaRespirasi3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbEditLimfoglandula3" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txEditMukosa3">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbEditTurgor3" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txEditLesi3">
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12"><label class="sifunglabel">Diagnosa Akhir</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtEditDiagnosaAkhir"></textarea>
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