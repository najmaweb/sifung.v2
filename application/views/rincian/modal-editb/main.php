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
              <?php $this->load->view('rincian/modal-editb/card-header');?>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <?php $this->load->view('rincian/modal-editb/tab1');?>
                  <?php $this->load->view('rincian/modal-editb/tab2');?>
                  <?php $this->load->view('rincian/modal-editb/tab3');?>
                  <?php $this->load->view('rincian/modal-editb/tab4');?>
                  <?php $this->load->view('rincian/modal-editb/tab5');?>
                  <?php $this->load->view('rincian/modal-editb/tab6');?>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      <!-- tab end -->
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnUpdateRincian">Update</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Tutup</button>
      </div>
    </div>
  </div>
</div>
<script src='/assets/js/rincian/updateb.js?v=1'></script>