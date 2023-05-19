// $(document).ready(function () {
//     $('#simple_form input, #simple_form textarea, #simple_form select').jqBootstrapValidation({
//      preventSubmit: true,
//      submitSuccess: async function($form, event){
//       event.preventDefault();
//       $this = $('#submit');
//       $this.prop('disabled', true);
//          var formData = new FormData($("#simple_form")[0]);
//          formData.append('title', $("#title").val());
//          formData.append('status', $("#status").val());
//          let id = $this.data("id");

//        $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//             }
//         })
//          jQuery.ajax({
//              url: "/admin/courses/edit/"+id,
//              method: "PATCH",
//              data: formData,
//              cache: false,
//              processData: false,
//              contentType: false,
//              success: function (response) {
//                 //  if (response.status === 200) {
//                 // $('#success').html("<div class='alert alert-success'><strong>"+ response.message +"</strong></div>");
//                 // $('#simple_form').trigger('reset');
//                 // location.href = "/admin/pricing";
//                 //  }
//                 console.log(response)
//              },
//              error: function (error) {
//                 //  console.log(error)
//                 //  $('#success').html("<div class='alert alert-danger'>"+ error.responseJSON.message +"</div>");
//                 //  $('#simple_form').trigger('reset');
//                 console.log(error)
//              },
//             //  compLete: compLete(),
//         })

//      },
//     });

//    });


//    function compLete(){
//         setTimeout(function(){
//          $this.prop("disabled", false);
//             $('#success').html('');
//         }, 2000);
//        }




$(document).ready(function(){
    $('#simple_form input, #simple_form textarea, #simple_form textarea').jqBootstrapValidation({
    preventSubmit: true,
    submitSuccess: async function($form, event){
    event.preventDefault();
    $this = $('#submit');
    $this.prop('disabled', true);
    var id = $this.data("id");
    var formData = new FormData($("#simple_form")[0]);
    let url = "/admin/courses/edit/"+id;
    var config = {
    headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            mode: "same-origin",
        },
    };

        try {

     var response = await axios.put(url, formData, config);
     if (response.data.status === 200) {
        $("#update-errors").removeClass("text-danger d-none");
        $("#update-errors").addClass("text-success");
        $('#update-errors').html("<div class='alert alert-success'>");
        $('#update-errors> .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
        .append("</button>");
        $('#update-errors> .alert-success')
        .append("<strong>"+ response.data.message +"</strong>");
        $('#update-errors> .alert-success')
        .append('</div>');
        complete();
        }

        } catch (error) {
        $("#update-errors").html("");
        $("#update-errors").removeClass("d-none");
        $.each(error.response.data.errors, function (key, value) {
        $("#update-errors").append('<li class="alert alert-danger">' + value + '</li');
        });
        complete();
        }
     },
    });
});

function complete(){
    setTimeout(function () {
    $("#update-errors").html("");
    $('#simple_form').trigger('reset');
    $this.prop("disabled", false);
    }, 5000);
}

