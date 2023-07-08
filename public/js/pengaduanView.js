$("#cari").on("click", function () {
    // alert("yo")
    $("#modalHasil").modal("show")
});
// $("#tambah").on("click", function () {
//     $("#modalHasilFailed").modal("show")
// });

$(".cancel").on("click", function () {
    $("#modalHasil").modal("hide");
    $("#modalHasilFailed").modal("hide");
});
$(".close").on("click", function () {
    $("#modalHasil").modal("hide");
    $("#modalHasilFailed").modal("hide");
});