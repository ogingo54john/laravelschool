
$(document).ready(function(){
    $('#simple_form input, #simple_form textarea, #simple_form select').jqBootstrapValidation({
    preventSubmit: true,
    submitSuccess: async function($form, event){
    event.preventDefault();
    $this = $('#submit');
    $this.prop('disabled', true);
    var formData = new FormData($("#simple_form")[0]);
    let url = "/admin/create_branch";
    var config = {
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            mode: "same-origin",
        },
    };

        try {

     var response = await axios.post(url, formData, config);
     if (response.data.status === 200) {
        $("#save-errors").removeClass("text-danger d-none");
        $("#save-errors").addClass("text-success");
        $('#save-errors').html("<div class='alert alert-success'>");
        $('#save-errors> .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
        .append("</button>");
        $('#save-errors> .alert-success')
        .append("<strong>"+ response.data.message +"</strong>");
        $('#save-errors> .alert-success')
        .append('</div>');
        }
        complete();
    console.log(response)
        } catch (error) {
        $("#save-errors").html("");
        $("#save-errors").removeClass("d-none");
        $.each(error.response.data.errors, function (key, value) {
        $("#save-errors").append('<li class="alert alert-danger">' + value + '</li');
        });
        complete();

        }
     },
    });
});

function complete(){
    setTimeout(function () {
    $("#save-errors").html("");
    $('#simple_form').trigger('reset');
    $this.prop("disabled", false);
    }, 5000);
}

