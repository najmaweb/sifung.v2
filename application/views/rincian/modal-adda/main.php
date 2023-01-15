
<div class="modal " id="addrincian">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Penambahan Rincian A</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <?php $this->load->view('rincian/modal-adda/card-header');?>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <?php $this->load->view('rincian/modal-adda/tab1');?>
                  <?php $this->load->view('rincian/modal-adda/tab2');?>
                  <?php $this->load->view('rincian/modal-adda/tab3');?>
                  <?php $this->load->view('rincian/modal-adda/tab4');?>
                  <?php $this->load->view('rincian/modal-adda/tab5');?>
                  <?php $this->load->view('rincian/modal-adda/tab6');?>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSveRincian">Simpan</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>
