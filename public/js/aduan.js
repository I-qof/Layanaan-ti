var table = $("#tabel-main").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: APP_URL + "/aduan",
        method: "GET",
    },
    columns: [
        {
            data: null,
            render: function (data, type, row) {
                return (
                    "<div class='btn-group btn-group-sm' role='group' aria-label='Small button group'>" +
                    "<button type='button' class='btn btn-success editData'>Lihat</button>" +
                    "<button type='button' class='btn btn-danger hapusData'>Hapus</button>" +
                    "</div>"
                );
            },
            className: "text-center",
        },
        {
            data: "id",
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
            className: "text-center",
        },

        {   
            data: "no_aduan",
            className: "text-center",
        },
        {   
            data: "email",
            className: "text-center",
        },
        {   
            data: "tgl_masuk",
            className: "text-center",
        },
        {   
            data: "tgl_keluar",
            className: "text-center",
        },
        {   
            data: "no_hp",
            className: "text-center",
        },
        {   
            data: "nama_status",
            className: "text-center",
            render:function(data,type,row,meta){
                return(
                    "<div class='badge badge-primary' style='background-color:"+row.color+";border:"+row.color+";font-weight: bold '><p style='color:#ffff'>"+data+"</p></div>"
                )
            }
        },
        {   
            data: "nama_pengambil",
            className: "text-center",
        },
       
    ],
});
