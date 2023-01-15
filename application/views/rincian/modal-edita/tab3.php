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
