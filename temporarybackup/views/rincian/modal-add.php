
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
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Dokumen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Presen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Klinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="penilaian-pemeriksaan-klinis-tab" data-toggle="pill" href="#penilaian-pemeriksaan-klinis" role="tab" aria-controls="penilaian-pemeriksaan-klinis" aria-selected="false">Penilaian Pemeriksaan Klinis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-kesimpulan-tab" data-toggle="pill" href="#custom-tabs-one-kesimpulan" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Penetapan Diagnosa</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                     <!-- start tab pertama-->
                     <div class="row">
            <div class="col-12"><label class="sifunglabel">Nomor Operasional</label>
                <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Kegiatan" id="txtAddNops">
            </div>
            </div>
              <div class="row">
            <div class="col-12"><label class="sifunglabel">Tgl Operasional</label>
              <div class="input-group sifungtext" data-target-input="nearest" id="dtpAddtgops">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpAddtgops" />
                <div class="input-group-append" data-target="#dtpAddtgops" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
            </div>
              <div class="row">
            <div class="col-12"><label class="sifunglabel">Jenis Kegiatan</label>
            <div class="sifunglabel">
                <input type="radio" name="kegiatan" class="addKegiatan" value="I" jnsppk="asal">Impor
                <input type="radio" name="kegiatan" class="addKegiatan" value="E" jnsppk="tujuan">Ekspor
                <input type="radio" name="kegiatan" class="addKegiatan" value="K" jnsppk="tujuan">Keluar
                <input type="radio" name="kegiatan" class="addKegiatan" value="M" jnsppk="asal">Masuk
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
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nama Pemilik" id="txtAddPemilik">
              </div>
              </div>


                     <!-- end tab pertama-->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <!-- start tab kedua -->   
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nama Dokumen 1</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 1" id="txtAddDocument1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Status Dokumen 1</label>
                      <?php echo form_dropdown('dokument1',array('absah','tidak absah'),1,'id="cmbAddDocument1" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nama Dokumen 2</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 2" id="txtAddDocument2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Status Dokumen 2</label>
                      <?php echo form_dropdown('dokument2',array('absah','tidak absah'),1,'id="cmbAddDocument2" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nama Dokumen 3</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 3" id="txtAddDocument3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Status Dokumen 3</label>
                      <?php echo form_dropdown('dokument3',array('absah','tidak absah'),1,'id="cmbAddDocument3" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nama Dokumen 4</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 4" id="txtAddDocument4">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Status Dokumen 4</label>
                      <?php echo form_dropdown('dokument4',array('absah','tidak absah'),1,'id="cmbAddDocument4" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  
                  <!-- end tab kedua -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <!-- start tab ketiga -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,1,'id="cmbEditMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtAddJmlHewan">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jenis Kelamin (baru)</label>
                      <?php echo form_dropdown('jeniskelamin',array("Jantan","Betina"),1,'id="cmbAddJenisKelamin" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Warna Bulu (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Warna Bulu" id="txtAddWarnaBulu">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Kondisi Umum</label>
                    <?php echo form_dropdown('tblpresen',$tblpresen,1,'id="cmbAddPenampakan" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nafsu makan & minum</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nafsu Makan" id="txtAddNafsu">
                  </div>

                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Discharge (baru)</label>
                      <?php echo form_dropdown('discharge',array("ada","tidak"),1,'id="cmbAddDischarge" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                      <textarea class="form-control mb-2 mr-sm-2 sifungtext" name="txtAddKeterangan" id="txtAddKeterangan" cols="30" rows="10"></textarea>
                    </div>
                  </div>
                  <!-- end tab ketiga -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  <!-- start tab keempat -->   
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbAddSuhu',$tblsuhu,1,'id="cmbAddSuhu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txAddsuhu">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txAddPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txAddHasilPeriksaPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txAddRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txAddHasilPeriksaRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbAddLimfoglandula" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txAddMukosa">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbAddTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txAddLesi">
                    </div>
                  </div>
                  <!-- end tab keempat -->
                  </div>









                  <div class="tab-pane fade" id="penilaian-pemeriksaan-klinis" role="tabpanel" aria-labelledby="penilaian-pemeriksaan-klinis">
                  <!-- start tab kelima -->   
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbAddSuhu2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txAddsuhu2">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txAddPulsus2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txAddHasilPeriksaPulsus2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txAddRespirasi2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txtAddHasilPeriksaRespirasi2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbAddLimfoglandula2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txAddMukosa2">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbAddTurgor2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txAddLesi2">
                    </div>
                  </div>
                  <!-- end tab kelima -->


                </div>
                  <div class="tab-pane fade" id="custom-tabs-one-kesimpulan" role="tabpanel" aria-labelledby="custom-tabs-one-kesimpulan-tab">
                    <!-- start tab ke enam -->
                    <div class="row">
                  <div class="col-12"><label class="sifunglabel">Suhu standard normal</label>
                    <?php echo form_dropdown('cmbEditSuhu',$tblsuhu,1,'id="cmbAddSuhu3" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txAddsuhu3">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Pulsus (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Pulsus" id="txAddPulsus3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txAddHasilPeriksaPulsus3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Respirasi (baru)</label>
                    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Respirasi" id="txAddRespirasi3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipiras (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txtAddHasilPeriksaRespirasi3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula (baru)</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),1,'id="cmbAddLimfoglandula3" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Mukosa" id="txtAddMukosa3">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,1,'id="cmbAddTurgor3" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi (baru)</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txtAddLesi3">
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12"><label class="sifunglabel">Diagnosa Akhir</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtAddDiagnosaAkhir"></textarea>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-12"><label class="sifunglabel">Tindak Lanjut</label>
                      <textarea  class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kesimpulan" id="txtAddTindakLanjut"></textarea>
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
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSveRincian">Simpan</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>