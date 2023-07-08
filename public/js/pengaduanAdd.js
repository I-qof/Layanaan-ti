(function($) {
    'use strict';
    var form = $("#example-form");
    form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onFinished: function(event, currentIndex) {
        console.log($("#example-form").serialize());
        $.ajax({
            type: "POST",
            url: APP_URL + "/aduan/store",
            data: $("#example-form").serialize(),
            
            success: function (response) {
                $.toast({
                    heading: 'Info',
                    text: 'Data berhasil disimpan!',
                    showHideTransition: 'slide',
                    icon: 'info',
                    loaderBg: '#46c35f',
                    position: 'top-right'
                  })
                  $("#example-form").trigger("reset");
                  window.location.href =
                  APP_URL + "/aduan/add";
                //   window.location(APP_URL + "/aduan/add");
                
            },
            error: function (data) {
                $.toast({
                    heading: 'Info',
                    text: 'Error!',
                    showHideTransition: 'slide',
                    icon: 'info',
                    loaderBg: '#46c35f',
                    position: 'top-right'
                  })
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
    var validationForm = $("#example-validation-form");
    validationForm.val({
      errorPlacement: function errorPlacement(error, element) {
        element.before(error);
      },
      rules: {
        confirm: {
          equalTo: "#password"
        }
      }
    });
    validationForm.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onStepChanging: function(event, currentIndex, newIndex) {
        validationForm.val({
          ignore: [":disabled", ":hidden"]
        })
        return validationForm.val();
      },
      onFinishing: function(event, currentIndex) {
        validationForm.val({
          ignore: [':disabled']
        })
        return validationForm.val();
      },
      onFinished: function(event, currentIndex) {
        alert("Submitted!");
      }
    });
    var verticalForm = $("#example-vertical-wizard");
    verticalForm.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      stepsOrientation: "vertical",
      onFinished: function(event, currentIndex) {
        alert("Submitted!");
      }
    });
  })(jQuery);

// let no_aduan = $("#no_aduan").val();
$("#openModal").on("click", function (e) {
    e.preventDefault();
    id = 0;
    $("#modalAdd").modal("show")
});

$(".cancel").on("click", function () {
    $("#modalAdd").modal("hide");
});
$(".close").on("click", function () {
    $("#modalAdd").modal("hide");
});


$("#formData").on("submit", function (event) {
    event.preventDefault();

        $.ajax({
            type: "POST",
            url: APP_URL + "/desc-aduan/store",
            data: $("#formData").serialize(),
            
            success: function (response) {
                table.draw(false);
            
                $("#modalAdd").modal("hide");
                $.toast({
                    heading: 'Info',
                    text: 'Data berhasil disimpan!',
                    showHideTransition: 'slide',
                    icon: 'info',
                    loaderBg: '#46c35f',
                    position: 'top-right'
                  })
                table.draw();
            },
            error: function (data) {
                $.toast({
                    heading: 'Info',
                    text: 'Error!',
                    showHideTransition: 'slide',
                    icon: 'info',
                    loaderBg: '#46c35f',
                    position: 'top-right'
                  })
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
   
    
});
$("#id_inventaris").select2({
    width: "100%",
});

var table = $("#tabel-main").DataTable({
    bLengthChange: false,
    ordering: false,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: APP_URL + "/desc-aduan/get/" + $("#no_aduan").val(),
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
            data: "id_inventaris",
            className: "text-center",
        },
        {   
            data: "kerusakan",
            className: "text-center",
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

$("#selWC").select2({
    minimumInputLength: 2,
    containerCssClass: ":all:",
    placeholder: "Pilih Unit Kerja",
    multiple: true,
    dropdownParent: $("#modalEditData .modal-body"),
    ajax: {
        url: APP_URL + "/inspPemeriksa", //the url to call
        method: "GET",
        dataType: "json",
        delay: 250,
        data: function (params) {
            return {
                q: params.term, // search term
                page: params.page,
            };
        },
        processResults: function (data, params) {
            return {
                results: $.map(data, function (obj) {
                    return {
                        text: obj.nama_pemeriksa,
                        id: obj.nama_pemeriksa,
                    };
                }),
            };
        },
        cache: true,
    },
});
