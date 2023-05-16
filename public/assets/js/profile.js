$(document).ready(function(){
$('#contactForm input, #contactForm textarea').jqBootstrapValidation({
preventSubmit: true,
submitSuccess: async function($form, event){
event.preventDefault();
$this = $('#submit');
$this.prop('disabled', true);
let formData = new FormData($("#contactForm")[0])
let url = "/profile/update";
var config = {
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
mode:"same-origin"
},
};

try {
var response = await axios.post(url, formData, config);
if(response.data.status === 200){
$('#success').html("<div class='alert alert-success'>");
$('#success > .alert-success').html("<button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;")
.append("</button>");
$('#success > .alert-success')
.append("<strong>"+ response.data.message +"</strong>");
$('#success > .alert-success')
.append('</div>');
$('#contactForm').trigger('reset');
complete();
}
} catch (error) {
$('#success').html("<div class='alert alert-danger'>");
$('#success > .alert-danger').html("<button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;")
.append("</button>");
$('#success > .alert-danger').append($("<strong>")+"Profile cant be updated try again later"+ ("</strong>"));
$('#success > .alert-danger').append('</div>');
$('#contactForm').trigger('reset');
complete();
}
},
});
});

function complete(){
setTimeout(function () {
$this.prop("disabled", false);
location.reload();
}, 10);
}

