$(document).on("click", ".delete-unit", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
    });
    if (confirm("Are you sure you want to delete this unit ?")) {
    jQuery.ajax({
    url: "/admin/deleteunit/" + id,
    method: "POST",
    data: id,
    success: function (response) {
    if (response.status === 200) {
    Swal.fire({
    title: "Success",
    text: response.message,
    icon: "success",
    button: "Ok",
    });

    }
    else if(response.status === 404){
    Swal.fire({
            title: "Not Found",
            text: response.message,
            icon: "warning",
            button: "Ok",
            });
   }
   complete();
    },
    error: function (error) {


    },
    });
    }}
    );

    function complete() {
    setTimeout(function () {
    location.reload();
    }, 2000)
    }

