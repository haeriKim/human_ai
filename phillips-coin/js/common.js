/*js*/

$(document).ready(function(){
    $("#shadow").hide();
    $(".request_number_bt").click(function(){
        $("#full").show();
        $('#shadow').show();
    });
    $(".ok").click(function(){
        $("#full").hide();
        $('#shadow').hide();
    });
});
