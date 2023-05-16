$(document).ready(function(){
    $('#simple_form input, #simple_form textarea, #simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: function($form, event){
        event.preventDefault();
        // $('#name-availability-status').html('');
      $this = $('#submit');
      $this.prop('disabled', true);
      var form_data = $("#simple_form").serialize();
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
      $.ajax({
       url:"/admin/create_user",
       method:"POST",
       data:form_data,
        success: function (response) {
        if (response.status === 400) {
            $('#success').html("<div class='alert alert-danger'><strong>" + response.message + "</strong></div>");
            $("#password").val("");
            $("#password_confirmation").val("");

        }
        else if(response.status === 200)        {
            $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
            $('#simple_form').trigger('reset');

        }
       },
        error: function (error) {

        $('#success').html("<div class='alert alert-danger'>User Can't be added</div>");
        $('#simple_form').trigger('reset');

       },
       complete:function(){
        setTimeout(function(){
         $this.prop("disabled", false);
            $('#success').html('');
        }, 5000);
       }
      });
     },
    });

   });
