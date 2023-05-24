// document.getElementById("update-student").addEventListener("click", async function (e) {
//     e.preventDefault();
//     // $this = $('#update-student');
//     // $this.prop('disabled', true);
//     var id = $("#userId").val();
//     var studentId = $("#studentId").val();
//     console.log(studentId,id)
//     let url = `/admin/students/${id}`;
//     var formData = new FormData($("#StudentForm")[0]);

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//         }
//     });
//     jQuery.ajax({
//         url: url,
//         method: "PUT",
//         data: formData,
//         cache: false,
//         processData: false,
//         contentType: false,
//         success: function (response) {
//             console.log(response)
//         },
//         error: function (error) {
//             console.log(error)
//         },

//     });


// })
$(document).on("click", "#update-student", function (e) {
    e.preventDefault();
    var formData = new FormData($("#StudentForm")[0]);
    let id = $("#studentId").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

        jQuery.ajax({
            url: `/admin/students/${id}`,
            type: "PUT",
            data: formData,
             cache: false,
             processData: false,
            contentType: false,
            enctype:"multipart/form-data",
            success: function (response) {
               console.log(response)
            },
            error: function (error) {
                console.log(error)

            },
        })
    }
);

// function complete() {
//     setTimeout(function () {
//         location.reload();
//     }, 2000)
// }

