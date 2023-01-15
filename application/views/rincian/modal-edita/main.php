<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
  </style>
<div class="modal " id="editrincian">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Rincian</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      <!-- tab begin -->
      <div class="row">
          <div class="col-12">
            <h4><?php echo "";?> <small><?php echo "";?></small></h4>
          </div>
        </div>
        <!-- ./row -->
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <?php $this->load->view('rincian/modal-edita/card-header');?>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <?php $this->load->view('rincian/modal-edita/tab1');?>
                  <?php $this->load->view('rincian/modal-edita/tab2');?>
                  <?php $this->load->view('rincian/modal-edita/tab3');?>
                  <?php $this->load->view('rincian/modal-edita/tab4');?>
                  <?php $this->load->view('rincian/modal-edita/tab5');?>
                  <?php $this->load->view('rincian/modal-edita/tab6');?>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      <!-- tab end -->
      <?php if(1==3){?>
        <div class="row">
        <div class="col-12"><label class="sifunglabel">Riwayat kesehatan</label>
          <?php echo form_dropdown('tblriwayat',$tblriwayat,1,'id="cmbEditRiwayat" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
        </div>

        <div class="row">
          <div class="col-12"><label class="sifunglabel">Palpasi/Aukustasi/Perkusi</label>
            <?php echo form_dropdown('tblsentuh',$tblsentuh,1,'id="cmbEditRaba" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
          </div>
          <div class="col-12"><label class="sifunglabel">Rekam medis</lable>
            <?php echo form_dropdown('tblrekam',$tblrekam,1,'id="cmbEditRekam" class="form-control mb-2 mr-sm-2 sifungtext"  data-dropdown-css-class="select2-danger sifung-autocomplete" style="height:40px;"');?>
            </div>
        </div>

        <div class="row" style="display:none">
        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Urut:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urut" id="txtEditUrt">
            </div>

        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Urutx:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Urutx" id="txtEditUrtx">
            </div>
        <div class="col-12">
          <label for="email" class="mr-sm-2 sifunglabel">Capaian:</label>
              <input type="text" disabled="disabled" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Capaian" id="txtEditId">
        </div>
        <div class="col-12">
            <label for="email" class="mr-sm-2 sifunglabel">Kd Butir:</label>
              <input type="text" class="form-control mb-2 mr-sm-2 sifungtext" placeholder="Kd Butir" id="txtEditKdButir">
            </div>
        </div>
        <?php }?>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnUpdateRincian">Update</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Tutup</button>
      </div>

    </div>
  </div>
</div>