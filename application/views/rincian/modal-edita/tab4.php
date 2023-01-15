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
