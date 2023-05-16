$(document).ready(function () {
    $('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: async function($form, event){
      event.preventDefault();
      $this = $('#submit');
      $this.prop('disabled', true);
       var formData = new FormData($("#simple_form")[0]);
       let id = document.getElementById("productID").value;
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
         jQuery.ajax({
             url: "/admin/update_product/"+id,
             method: "POST",
             data: formData,
             cache: false,
             processData: false,
             contentType: false,
             success: function (response) {
                 if (response.status === 200) {
                    $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
                $('#simple_form').trigger('reset');
                location.href = "/admin/products";
                 }
             },
             error: function (error) {
                 console.log(error)
                 $('#success').html("<div class='alert alert-danger'>'"+ error.responseJSON.message +"'</div>");
                 $('#simple_form').trigger('reset');

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
            $("#name-availability-status").html("");
        }, 2000);
       }
