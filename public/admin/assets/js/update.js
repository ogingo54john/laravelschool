$(document).ready(function () {
$('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
preventSubmit: true,
submitSuccess: async function($form, event){
event.preventDefault();
$this = $('#submit');
$this.prop('disabled', true);
var form = document.getElementById("simple_form");
var formData = new FormData(form);
var ID = document.getElementById("service_ID").value;
var url = "/admin/update/"+ID;
var config = {
headers: {
'Accept': 'application/json',
"Content-Type": "multipart/form-data",
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
mode:'same-origin'
}
}

try {
    const response = await axios.post(url, formData, config);
    if(response.status === 200){
        $('#success').html("<div class='alert alert-success'><strong>Service updated successfully</strong></div>");
        $('#simple_form').trigger('reset');
        location.href = "/admin/services";
    }

    } catch (error) {
        compLete();
    }

     },
    });

   });


   function compLete(){
        setTimeout(function () {
            $this.prop("disabled", false);
            $('#success').html("<div class='bg-primary alert alert-danger'>The service already exists </div>");
        }, 5000);
       }
