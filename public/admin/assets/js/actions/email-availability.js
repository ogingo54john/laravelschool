function Exists() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    })
        var email = $("#email").val();
        if(email != ""){
    jQuery.ajax({
        url: "/admin/email-availability",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
            if (data.status === 400) {
                $("#email-availability-status").html(data.message);
                $("#email-availability-status").css({
                    'color':'red'
                });
                $('#submit').prop('disabled', true);
            } else if (data.status === 200) {
                $("#email-availability-status").html(data.message);
                $("#email-availability-status").css({
                    'color':'green'
                });
                $('#submit').prop('disabled', false);
            }

        },
        error: function () {
        }
    });}}

function clearInput(){
    $('#email-availability-status').html('')
}
