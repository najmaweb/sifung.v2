$('#tbluser').DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "ajax":'/usman/datatablesusers',
    "dom":"Bfrtip",
    "buttons":[
      {
          text: '<i class="fa fa-plus"></i> &nbsp; Penambahan',
          action: function ( e, dt, node, config ) {
            $('#modal-penambahan').modal();
          },
          attr:{class: "btn btn-success"}
      }
    ],
    "columns": [
      {"data":"id"},
      {"data":"kode"},
      {"data":"nama"},
      {"data":"alamat"}
    ],
    "columnDefs": [ 
      {
          "targets": 3,
          "data": null,
          "defaultContent": "<button class='btnedit btn btn-warning btn-sifung'>Edit</button>&nbsp;<button class='btnremove btn btn-danger btn-sifung'>Hapus</button>&nbsp;<button class='btnisi btn btn-primary btn-sifung'>Isi</button>&nbsp;"
      },
      {"visible":true,targets:0},
      { width: "10px", targets: 2 },
      {className:"dt-left",targets: [2]},
      {className:"dt-right",targets: [1]},
      {className:"dt-center",targets: [3]}
     ]


})