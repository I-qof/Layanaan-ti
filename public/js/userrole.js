// $.getJSON(API_URL + "/user/getrole", function(data) {
//     data.forEach((item, i) => {
//         $('#selLevel').append($('<option>', {
//           value: item.id,
//           text: item.role
//         }));
//     });
// });

var table = $("#tabel-main").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: APP_URL + "/userroles",
        method: "GET",
    },
    columns: [
        {
            data: "id",
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
            className: "text-center",
        },
        {
            data: "name",
            className: "text-center",
        },
        {
            data: "email",
            className: "text-center",
        },
        {
            data: "roles",
            className: "text-center",
            render: function (data, type, row) {
                var menus = data.map(function (role) {
                    return role.name;
                });
                return menus.join(", ");
            },
        },
        {
            data: null,
            render: function (data, type, row) {
                return (
                    "<div class='btn-group btn-group-sm' role='group' aria-label='Small button group'>" +
                    "<button type='button' class='btn btn-success editData'>Edit</button>" +
                    "<button type='button' class='btn btn-danger hapusData'>Hapus</button>" +
                    "</div>"
                );
            },
            className: "text-center",
        },
    ],
});

// $('#tabel-main_filter').hide();

// $(table.table().container()).on('keyup', 'thead input', function(index){

//    table
//        .column($(this).attr('id').substring(7,10))
//        .search(this.value)
//        .draw();
// });

// $('.btnAddUser').on('click', function(){

//     var $newOption = $("<option selected='selected'></option>").val('').text('');
//     $("#selKary").append($newOption).trigger('change');

//     $('#email').val('');
//     $('#selLevel').val('1').trigger('change');
//     $('#modalAddUser').modal('show');
// });

// $('#formData').on('submit', function(event){

//     event.preventDefault();
//     $.ajax({
//         type : 'POST',
//         url  : API_URL + '/user',
//         data : $('#formData').serialize(),
//         beforeSend: function() {
//             $('#modalAddUser').block({
//                 overlayCSS: { backgroundColor: '#005ba2' }
//             });
//         },
//         success :  function(response){
//             table.draw(false);
//             $('#modalAddUser').unblock();
//             $('#modalAddUser').modal('hide');
//             toastr["success"]("Data berhasil disimpan!", "Notifikasi");
//         },
//         error: function(data){
//             $('#modalAddUser').unblock();

//             var msg     = data.responseJSON;
//             var message = "";

//             $.each(msg, function(key, valueObj){

//                 valueObj.forEach((item, i) => {
//                     message += ". " + item + "<br>"
//                 });
//             });

//             toastr["error"](message, "Error");
//         }
//     });
// });

// $('#tabel-main').on('click', '.editData', function(){

//     data = table.rows($(this).closest('tr').index()).data()[0];

//     var $newOption = $("<option selected='selected'></option>").val(data.username + " | " + data.name).text(data.username + " | " + data.name);
//     $("#selKary").append($newOption).trigger('change');

//     $('#email').val(data.email);
//     $('#selLevel').val(data.level).trigger('change');

//     $('#modalAddUser').modal('show');
// });

// $('#tabel-main').on('click', '.hapusData', function(){

//   data = table.rows($(this).closest('tr').index()).data()[0];
//   bootbox.confirm("Hapus Data tersebut?", function(result) {
//     if(result){
//       $.ajax({
//           type : 'DELETE',
//           url  : API_URL + '/user',
//           data : "id=" + data.id,
//           beforeSend: function() {
//               $.blockUI({
//                 overlayCSS: { backgroundColor: '#005ba2' }
//               });
//           },
//           success :  function(response){
//               $.unblockUI();
//               toastr["success"]("Data berhasil dihapus!.", "Notifikasi");
//               table.draw();
//           },
//           error: function(data){
//               $.unblockUI();
//               toastr["error"]("Masih terdapat Error!", "Error");
//           }
//       });
//     }
//   });
// });
