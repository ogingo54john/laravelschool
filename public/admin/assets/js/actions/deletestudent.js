$(document).on("click", ".delete-student", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    let userId = $(this).data("user");
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
    });
    if (confirm("Are you sure you want to delete this student ?")) {
    jQuery.ajax({
    url: `/admin/deletestudent/${userId}/${id}`,
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

