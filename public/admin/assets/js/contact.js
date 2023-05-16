$(document).ready(function () {

    $('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: async function($form, event){
      event.preventDefault();
      $this = $('#submit');
      $this.prop('disabled', true);
       var form = document.getElementById("simple_form");
       var formData = new FormData(form);
      //  let image = document.getElementById("image").files[0];
      // formData.append("image", image);

         var config = {
           headers: {
              //  'Content-Type': 'application/json',
              "Content-Type": "multipart/form-data",
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
               mode:'same-origin'
           }
         }

         const url = '/admin/store'
         const response = await axios.post(url, formData, config);
       if (response.data.status === 200) {
        $('#success').html("<div class='alert alert-success'><strong>Service Added successfully</strong></div>");
           $('#simple_form').trigger('reset');
           location.href = "/admin/services";
       } else
       {$('#success').html("<div class='alert alert-danger'>Sorry service cant be added</div>");
        $('#simple_form').trigger('reset');
        location.href = "/admin/services";
        }
       compLete();
     },
    });

   });


   function compLete(){
        setTimeout(function(){
         $this.prop("disabled", false);
         $('#success').html('');
        }, 5000);
       }
