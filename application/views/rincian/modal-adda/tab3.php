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
  <?php echo form_dropdown('tblnafsu',$tblnafsu,'1','id="cmbAddNafsu" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;" style="height:40px" ');?>
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
