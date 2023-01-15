<div class="tab-pane fade show active" id="tabCommon" role="tabpanel" aria-labelledby="commonTab">
<!-- start tab pertama-->
<div class="row">
    <div class="col-12"><label class="sifunglabel">Nomor Operasional</label>
    <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Kegiatan" id="txtEditNops">
    <input type="text" style="display:none" id="myurtx">
    </div>
</div>
<div class="row">
    <div class="col-12"><label class="sifunglabel" id="testie">Tgl Operasional</label>
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
    <input type="radio" name="kegiatan" class="editKegiatan" value="K" jnsppk="tujuan">Keluar Antar Area
    <input type="radio" name="kegiatan" class="editKegiatan" value="M" jnsppk="asal">Masuk Antar Area
    </div>
    </div>
</div>
<div class="row">
    <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
    <?php echo form_dropdown('media',$media,1,'id="cmbEditMedia" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
    </div>
</div>
<div class="row">
    <div class="col-12"><label class="sifunglabel">Jumlah Total</label>
    <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Total" id="txtEditJmlTotal">
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
