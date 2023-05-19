$(document).ready(function () {
    $('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: async function($form, event){
      event.preventDefault();
      $this = $('#submit');
      $this.prop('disabled', true);
       var formData = new FormData($("#simple_form")[0]);
       let id = $this.data("id");
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
         jQuery.ajax({
             url: "/admin/courses/edit/"+id,
             method: "POST",
             data: formData,
             cache: false,
             processData: false,
             contentType: false,
             success: function (response) {
                //  if (response.status === 200) {
                // $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
                // $('#simple_form').trigger('reset');
                // location.href = "/admin/pricing";
                //  }
                console.log(response)
             },
             error: function (error) {
                //  console.log(error)
                //  $('#success').html("<div class='alert alert-danger'>"+ error.responseJSON.message +"</div>");
                //  $('#simple_form').trigger('reset');
                console.log(error)
             },
            //  compLete: compLete(),
        })

     },
    });

   });


   function compLete(){
        setTimeout(function(){
         $this.prop("disabled", false);
            $('#success').html('');
        }, 2000);
       }
