<div class="tab-pane fade" id="tabKlinis" role="tabpanel" aria-labelledby="klinisTab">
    <!-- start tab keempat -->   
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Keutuhan Kemasan</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" value="<?php echo $me[0]->kemasan;?>" id="txtEditKemasan">
        </div>
        <div class="col-6"><label class="sifunglabel">Keutuhan Segel</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Pemeriksaan Segel" id="txtEditSegel">
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Kecukupan Label</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" value="<?php echo $me[0]->label;?>" placeholder="Kecukupan Label" id="txtEditLabel">
        </div>
        <div class="col-6"><label class="sifunglabel">Konsistensi</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Konsistensi" id="txtEditKonsistensi">
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Warna</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" value="<?php echo $me[0]->warna;?>" placeholder="Warna" id="txtEditWarna">
        </div>
        <div class="col-6"><label class="sifunglabel">Bau</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Hasil Periksa Bau" id="txtEditBau">
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">Rasa</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" value="<?php echo $me[0]->rasa;?>" placeholder="Rasa" id="txtEditRasa">
        </div>
        <div class="col-6"><label class="sifunglabel">Suhu</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Suhu" id="txtEditTemperatur">
        </div>
    </div>
    <div class="row">
        <div class="col-6"><label class="sifunglabel">pH</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="pH" id="txtEditpH">
        </div>
        <div class="col-6"><label class="sifunglabel">Kondisi Umum</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kondisi Umum" id="txtEditKondisiUmum">
        </div>
    </div>
    <!-- end tab keempat -->
</div>
