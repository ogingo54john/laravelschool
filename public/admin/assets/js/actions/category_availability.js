function Exists() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    })
        var name = $("#name").val();
        if(name != ""){
    jQuery.ajax({
        url: "/admin/categories/availability",
        data: 'name=' + $("#name").val(),
        type: "POST",
        success: function (data) {
            if (data.status === 400) {
                $("#name-availability-status").html(data.message);
                $("#name-availability-status").css({
                    'color':'red'
                });
                $('#submit').prop('disabled', true);
            } else if (data.status === 200) {
                $("#name-availability-status").html(data.message);
                $("#name-availability-status").css({
                    'color':'green'
                });
                $('#submit').prop('disabled', false);
            }

        },
        error: function () {
        }
    });}}

function clearInput(){
    $('#name-availability-status').html('')
}
