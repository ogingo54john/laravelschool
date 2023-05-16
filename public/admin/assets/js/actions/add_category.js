$(document).ready(function(){

    $('#simple_form input, #simple_form textarea, #simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: function($form, event){
        event.preventDefault();
        $('#name-availability-status').html('');
      $this = $('#submit');
      $this.prop('disabled', true);
      var form_data = $("#simple_form").serialize();
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
      $.ajax({
       url:"/admin/categories/store",
       method:"POST",
       data:form_data,
       success:function(response){
        $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
        $('#simple_form').trigger('reset');
       },
       error:function(error){
        $('#success').html("<div class='alert alert-danger'>Can't Add Category</div>");
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
