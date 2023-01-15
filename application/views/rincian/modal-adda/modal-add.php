
<div class="modal " id="addrincian">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Penambahan Rincian A</h4>
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
                <input type="radio" name="kegiatan" class="addKegiatan" value="K" jnsppk="tujuan">Keluar Antar Area
                <input type="radio" name="kegiatan" class="addKegiatan" value="M" jnsppk="asal">Masuk Antar Area
            </div>
              </div>
              </div>






              <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,0,'id="cmbAddMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Total</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Total" id="txtAddJmlTotal">
                    </div>
                  </div>





              <div class="row">
              <div class="col-12"><label class="sifunglabel">Asal</label>
                <div class="asalnegara">
                  <?php echo form_dropdown('asalnegara',$asalnegara,0,'id="cmbAddAsalNegara" class="form-control mb-2 mr-sm-2 sifungtext addasalnegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                </div>
                <div class="asaldaerah">
                  <?php echo form_dropdown('asaldaerah',$asaldaerah,0,'id="cmbAddAsalDaerah" class="form-control mb-2 mr-sm-2 sifungtext addasaldaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
                </div>

              </div>
              </div>
              <div class="row">
              <div class="col-12"><label class="sifunglabel">Tujuan</label>
                <div class="tujuannegara">
                  <?php echo form_dropdown('tujuannegara',$asalnegara,0,'id="cmbAddTujuanNegara" class="form-control mb-2 sifungtext mr-sm-2 addtujuannegara domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                </div>
                <div class="tujuandaerah">
                  <?php echo form_dropdown('tujuandaerah',$asaldaerah,0,'id="cmbAddTujuanDaerah" class="form-control mb-2 sifungtext mr-sm-2 addtujuandaerah domainppk"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px;display:none" ');?>
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
                    <div class="col-2"><label class="sifunglabel">Nama Dokumen 1</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 1" id="txtAddDocument1">
                    </div>
                    <div class="col-2"><label class="sifunglabel">Status Dokumen 1</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument1',array('absah','tidak absah'),0,'id="cmbAddDocument1" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-2"><label class="sifunglabel">Nama Dokumen 2</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 2" id="txtAddDocument2">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 2</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument2',array('absah','tidak absah'),0,'id="cmbAddDocument2" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 3</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 3" id="txtAddDocument3">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 3</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument3',array('absah','tidak absah'),0,'id="cmbAddDocument3" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-2"><label class="sifunglabel">Nama Dokumen 4</label></div>
                    <div class="col-4">
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 4" id="txtAddDocument4">
                    </div>
                  <div class="col-2"><label class="sifunglabel">Status Dokumen 4</label></div>
                      <div class="col-4">
                      <?php echo form_dropdown('dokument4',array('absah','tidak absah'),0,'id="cmbAddDocument4" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  
                  <!-- end tab kedua -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  <!-- start tab ketiga -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
                      <?php echo form_dropdown('media',$media,0,'id="cmbAddMediaView" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jumlah Hewan yang diperiksa</label>
                      <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtAddJmlHewan">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Jenis Kelamin</label>
                      <?php echo form_dropdown('jeniskelamin',$kelamin,0,'id="cmbAddJenisKelamin" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Warna Bulu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Warna Bulu" id="txtAddWarnaBulu">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Kondisi Umum</label>
                    <input type="text" id="txtAddKondisi" class="form-control mb-2 mr-sm-2 sifungtext">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Nafsu makan & minum</label>
                    <?php echo form_dropdown('tblnafsu',$tblnafsu,0,'id="cmbAddNafsu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
                  </div>

                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Discharge</label>
                      <?php echo form_dropdown('discharge',$discharge,0,'id="cmbAddDischarge" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                      <textarea class="form-control mb-2 mr-sm-2 sifungtext" name="txtAddKeterangan" id="txtAddKeterangan" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <!-- end tab ketiga -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  <!-- start tab keempat -->   
                  <div class="row">
                  <div class="col-6"><label class="sifunglabel">Suhu standard normal</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Suhu Standard Normal" disabled="disabled" id="txtAddSuhuStandard">
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Suhu" id="txtAddsuhu">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Pulsus" id="txtAddPulsus">
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Pulsus" id="txtAddHasilPeriksaPulsus">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Respirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Respirasi" id="txtAddRespirasi" >
                    </div>
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Resipirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Respirasi" id="txtAddHasilPeriksaRespirasi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Limfoglandula</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),0,'id="cmbAddLimfoglandula" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                    <div class="col-6"><label class="sifunglabel">Mukosa</label>
                    <select name="txtAddMukosa" id="txtAddMukosa" class="form-control mb-2 mr-sm-2 sifungtext" >
                      <option value="merah muda">merah muda</option>
                      <option value="hiperemis">hiperemis</option>
                      <option value="anemis">anemis</option>
                      <option value="jaundice">jaundice</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-6"><label class="sifunglabel">Turgor kulit</label>
                    <?php echo form_dropdown('tblturgor',$tblturgor,0,'id="cmbAddTurgor" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                  </div>
                    <div class="col-6"><label class="sifunglabel">Lesi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Lesi" id="txtAddLesi">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Keterangan</label>
                    <textarea class="form-control mb-2 mr-sm-2 sifungtext" name="txtAddKetKlinis" id="txtAddKetKlinis" cols="30" rows="5"></textarea>
                    </div>
                  </div>
                  <!-- end tab keempat -->
                  </div>









                  <div class="tab-pane fade" id="penilaian-pemeriksaan-klinis" role="tabpanel" aria-labelledby="penilaian-pemeriksaan-klinis">
                  <!-- start tab kelima -->   
                    <div class="row">
                      <div class="col-6"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Pemeriksaan Suhu" id="txtAddsuhu2">
                      </div>
                      <div class="col-6"><label>Suhu</label>
                        <?php echo form_dropdown('addPenSuhu',$pensuhu,'1','id="addPenSuhu" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Pulsus" id="txtAddHasilPeriksaPulsus2">
                    </div>
                    <div class="col-6"><label>Pulsus</label>
                    <?php echo form_dropdown('addPenPulsus',$penpulsus,'1','id="addPenPulsus" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Hasil Periksa Resipirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Respirasi" id="txtAddHasilPeriksaRespirasi2">
                    </div>
                    <div class="col-6"><label>Respirasi</label>
                    <?php echo form_dropdown('addPenRespirasi',$penrespirasi,'1','id="addPenRespirasi" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Limfoglandula</label>
                      <?php echo form_dropdown('limfoglandula',array("bengkak","tidak bengkak"),0,'id="cmbAddLimfoglandula2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
                    </div>
                    <div class="col-6"><label>Limfoglandula</label>
                    <?php echo form_dropdown('addPenLimfo',$penlimfo,'1','id="addPenLimfo" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Mukosa</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Mukosa" id="txtAddMukosa2">
                    </div>
                    <div class="col-6"><label>Mukosa</label>
                    <?php echo form_dropdown('addPenMukosa',$penmukosa,'1','id="addPenMukosa" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-6"><label class="sifunglabel">Turgor kulit</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Mukosa" id="cmbAddTurgor2">
                  </div>
                  <div class="col-6"><label>Turgor</label>
                    <?php echo form_dropdown('addPenTurgor',$penturgor,'1','id="addPenTurgor" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6"><label class="sifunglabel">Lesi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Lesi" id="txtAddLesi2">
                    </div>
                    <div class="col-6"><label>Lesi</label>
                    <?php echo form_dropdown('addPenLesi',$penlesi,'1','id="addPenLesi" class="form-control mb-2 mr-sm-2 sifungtext"');?>
                    </div>
                  </div>
                  <!-- end tab kelima -->


                </div>
                  <div class="tab-pane fade" id="custom-tabs-one-kesimpulan" role="tabpanel" aria-labelledby="custom-tabs-one-kesimpulan-tab">
                    <!-- start tab ke enam -->
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil pemeriksaan suhu</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled"  placeholder="Hasil Pemeriksaan Suhu" id="txtAddsuhu3">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Pulsus</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Pulsus" id="txtAddHasilPeriksaPulsus3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Hasil Periksa Resipirasi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Respirasi" id="txtAddHasilPeriksaRespirasi3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Limfoglandula</label>
                      <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Respirasi" id="cmbAddLimfoglandula3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Mukosa</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Mukosa" id="txtAddMukosa3">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-12"><label class="sifunglabel">Turgor kulit</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Mukosa" id="cmbAddTurgor3">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12"><label class="sifunglabel">Lesi</label>
                    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Lesi" id="txtAddLesi3">
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