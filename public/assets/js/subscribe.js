$(document).ready(function(){
$('#subscriberForm input, #subscriberForm textarea').jqBootstrapValidation({
preventSubmit: true,
submitSuccess: async function($form, event){
event.preventDefault();
$this = $('#subscribe');
$this.prop('disabled', true);
var formData = new FormData($("#subscriberForm")[0]);
let url = "/subscribe";
var config = {
headers: {
'Content-Type': 'application/json',
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
mode:"same-origin"
},
};

try {
const response = await axios.post(url, formData, config);
if (response.data.status === 200) {
$("#save-errors").removeClass("text-danger d-none");
$("#save-errors").addClass("text-success");
$('#save-errors').html("<div class='alert alert-success'>");
$('#save-errors> .alert-success').html("<button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;")
.append("</button>");
$('#save-errors> .alert-success')
.append("<strong>"+ response.data.message +"</strong>");
$('#save-errors> .alert-success')
.append('</div>');
complete();
}

} catch (error) {
$("#save-errors").html("");
$("#save-errors").removeClass("d-none");
$.each(error.response.data.errors, function (key, value) {
$("#save-errors").append('<li>' + value + '</li');
});
complete();
}
},
});
});

function complete(){
setTimeout(function () {
$("#save-errors").html("");
$('#subscriberForm').trigger('reset');
$this.prop("disabled", false);
}, 5000);
}

