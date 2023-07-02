var table = $("#sample_1").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: API_URL + "/permissions",
        method: "GET",
    },
    columns: [
        {
            data: "name",
            className: "text-center",
        },
        {
            data: null,
            render: function (data, type, row) {
                return (
                    "<div class='btn-group btn-group-sm' role='group' aria-label='Small button group'>" +
                    "<button type='button' class='btn btn-default editData permission-update'>Edit</button>" +
                    "<button type='button' class='btn btn-default hapusData permission-delete'>Hapus</button>" +
                    "</div>"
                );
            },
            className: "text-center",
        },
    ],
    initComplite: function () {
        let menus = JSON.parse(localStorage.getItem("menus"));

        menus.forEach((elem) => {
            $("." + elem.name).show();
        });
    },
});

$("#sample_1_filter").hide();

$(table.table().container()).on("keyup", "thead input", function (index) {
    table.column($(this).attr("id").substring(7, 10)).search(this.value).draw();
});

let id;

$(".btnAddPermission").on("click", function () {
    id = 0;
    $("#name").val("");
    $("#modalAddSifat").modal("show");
});

$("#sample_1").on("click", ".editData", function () {
    data = table.rows($(this).closest("tr").index()).data()[0];

    id = data.id;
    $("#name").val(data.name);
    $("#modalAddSifat").modal("show");
});

$("#formData").on("submit", function (event) {
    event.preventDefault();
    if (id == 0) {
        $.ajax({
            type: "POST",
            url: API_URL + "/permissions/store",
            data: $("#formData").serialize(),
            beforeSend: function () {
                $("#modalAddSifat").block({
                    overlayCSS: { backgroundColor: "#005ba2" },
                });
            },
            success: function (response) {
                table.draw(false);
                $("#modalAddSifat").unblock();
                $("#modalAddSifat").modal("hide");
                toastr["success"]("Data berhasil disimpan!", "Notifikasi");
            },
            error: function (data) {
                $("#modalAddSifat").unblock();

                var msg = data.responseJSON;
                var message = "";

                $.each(msg, function (key, valueObj) {
                    valueObj.forEach((item, i) => {
                        message += ". " + item + "<br>";
                    });
                });

                toastr["error"](message, "Error");
            },
        });
    } else {
        $.ajax({
            type: "PUT",
            url: API_URL + "/permissions/update/" + id,
            data: $("#formData").serialize(),
            beforeSend: function () {
                $("#modalAddSifat").block({
                    overlayCSS: { backgroundColor: "#005ba2" },
                });
            },
            success: function (response) {
                table.draw(false);
                $("#modalAddSifat").unblock();
                $("#modalAddSifat").modal("hide");
                toastr["success"]("Data berhasil disimpan!", "Notifikasi");
            },
            error: function (data) {
                $("#modalAddSifat").unblock();

                var msg = data.responseJSON;
                var message = "";

                $.each(msg, function (key, valueObj) {
                    valueObj.forEach((item, i) => {
                        message += ". " + item + "<br>";
                    });
                });

                toastr["error"](message, "Error");
            },
        });
    }
});

$("#sample_1").on("click", ".hapusData", function () {
    data = table.rows($(this).closest("tr").index()).data()[0];
    bootbox.confirm("Hapus Data tersebut?", function (result) {
        if (result) {
            $.ajax({
                type: "DELETE",
                url: API_URL + "/permissions/delete/" + data.id,
                beforeSend: function () {
                    $.blockUI({
                        overlayCSS: { backgroundColor: "#005ba2" },
                    });
                },
                success: function (response) {
                    $.unblockUI();
                    toastr["success"]("Data berhasil dihapus!.", "Notifikasi");
                    table.draw();
                },
                error: function (data) {
                    $.unblockUI();
                    toastr["error"]("Masih terdapat Error!", "Error");
                },
            });
        }
    });
});
