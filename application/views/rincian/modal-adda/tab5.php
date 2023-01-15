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
