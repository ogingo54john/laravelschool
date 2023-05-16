$(document).on("click", ".delete-category", function (e) {
e.preventDefault();
let id = $(this).data("id");
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
}
});
if (confirm("Are you sure you want to delete this category ?")) {
jQuery.ajax({
url: "/admin/delete_category/" + id,
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
});
}}
);

function complete() {
setTimeout(function () {
location.reload();
}, 2000)
}

