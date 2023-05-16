$(document).ready(function(){
    $('#contactForm input, #contactForm textarea').jqBootstrapValidation({
    preventSubmit: true,
    submitSuccess: async function($form, event){
    event.preventDefault();
    $this = $('#submit');
    $this.prop('disabled', true);
    var name = $("input#name").val();
    var phone = $("input#phone").val();
    var email = $("input#email").val();
    var service = $("input#service").val();
    var message = $("textarea#message").val();
    var data = {name,phone,email,service,message} ;
      var body = JSON.stringify(data);
      console.log(body)
    let url = "/email";
    var config = {
    headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
             mode:"same-origin"
    },
    };

      var response = await axios.post(url, body, config);
    if(response.status === 200){
    $('#success').html("<div class='alert alert-success'>");
    $('#success > .alert-success').html("<button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;")
    .append("</button>");
    $('#success > .alert-success')
    .append("<strong>Your message has been sent to us we will get back to you soon.</strong>");
    $('#success > .alert-success')
    .append('</div>');
    $('#contactForm').trigger('reset');
    complete();
    }else{
    $('#success').html("<div class='alert alert-danger'>");
    $('#success > .alert-danger').html("<button type='button' class='close' data-bs-dismiss='alert' aria-hidden='true'>&times;")
    .append("</button>");
    $('#success > .alert-danger').append($("<strong>").text(" Sorry " + name + ", your message could not be sent. Please try again later!")("</strong>"));
    $('#success > .alert-danger').append('</div>');
    $('#contactForm').trigger('reset');
    complete();
      };
     },
    });
});

function complete(){
  setTimeout(function () {
    $this.prop("disabled", false);
}, 1000);
}

