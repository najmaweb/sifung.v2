<div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
    <!-- start tab ketiga -->
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
            <?php echo form_dropdown('media',$media,0,'id="cmbAddMediaView" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jumlah Produk yang diperiksa</label>
            <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Hewan yang diperiksa" id="txtAddJmlHewan">
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jumlah Kemasan</label>
        <input type="number" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Kemasan" id="txtAddJumlahKemasan">
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jenis Kemasan</label>
        <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jenis Kemasan" id="txtAddJenisKemasan">
        </div>
    </div>
    <!-- end tab ketiga -->
</div>