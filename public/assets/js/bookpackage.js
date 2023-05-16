$(document).ready(function(){
    $('#contactForm input, #contactForm textarea').jqBootstrapValidation({
    preventSubmit: true,
    submitSuccess: async function($form, event){
    event.preventDefault();
    $this = $('#submit');
    $this.prop('disabled', true);
    var id = $this.data("id");
    var formData = new FormData($("#contactForm")[0]);
    let url = "/bookPackage/"+id;
    var config = {
    headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            mode: "same-origin",
        },
    };

        try {

            var response = await axios.post(url, formData, config);
            if (response.status === 200) {
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
            $('#success > .alert-danger').append($("<strong>").text(" Sorry " + formData.name + ", your message could not be sent. Please try again later!")("</strong>"));
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
}, 1000);
}

