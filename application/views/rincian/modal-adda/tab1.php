<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
<!-- start tab pertama-->
<div class="row">
    <div class="col-12"><label class="sifunglabel">Nomor Operasional</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Nomor Operasional" id="txtAddNops">
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
            <input type="radio" name="kegiatan" class="addKegiatan" value="I" jnsppk="asal"> Impor &nbsp;
            <input type="radio" name="kegiatan" class="addKegiatan" value="E" jnsppk="tujuan"> Ekspor &nbsp;
            <input type="radio" name="kegiatan" class="addKegiatan" value="K" jnsppk="tujuan"> Keluar Antar Area &nbsp;
            <input type="radio" name="kegiatan" class="addKegiatan" value="M" jnsppk="asal"> Masuk Antar Area
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
