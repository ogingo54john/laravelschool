$(document).ready(function () {

    $('#simple_form input, #simple_form textarea,#simple_form select').jqBootstrapValidation({
     preventSubmit: true,
     submitSuccess: async function($form, event){
         event.preventDefault();
         $('#name-availability-status').html('');
      $this = $('#submit');
      $this.prop('disabled', true);
    //    var form = document.getElementById("simple_form");
       var formData = new FormData($("#simple_form")[0]);
    //    let image = document.getElementById("image").files[0];
    //    formData.append("image", image, image.name);
        //  var config = {
        //    headers: {
        //       //  'Content-Type': 'application/json',
        //     //   "Content-Type": "multipart/form-data",
        //        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //     //    mode:'same-origin'
        //    }
        //  }
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
        //  const url = '/admin/save_product';
        //  const response = await axios.post(url, formData, config);
        //  console.log(response);
         jQuery.ajax({
             url: "/admin/save_product",
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
             error: function () {
                $('#success').html("<div class='alert alert-danger'>Sorry product cant be added</div>");
                    $('#simple_form').trigger('reset');
                    location.href = "/admin/products";

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
        }, 5000);
       }
