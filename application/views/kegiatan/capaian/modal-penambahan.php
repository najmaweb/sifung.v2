<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
</style>
<div id="modal-penambahan" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Penambahan Capaian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="cmbButirKegiatan">Butir Kegiatan</label>
            <?php echo form_dropdown('cmbButirKegiatan',$butirkegiatan,1,'id="cmbButirKegiatan" class="form-control"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
            <div class="form-group">
            <label for="txtTarget">Target</label>
            <input type="number" class="form-control" id="txtTarget" placeholder="Target">
            </div>
            <div class="form-group">
            <label for="txtPejabatPemberiTugas">Masa Penilaian Awal</label>                    
            <div class="input-group" data-target-input="nearest" id="dtpmasapenilaianawal">
              <input type="text" class="form-control datetimepicker-input" data-target="#dtpmasapenilaianawal" />
              <div class="input-group-append" data-target="#dtpmasapenilaianawal" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            </div>
            <div>
            <label for="txtPejabatPemberiTugas">Masa Penilaian Akhir</label>                    
            <div class="input-group date" data-target-input="nearest" id="dtpmasapenilaianakhir">
                <input type="text" class="form-control datetimepicker-input" data-target="#dtpmasapenilaianakhir"/>
                <div class="input-group-append" data-target="#dtpmasapenilaianakhir" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="btnSaveCapaian">Simpan</button>
    </div>
    </div>
  </div>
</div>