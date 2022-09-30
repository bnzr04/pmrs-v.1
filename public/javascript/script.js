$(document).ready(function(){
    //initiation page
    $('#main-content').load('/welcome');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#clinic-form').on('submit', function(e){
        e.preventDefault();

        var form = $(this).serialize();
        var url = $(this).attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            data: form,
            dataType: 'json',
            success:function(){
                $('#clinicModal').modal('hide');
                $('#clinic-form')[0].reset();
            }
        })
    });
});