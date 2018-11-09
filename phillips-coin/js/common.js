/*js*/

//회원가입 인증번호
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

//비밀번호 인증번호를
$(document).ready(function(){
    $("#shadow").hide();
    $(".code_send").click(function(){
        $("#full").show();
        $('#shadow').show();
    });
    $(".ok").click(function(){
        $("#full").hide();
        $('#shadow').hide();
    });
});
