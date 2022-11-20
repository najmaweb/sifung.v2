<style>
  .select2-container .select2-selection--single{
    height: 40px;
  }
  </style>
<div class="modal " id="changePassword">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ganti Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <div class="row">
            <div class="col-3">
              Password
            </div>
            <div class="col-9">
              <input type="password" class="form-control mb-2 mr-sm-2" placeholder="password" id="txtpassword1">
            </div>
        </div>
        <div class="row">
          <div class="col-3">
              konfirmasi
          </div>
          <div class="col-9">
            <input type="password" class="form-control mb-2 mr-sm-2" placeholder="password" id="txtpassword2">
          </div>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnUpdatePassword">Simpan</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>