
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