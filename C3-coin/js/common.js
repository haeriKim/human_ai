/*js*/

//회원가입 인증번호
$(document).ready(function(){
    $("#shadow").hide();
    $(".request_number_bt, .code_send").click(function(){
        $("#full").show();
        $('#shadow').show();
    });
    $(".ok").click(function(){
        $("#full").hide();
        $('#shadow').hide();
    });
});
