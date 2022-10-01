$(document).ready(function(){
    //initiation page
    // $('#main-content').load('welcome')

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

    $('ul#clinics-container a#clinic-btn').click(function(e) {
        e.preventDefault();
        $("#main-content").load('/show-clinic');
        
        var url = $(this).data('url');

        $.get(url, function(data){
            
            var id = data[0].clinic_id;
            var name = data[0].clinic_name;
            var description = data[0].description;
            
            
            
            $("#clinic-id").text(id);
            $("#clinic-name").text(name);
            $("#clinic-desc").text(description);

            
        })
        

    });
});