$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$.ajax({
    url: APP_URL + "/me",
    type: "get",
    // headers: {
    //     Authorization: "Bearer " + localStorage.getItem("api_token"),
    // },

    success: function (response) {
        var roles = response.role.roles[0]?.name;
        var permissions = response.role.roles[0]?.permissions;
        localStorage.removeItem("menus");
        localStorage.setItem("menus", JSON.stringify(permissions));
        // console.log(localStorage.setItem("menus", JSON.stringify(permissions)));
        // logika untuk menampilkan atau menyembunyikan menu berdasarkan roles dan permissions

        permissions.forEach(function (permission) {
            permissions.forEach((elem) => {
                $("." + elem.name).show();
            });
        });
    },
});

// $("#linkAduan").on("click", function () {
//     // alert("test")
//     window.location.replace(APP_URL + "/aduan/view");
// });
// $("#linkAduanReport").on("click", function () {
//     window.location.replace(APP_URL + "/aduan/report");
// });

// $("#linkPermintaanReport").on("click", function () {
//     window.location.replace(APP_URL + "/permintaan/view");
// });
// $("#linkPermintaanReport").on("click", function () {
//     window.location.replace(APP_URL + "/permintaan/report");
// });
// $("#linkUserrole").on("click", function () {
//     window.location.replace(APP_URL + "/user-role/view");
// });
// $("#linkRole").on("click", function () {
//     window.location.replace(APP_URL + "/role/view");
// });
// $("#linkPermission").on("click", function () {
//     window.location.replace(APP_URL + "/permission/view");
// });

// $("#linkStatus").on("click", function () {
//     window.location.replace(APP_URL + "/status/view");
// });
// $("#linkSperpat").on("click", function () {
//     window.location.replace(APP_URL + "/sperpat/view");
// });
// $("#linkInventaris").on("click", function () {
//     window.location.replace(APP_URL + "/inventaris/view");
// });
// $("#linkJenisbarang").on("click", function () {
//     window.location.replace(APP_URL + "/jenis-barang/view");
// });
