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
