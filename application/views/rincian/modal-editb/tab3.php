<div class="tab-pane fade" id="tabPresent" role="tabpanel" aria-labelledby="presentTab">
<!-- start tab ketiga -->
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Media Pembawa</label>
            <?php echo form_dropdown('media',$media,1,'id="cmbEditMediaview" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jumlah Produk yang diperiksa</label>
            <input type="number" name="txtEditJmlTotal" id="txtEditJmlTotal" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Produk yang diperiksa">
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jumlah Kemasan</label>
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jumlah Kemasan" id="txtEditJmlKemasan">
        </div>
    </div>
    <div class="row">
        <div class="col-12"><label class="sifunglabel">Jenis Kemasan</label>
            <input type="text" id="txtEditJnsKemasan" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Jenis Kemasan">
        </div>
    </div>
<!-- end tab ketiga -->
</div>
