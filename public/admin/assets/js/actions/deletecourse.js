$(document).on("click", ".delete-course", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
    });
    if (confirm("Are you sure you want to delete this course ?")) {
    jQuery.ajax({
    url: "/admin/deletecourse/" + id,
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
    complete();

    }

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

