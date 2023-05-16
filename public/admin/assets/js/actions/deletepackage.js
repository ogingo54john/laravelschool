$(document).on("click", "#deletepackage", function (e) {
    e.preventDefault();
    let id = $(this).data("id");
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    if (confirm("Are you sure you want to delete this package ?")) {
        jQuery.ajax({
            url: "/admin/deletepackage/" + id,
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
                console.log(error)

            },
        })
    }}
);

function complete() {
    setTimeout(function () {
        location.reload();
    }, 2000)
}

