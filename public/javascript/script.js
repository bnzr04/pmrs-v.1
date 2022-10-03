$(document).ready(function(){
    //initiation page
    // $('#main-content').load('/show-clinic')

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*
        insert new clinic
    */

    // $('#clinic-form').on('submit', function(e){
    //     e.preventDefault();

    //     var form = $(this).serialize();
    //     var url = $(this).attr('action');

    //     $.ajax({
    //         type: 'POST',
    //         url: url,
    //         data: form,
    //         dataType: 'json',
    //         success:function(){
    //             $('#clinicModal').modal('hide');
    //             $('#clinic-form')[0].reset();
    //         }
    //     })
    // });

    /*
        sidebar clinic button function
    */

    $('ul#clinics-container a#clinic-btn').click(function(e) {
        e.preventDefault();
        $("#main-content").load('/patients');
        
        var url = $(this).data('url');

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(response){
            
            var clinicName = response[0][0].clinic_name;
            $('#clinicName').text(clinicName);
                createRows(response);
            }
        });

    });

    
        function createRows(response){
            var patientLen = 0;
            $('#dataTable tbody').empty();
            if(response != null){
                patientLen = response[1].length;
            }

            if(patientLen > 0){
                $('#patientNum').text(patientLen);
                for(var i = 0; i <= patientLen; i++){
                    var id = response[1][i].patient_id;
                    var firstname = response[1][i].firstname;
                    var lastname = response[1][i].lastname;
                    var age = response[1][i].age;
                    var gender = response[1][i].gender;

                    var actionBtn = "<button class='text-purple-500 hover:text-purple-700 active:text-purple-900 p-1 text-lg' title='Show patient info'><i class='fa-solid fa-user'></i></button><button class='text-purple-500 hover:text-purple-700 active:text-purple-900 p-1 text-lg'><i class='fa-solid fa-clipboard' title='Show patient records'></i></button><button class='text-purple-500 hover:text-purple-700 active:text-purple-900 p-1 text-lg' title='Delete patient & records'><i class='fa-solid fa-trash'></i></button>";

                    var tr = "<tr>" + 
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center'>" + id + "</td>" + 
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center'>" + firstname + " " + lastname + "</td>" +
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center'>" + age + "</td>" +
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center'>" + gender + "</td>" +
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center'>" + "(record number)" + "</td>" +
                    "<td class='border-collapse border border-slate-500 py-2 px-3 text-center flex gap-2'>" + actionBtn + "</td>"
                    + "</tr>";

                    $('#dataTable tbody').append(tr);

                    // console.log(id + " " + firstname + " " + lastname+ " " + age+ " " + gender)


                }
            }

        }
        
});