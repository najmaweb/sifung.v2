<div id="modal-edit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Capaian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="cmbButirKegiatan">Butir Kegiatan</label>
            <?php echo form_dropdown('cmbButirKegiatan',$butirkegiatan,1,'id="cmbEditButirKegiatan" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="txtEditTarget">Target</label>
            <input type="number" class="form-control" id="txtEditTarget" placeholder="Target">
            </div>
            <div class="form-group">
            <label for="txtPejabatPemberiTugas">Masa Penilaian Awal</label>                    
            <div class="input-group dtp" data-target-input="nearest" id="dtpeditmasapenilaianawal">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtpeditmasapenilaianawal" />
              <div class="input-group-append" data-target="#dtpeditmasapenilaianawal" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            </div>
            <div>
            <label for="txtPejabatPemberiTugas">Masa Penilaian Akhir</label>                    
            <div class="input-group date dtp" data-target-input="nearest" id="dtpeditmasapenilaianakhir">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpeditmasapenilaianakhir"/>
                <div class="input-group-append" data-target="#dtpeditmasapenilaianakhir" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>

            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnUpdateCapaian">Update</button>
    </div>
    </div>

  </div>
</div>