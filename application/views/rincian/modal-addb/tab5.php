<div class="tab-pane fade" id="penilaian-pemeriksaan-organoleptik" role="tabpanel" aria-labelledby="penilaian-pemeriksaan-organoleptik">
    <!-- start tab kelima -->   
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Keutuhan Kemasan</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Kemasan" id="txtAddHasilPeriksaKemasan2">
        </div>
        <div class="col-6"><label>Kemasan</label>
        <?php echo form_dropdown('AddPenKemasan',$penkemasan,'0','id="cmbAddPenilaianKemasan"  class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Hasil Periksa Label</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Label" id="txtAddHasilPeriksaLabel2">
        </div>
        <div class="col-6"><label>Label</label>
        <?php echo form_dropdown('addPenLabel',$penlabel,'0','id="cmbAddPenilaianLabel"  class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Hasil Periksa Segel</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Segel" id="txtAddHasilPeriksaSegel">
        </div>
        <div class="col-6"><label>Segel</label>
        <?php echo form_dropdown('addPenSegel',$pensegel,'1','id="cmbAddPenSegel" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Konsistensi</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Segel" id="txtAddHasilPeriksaKonsistensi2">
        </div>
        <div class="col-6"><label>Konsistensi</label>
        <?php echo form_dropdown('AddPenKonsistensi',$penkonsistensi,0,'id="cmbAddPenKonsistensi2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Warna</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Warna" id="txtAddWarna2">
        </div>
        <div class="col-6"><label>Warna</label>
        <?php echo form_dropdown('AddPenWarna',$penwarna,0,'id="cmbAddPenWarna2" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Bau</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Bau" id="txtAddBau2">
        </div>
        <div class="col-6"><label>Bau</label>
        <?php echo form_dropdown('addPenBau',$penbau,'1','id="cmbAddPenBau" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Rasa</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Rasa" id="txtAddRasa2">
        </div>
        <div class="col-6"><label>Rasa</label>
        <?php echo form_dropdown('addPenRasa',$penrasa,'1','id="cmbAddPenRasa" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Suhu</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Suhu" id="txtAddSuhu2">
        </div>
        <div class="col-6"><label>Suhu</label>
        <?php echo form_dropdown('addPenSuhu',$pensuhu,'1','id="cmbAddPenSuhu" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">pH</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="pH" id="txtAddpH2">
        </div>
        <div class="col-6"><label>pH</label>
        <?php echo form_dropdown('addPenpH',$penpH,'1','id="cmbAddPenpH" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Kondisi Umum</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="pH" id="txtAdKondisiUmum2">
        </div>
        <div class="col-6"><label>Kondisi Umum</label>
        <?php echo form_dropdown('addPenKondisiUmum',$penkondisiumum,'1','id="cmbAddPenKondisiUmum" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <!-- end tab kelima -->
</div>
