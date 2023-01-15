<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
    <!-- start tab kedua -->   
    <div class="row">
        <div class="col-2"><label class="sifunglabel">Nama Dokumen 1</label></div>
        <div class="col-4">
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 1" id="txtAddDocument1">
        </div>
        <div class="col-2"><label class="sifunglabel">Status Dokumen 1</label></div>
            <div class="col-4">
            <?php echo form_dropdown('dokument1',array('absah','tidak absah'),0,'id="cmbAddDocument1" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>            
        </div>
    </div>
    <div class="row">
        <div class="col-2"><label class="sifunglabel">Nama Dokumen 2</label></div>
        <div class="col-4">
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 2" id="txtAddDocument2">
        </div>
        <div class="col-2"><label class="sifunglabel">Status Dokumen 2</label></div>
            <div class="col-4">
            <?php echo form_dropdown('dokument2',array('absah','tidak absah'),0,'id="cmbAddDocument2" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-2"><label class="sifunglabel">Nama Dokumen 3</label></div>
        <div class="col-4">
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 3" id="txtAddDocument3">
        </div>
        <div class="col-2"><label class="sifunglabel">Status Dokumen 3</label></div>
            <div class="col-4">
            <?php echo form_dropdown('dokument3',array('absah','tidak absah'),0,'id="cmbAddDocument3" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <div class="row">
        <div class="col-2"><label class="sifunglabel">Nama Dokumen 4</label></div>
        <div class="col-4">
            <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Dokumen 4" id="txtAddDocument4">
        </div>
        <div class="col-2"><label class="sifunglabel">Status Dokumen 4</label></div>
            <div class="col-4">
            <?php echo form_dropdown('dokument4',array('absah','tidak absah'),0,'id="cmbAddDocument4" class="form-control mb-2 sifungtext mr-sm-2"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
        </div>
    </div>
    <!-- end tab kedua -->
</div>
