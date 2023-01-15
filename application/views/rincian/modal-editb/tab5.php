<div class="tab-pane fade" id="penilaianKlinis" role="tabpanel" aria-labelledby="penilaianklinisTab">
    <!-- start tab kelima -->   
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Keutuhan Kemasan</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Pemeriksaan Keutuhan Kemasan" id="txtEdittKeutuhankemasan2">
        </div>
        <div class="col-6"><label>Nilai Kemasan</label>
        <?php echo form_dropdown('editPenKemasan',$penkemasan,'1','id="editPenKemasan" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Keutuhan Segel</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Keutuhan Segel" id="txtEditKeutuhanSegel2">
        </div>
        <div class="col-6"><label>Nilai Segel</label>
            <?php echo form_dropdown('editPenSegel',$pensegel,'1','id="editPenSegel" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Kecukupan Label</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Kecukupan Label" id="txtEditHasilPeriksaKecukupanlabel2">
        </div>
        <div class="col-6"><label>Nilai Kecukupan Label</label>
            <?php echo form_dropdown('editPenKecukupanlabel',$penlabel,'1','id="editPenKecukupanlabel" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Konsistensi</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Konsistensi" id="txtEditKonsistensi2">
        </div>
        <div class="col-6"><label>Nilai Konsistensi</label>
        <?php echo form_dropdown('editPenKonsistensi',$penkonsistensi,'1','id="editPenKonsistensi" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Warna</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Warna" id="txtEditWarna2">
        </div>
        <div class="col-6"><label>Nilai Warna</label>
        <?php echo form_dropdown('editPenMukosa',$penwarna,'1','id="editPenWarna" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Bau</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Hasil Periksa Bau" id="txtEditBau2">
        </div>
        <div class="col-6"><label>Nilai Bau</label>
        <?php echo form_dropdown('editPenBau',$penbau,'1','id="editPenBau" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Rasa</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Rasa" id="txtEditRasa2">
        </div>
        <div class="col-6"><label>Nilai Rasa</label>
        <?php echo form_dropdown('editPenRasa',$penrasa,'1','id="editPenRasa" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Suhu</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Suhu" id="txtEditTemperatur2">
        </div>
        <div class="col-6"><label>Nilai Suhu</label>
        <?php echo form_dropdown('editPenSuhu',$pensuhu,'1','id="editPenTemperatur" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">pH</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="pH" id="txtEditpH2">
        </div>
        <div class="col-6"><label>Nilai pH</label>
        <?php echo form_dropdown('editPenpH',$penpH,'1','id="editPenpH" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Kondisi Umum</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" disabled="disabled" placeholder="Kondisi Umum" id="txtEditKondisiumum2">
        </div>
        <div class="col-6"><label>Nilai Kondisi Umum</label>
        <?php echo form_dropdown('editPenKondisiumum',$penkondisiumum,'1','id="editPenKondisiumum" class="form-control mb-2 mr-sm-2 sifungtext"');?>
        </div>
    </div>
    <!-- end tab kelima -->
</div>
