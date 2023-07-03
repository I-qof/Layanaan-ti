var table = $("#tabel-main").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: APP_URL + "/role",
        method: "GET",
    },
    columns: [
        {
            data: "name",
            className: "text-center",
        },
        {
            // data: "permissions[0].name",
            // className: "text-center",
            data: "permissions",
            // className: "text-center",
            render: function (data, type, row) {
                var menus = data.map(function (permission) {
                    return "<li>" + permission.name + "</li>";
                });
                return "<ul>" + menus.join("") + "</ul>";
            },
        },
        {
            data: null,
            render: function (data, type, row) {
                return (
                    "<div class='btn-group btn-group-sm' role='group' aria-label='Small button group'>" +
                    "<button type='button' class='btn btn-default editData role-update' style='display:none;' >Edit</button>" +
                    "<button type='button' class='btn btn-default hapusData role-delete' style='display:none;'>Hapus</button>" +
                    "</div>"
                );
            },
            className: "text-center",
        },
    ],
    drawCallback: function () {
        let menus = JSON.parse(localStorage.getItem("menus"));

        menus.forEach((elem) => {
            $("." + elem.name).show();
        });
    },
});

// let menus = JSON.parse(localStorage.getItem("menus"));
// console.log(menus);

// let dataPermission = $.getJSON(
//     APP_URL + "/permissions/index",
//     function (response) {
//         var permis = response;
//         var permissions = [];
//         for (var i = 0; i < permis.length; i++) {
//             permissions.push(permis[i].name);
//         }
//         // console.log(permissions);
//         $("#permission").select2({
//             placeholder: "Pilih Permission",
//             multiple: true,
//             data: permissions,
//         });
//     }
// );

// $("#tabel-main_filter").hide();

// $(table.table().container()).on("keyup", "thead input", function (index) {
//     table.column($(this).attr("id").substring(7, 10)).search(this.value).draw();
// });

// let id;

// $(".btnAddRole").on("click", function () {
//     id = 0;
//     $("#name").val("");
//     $("#modalAddRole").modal("show");
//     $("#permission").val("").trigger("change");
// });

// $("#tabel-main").on("click", ".editData", function () {
//     data = table.row($(this).closest("tr")).data();

//     id = data.id;

//     var permis = data.permissions;
//     var permissions = [];
//     for (var i = 0; i < permis.length; i++) {
//         permissions.push(permis[i].name);
//     }
//     $("#permission").val(permissions).trigger("change");
//     $("#permission").select2({
//         placeholder: "Select Option",
//         data: permissions,
//     });

//     $("#name").val(data.name);

//     $("#modalAddRole").modal("show");
// });

// $("#formData").on("submit", function (event) {
//     event.preventDefault();
//     if (id == 0) {
//         $.ajax({
//             type: "POST",
//             url: APP_URL + "/role/store",
//             data: $("#formData").serialize(),
//             beforeSend: function () {
//                 $("#modalAddRole").block({
//                     overlayCSS: { backgroundColor: "#005ba2" },
//                 });
//             },
//             success: function (response) {
//                 table.draw(false);
//                 $("#modalAddRole").unblock();
//                 $("#modalAddRole").modal("hide");
//                 toastr["success"]("Data berhasil disimpan!", "Notifikasi");
//             },
//             error: function (data) {
//                 $("#modalAddRole").unblock();

//                 var msg = data.responseJSON;
//                 var message = "";

//                 $.each(msg, function (key, valueObj) {
//                     valueObj.forEach((item, i) => {
//                         message += ". " + item + "<br>";
//                     });
//                 });

//                 toastr["error"](message, "Error");
//             },
//         });
//     } else {
//         $.ajax({
//             type: "PATCH",
//             url: APP_URL + "/role/update/" + id,
//             data: $("#formData").serialize(),
//             beforeSend: function () {
//                 $("#modalAddRole").block({
//                     overlayCSS: { backgroundColor: "#005ba2" },
//                 });
//             },
//             success: function (response) {
//                 table.draw(false);
//                 $("#modalAddRole").unblock();
//                 $("#modalAddRole").modal("hide");
//                 toastr["success"]("Data berhasil disimpan!", "Notifikasi");
//             },
//             error: function (data) {
//                 $("#modalAddRole").unblock();

//                 var msg = data.responseJSON;
//                 var message = "";

//                 $.each(msg, function (key, valueObj) {
//                     valueObj.forEach((item, i) => {
//                         message += ". " + item + "<br>";
//                     });
//                 });

//                 toastr["error"](message, "Error");
//             },
//         });
//     }
// });

// $("#tabel-main").on("click", ".hapusData", function () {
//     data = table.rows($(this).closest("tr").index()).data()[0];
//     bootbox.confirm("Hapus Data tersebut?", function (result) {
//         if (result) {
//             $.ajax({
//                 type: "DELETE",
//                 url: APP_URL + "/role/delete/" + data.id,
//                 beforeSend: function () {
//                     $.blockUI({
//                         overlayCSS: { backgroundColor: "#005ba2" },
//                     });
//                 },
//                 success: function (response) {
//                     $.unblockUI();
//                     toastr["success"]("Data berhasil dihapus!.", "Notifikasi");
//                     table.draw();
//                 },
//                 error: function (data) {
//                     $.unblockUI();
//                     toastr["error"]("Masih terdapat Error!", "Error");
//                 },
//             });
//         }
//     });
// });
