var table = $(".tabel-main").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: APP_URL + "/status",
        method: "GET",
    },
    columns: [
        {   
            data: "nama_status",
            className: "text-center",
        },
        {
            data: "warna",
            className: "text-center",
        },
      
        {
            data: null,
            render: function (data, type, row) {
                return (
                    "<div class='btn-group btn-group-sm' role='group' aria-label='Small button group'>" +
                    "<button type='button' class='btn btn-default editData'>Edit</button>" +
                    "<button type='button' class='btn btn-default hapusData'>Hapus</button>" +
                    "</div>"
                );
            },
            className: "text-center",
        },
    ],
});
