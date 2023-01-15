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




