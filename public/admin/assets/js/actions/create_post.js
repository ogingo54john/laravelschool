$(document).ready(function () {
    $('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: async function($form, event){
      event.preventDefault();
      $this = $('#submit');
      $this.prop('disabled', true);
       var formData = new FormData($("#simple_form")[0]);
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
             }
         });

         jQuery.ajax({
             url: "/admin/posts/store",
             method: "POST",
             data: formData,
             cache: false,
             processData: false,
             contentType: false,
             success: function (response) {
                 if (response.status === 200) {
                    $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
                $('#simple_form').trigger('reset');
                location.href = "/admin/posts";
                 }
             },
             error: function (error) {
                $('#success').html("<div class='alert alert-danger'>Sorry post can't be added</div>");
                    $('#simple_form').trigger('reset');
                    location.href = "/admin/posts";
             },
             compLete: compLete(),
        })

     },
    });

   });


   function compLete(){
        setTimeout(function(){
         $this.prop("disabled", false);
            $('#success').html('');
        }, 5000);
       }
