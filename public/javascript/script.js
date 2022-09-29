$(document).ready(function(){
    //initiation page
    $('#main-content').load('/welcome');

    $('#addClinic-btn').click(function(){
        $('#main-content').load('/add-clinic');
        return false;
    });

});