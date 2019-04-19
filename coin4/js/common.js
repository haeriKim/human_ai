
//메인 슬라이드 배너 수정본
function bannerset(bn,dir){
    if(dir=='right'){
        var variable_width = $(".panel").width();
        $('.slide .dot li.on').removeClass('on');
        $('.slide .dot li:eq('+bn+')').addClass('on');
        $('.slide .panel li:eq('+bn+')').show();
        $('.slide .panel li:eq('+bn+')').css('left',variable_width+"px");
        $('.slide .panel li.on').animate({'left': "-"+variable_width+"px"},1000,function(){
            $(this).hide();
            $(this).removeClass('on')
        })
        $('.slide .panel li:eq('+bn+')').animate({'left':'0'},1000,function(){
            $(this).addClass('on')
        })
    }else{
        var variable_width = $(".panel").width();
        $('.slide .dot li.on').removeClass('on');
        $('.slide .dot li:eq('+bn+')').addClass('on');
        $('.slide .panel li:eq('+bn+')').show();
        $('.slide .panel li:eq('+bn+')').css('left',"-"+variable_width+"px");
        $('.slide .panel li.on').animate({'left':variable_width+"px"},1000,function(){
            $(this).hide();
            $(this).removeClass('on')
        })
        $('.slide .panel li:eq('+bn+')').animate({'left':'0'},1000,function(){
            $(this).addClass('on')
        })
    }
}

$(document).ready(function(){
    $('.slide .panel li:gt(0)').hide();
    //동그라미 버튼 클릭했을 때
    $('.slide .dot li').on('click',function(e){
        e.preventDefault();
        if($('.slide .panel li.on').is(':animated')==false){
            var num = $(this).index();
            var currentNum = $('.slide .dot li.on').index();
            if(num > currentNum){
                bannerset(num,'right')
            }else if(num < currentNum){
                bannerset(num,'left')
            }
        }
    })
    //이전버튼
    $('.arrow_area .prev1').on('click',function(e){
        e.preventDefault();
        if($('.slide .panel li.on').is(':animated')==false){
            var currentNum = $('.slide .dot li.on').index();
            var num = currentNum-1;
            if(num<0){
                num = $('.dot li').length-1;
            }
            bannerset(num,'left')
        }
    })
    //다음버튼
    $('.arrow_area .next1').on('click',function(e){
        e.preventDefault();
        if($('.slide .panel li.on').is(':animated')==false){
            var currentNum = $('.slide .dot li.on').index();
            var num = currentNum+1;
            if(num>$('.dot li').length-1){
                num = 0;
            }
            bannerset(num,'right')
        }
    })

    //이미지 호버시 자동슬라이드 멈춤
    $('.slide').on('mouseenter',function(){
        clearInterval(st);
    })
    //호버 안했을 때 다시 시작
    $('.slide').on('mouseleave',function(){
        setInterval(st);
        st=setInterval(trigger,5000)
    })
    var st;

    function trigger(){
        $('.arrow_area .next1').triggerHandler('click');
    }
    st = setInterval(trigger,5000)
})


// 메인 슬라이드 배너 수정본 (반응형)
function bannerset_a(bn_a,dir_a){
    if(dir_a=='right'){
        var variable_width_a = $(".app_slide").width();
        $('.app_slide .app_dot li.on').removeClass('on');
        $('.app_slide .app_dot li:eq('+bn_a+')').addClass('on');
        $('.app_slide .app_panel li:eq('+bn_a+')').show();
        $('.app_slide .app_panel li:eq('+bn_a+')').css('left',variable_width_a+"px");
        $('.app_slide .app_panel li.on').animate({'left': "-"+variable_width_a+"px"},1000,function(){
            $(this).hide();
            $(this).removeClass('on')
        })
        $('.app_slide .app_panel li:eq('+bn_a+')').animate({'left':'0'},1000,function(){
            $(this).addClass('on')
        })
    }else{
        var variable_width_a = $(".app_slide").width();
        $('.app_slide .app_dot li.on').removeClass('on');
        $('.app_slide .app_dot li:eq('+bn_a+')').addClass('on');
        $('.app_slide .app_panel li:eq('+bn_a+')').show();
        $('.app_slide .app_panel li:eq('+bn_a+')').css('left',"-"+variable_width_a+"px");
        $('.app_slide .app_panel li.on').animate({'left':variable_width_a+"px"},1000,function(){
            $(this).hide();
            $(this).removeClass('on')
        })
        $('.app_slide .app_panel li:eq('+bn_a+')').animate({'left':'0'},1000,function(){
            $(this).addClass('on')
        })
    }
}

$(document).ready(function(){
    $('.app_slide .app_panel li:gt(0)').hide();
    //동그라미 버튼 클릭했을 때
    $('.app_slide .app_dot li').on('click',function(e){
        e.preventDefault();
        if($('.app_slide .app_panel li.on').is(':animated')==false){
            var num = $(this).index();
            var currentNum = $('.app_slide .app_dot li.on').index();
            if(num > currentNum){
                bannerset_a(num,'right')
            }else if(num < currentNum){
                bannerset_a(num,'left')
            }
        }
    })
    //이전버튼
    $('.app_prev1').on('click',function(e){
        e.preventDefault();
        if($('.app_slide .app_panel li.on').is(':animated')==false){
            var currentNum = $('.app_slide .app_dot li.on').index();
            var num = currentNum-1;
            if(num<0){
                num = $('.app_dot li').length-1;
            }
            bannerset_a(num,'left')
        }
    })
    //다음버튼
    $('.app_next1').on('click',function(e){
        e.preventDefault();
        if($('.app_slide .app_panel li.on').is(':animated')==false){
            var currentNum = $('.app_slide .app_dot li.on').index();
            var num = currentNum+1;
            if(num>$('.app_dot li').length-1){
                num = 0;
            }
            bannerset_a(num,'right')
        }
    })
    var st_a;

    function trigger_a(){
        $('.app_next1').triggerHandler('click');
    }
    st_a = setInterval(trigger_a,5000)
})



//메인_카드현황
$(document).ready(function(){
    //카드현황 다음버튼
    $('.next').on('click',function(e){
        e.preventDefault();
        if($('.bitcoin_card_inner').is(':animated')==false){
            $('.bitcoin_card_inner').animate({'left':'-20%'},1000,function(){
                $('.bitcoin_card_inner').append($('.bitcoin_card_inner .card_li:first'));
                $('.bitcoin_card_inner').css({'left':'0px'});
            })
        }
    })
    //카드현황 이전버튼
    $('.prev').on('click',function(e){
        e.preventDefault();
        if($('.bitcoin_card_inner').is(':animated')==false){
            $('.bitcoin_card_inner').prepend($('.bitcoin_card_inner .card_li:last'));
            $('.bitcoin_card_inner').css({'left':'-20%','overflow':'hidden'});
            $('.bitcoin_card_inner').animate({'left':'0px'},1000)
        }
    })
})

//코인선택
$(document).ready(function(){
var coin_s=0; // 코인선택 탭 클릭을 확인하는값
$(".coinSelect dt").click(function(){
    if(coin_s===0){
        $(this).siblings().show();
        $(this).parent().css({"backgroundColor":"#080D13"});

        // 코인별탭 마우스이벤트
        $(".coinSelect dd").mouseover(function(){
            $(this).css({"backgroundColor":"rgba(122,171,223,0.2)"});
        }).mouseout(function(){
            $(this).css({"background":"#080D13"});
        });
        // 코인별탭 클릭이벤트
        $(".coinSelect dd").click(function() {
            var selectC = $(this).children().children("img").attr("src");
            var selectCName = $(this).text();
            $(".coinSelect dt a").children("img").attr("src", selectC);
            $(".coinSelect dt span").text(selectCName);
            $(".coinSelect dd").hide();
            $(".coinSelect").css({"background-color":"#080D13"});
            coin_s=0;
            return false;
        });
        coin_s=1;
        return false;
    }else{
        // dt한번 더 클릭시 이벤트
        $(".coinSelect dd").hide();
        $(".coinSelect").css({"background":"#080D13"});
        coin_s=0;
        return false;
    }
});
})

//메인 팝업
$(document).ready(function(){
    function closePopup(){
        $('#full_content').hide();
        $('#greetings_content').show();
    }
    $('#full_content .close_btn').on('click',function(e){
        e.preventDefault();
        closePopup();
    })
    $('#greetings_content .close_btn').on('click',function(e){
        e.preventDefault();
        $('#greetings_content, #index_shadow').hide();
    })
})

//자산관리 물음표 클릭시 팝업
$(document).ready(function(){
    function close_question_popup(){
        $('#question_mark_active').hide();
        $('#shadow').hide();
    }
    function question_mark_click(){
        $('#shadow').css({
            'width':'100%',
            'height':'100%',
            'position':'fixed'
        })
        $('#shadow').show();
        $('#question_mark_active').css({
            'position':'fixed'
        });
        $('#question_mark_active').show();
    }
    $('.question_mark').on('click',function(e){
        e.preventDefault();
        question_mark_click();
    })
    $('.close_btn').on('click',function(e){
        e.preventDefault();
        close_question_popup();
    })
})
//거래소-매수매도탭
$(document).ready(function(){
  $(".sell_tab_content").hide();
  $(".buy_tab_content").show();
  $(".buy_sell_tab_title .buy_tab h3").addClass("on");

  $(".buy_sell_tab_title .buy_tab h3").click(function () {
      $(".sell_tab_content").hide();
      $(".buy_sell_tab_title .sell_tab h3").removeClass("on");
      $(".buy_sell_tab_title .buy_tab h3").addClass("on");
      $(".buy_tab_content").show();
      return false;
  });
  $(".buy_sell_tab_title .sell_tab").click(function () {
      $(".buy_sell_tab_title .buy_tab h3").removeClass("on");
      $(".buy_sell_tab_title .sell_tab h3").addClass("on");
      $(".buy_tab_content").hide();
      $(".sell_tab_content").show();
      return false;
  });
});

//거래소-코인정보 상세보기 비트코인
$(document).ready(function(){
  var click_val=0;
  $(".question").click(function(){
    if(click_val===0) {
      $(".coin_money_bitcoin").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_bitcoin").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 비트코인캐시
$(document).ready(function(){
  var click_val=0;
  $(".question1").click(function(){
    if(click_val===0) {
      $(".coin_money_bitcoinCash").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_bitcoinCash").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 이더리움
$(document).ready(function(){
  var click_val=0;
  $(".question2").click(function(){
    if(click_val===0) {
      $(".coin_money_ethurium").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_ethurium").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 이더리움클래식
$(document).ready(function(){
  var click_val=0;
  $(".question3").click(function(){
    if(click_val===0) {
      $(".coin_money_ethuriumClassic").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_ethuriumClassic").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 이오스
$(document).ready(function(){
  var click_val=0;
  $(".question4").click(function(){
    if(click_val===0) {
      $(".coin_money_eos").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_eos").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 리플
$(document).ready(function(){
  var click_val=0;
  $(".question5").click(function(){
    if(click_val===0) {
      $(".coin_money_ripple").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_ripple").fadeOut(300);
      click_val=0;
    }
  });
});
//거래소-코인정보 상세보기 에이다
$(document).ready(function(){
  var click_val=0;
  $(".question6").click(function(){
    if(click_val===0) {
      $(".coin_money_ada").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_ada").fadeOut(300);
      click_val=0;
    }
  });
});
//미체결 취소버튼 클릭시 팝업
$(document).ready(function(){
    $(".cancel_michegyeol").click(function(){
        $(".cancel_deal,#shadow").show();
    })
    $(".cancel_deal .cancel_or_apply input").click(function(){
        $(".cancel_deal,#shadow").hide();
    })
})
//거래소 매수매도버튼 클릭시 팝업
$(document).ready(function(){
    $('#buy_sell_tab .buy_tab_button .buy_big_btn').click(function(e){
        e.preventDefault();
        $('#apply_buy_popup, #shadow_second').show();
    })
    $('#apply_buy_popup .ok').click(function(){
        $('#apply_buy_popup').hide();
        $('#success_buy_popup').show();
    })
    $('#buy_sell_tab .sell_tab_content .sell_big_btn').click(function(e){
        e.preventDefault();
        $('#apply_sell_popup, #shadow_second').show();
    })
    $('#apply_sell_popup .ok').click(function(){
        $('#apply_sell_popup').hide();
        $('#success_sell_popup').show();
    })
    $('#full_second .end_ok, #full_second .cancel').click(function(){
        $('#full_second .popup, #shadow_second').hide();
    })
})
//내 자산관리 전체탭
$(function () {
    $(".tab_content").hide();
    $(".tab_content:first").show();
    $("#mywallet_havecoin").hide();

    $("ul.tabs li.tab_same").click(function () {
        $("ul.tabs li.tab_same").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();

        if(activeTab == "tab1" || activeTab == "tab2") {
          $("#deal_orgin_transaction").show();
          $("#mywallet_havecoin").hide();
        } else {
          $("#mywallet_havecoin").show();
          $("#deal_orgin_transaction").hide();
        }
    });
});

// 자산관리 서브탭
$(document).ready(function(){
    $(".conclu_table, .KRW_conclu_table, ul.tabs4, .bitcoin_conclu_table, #io_list").hide();
    $(".conclu_table:first, .KRW_conclu_table:first").show();

    //보유코인,거래내역
    $("ul.tabs2 li").click(function () {
        $("ul.tabs2 li").removeClass("active2");
        $(this).addClass("active2");
        $(".conclu_table").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();
    });

    //원화 입출금
    $("ul.tabs3 li").click(function () {
        $("ul.tabs3 li").removeClass("active2");
        $(this).addClass("active2");
        $(".KRW_conclu_table").hide();
        var activeTab = $(this).attr("rel");

        if(activeTab == "input_bitcoin" || activeTab == "output_bitcoin" || activeTab == "input_KRW" || activeTab == "output_KRW"){
            $("#" + activeTab).show();
            $("#io_list").hide();
        }else{
            $("#io_list").show();
        }
    });


    //코인 입출금
    $("ul.tabs4 li").click(function () {
        $("ul.tabs4 li").removeClass("active2");
        $(this).addClass("active2");
        $(".bitcoin_conclu_table, #io_list").hide();
        var activeTab = $(this).attr("rel");

        if(activeTab == "input_bitcoin" || activeTab == "output_bitcoin" || activeTab == "input_KRW" || activeTab == "output_KRW"){
            $("#" + activeTab).show();
              $("#io_list").hide();
        }else{
            $("#io_list").show();
        }
      });

    //보유코인 표에서 입출금 눌렀을 때 - 원화,코인 입출금 보이고 안보이기
    var selected_coin = 0;
    var selected_won = 0;

    $(".coin_sel").click(function (){

      if(selected_coin === 0){
        $(".bitcoin_conclu_table").hide();
        $(".bitcoin_conclu_table:first").show();
        $("#mywallet_havecoin tbody tr.active").removeClass("active");
        $(this).parents("tr").addClass("active");
        $("ul.tabs4").show();
        $("ul.tabs3").hide();
        $("ul.tabs4 li").removeClass("active2");
        $("ul.tabs4 li:first").addClass("active2");
        $("#io_list").hide();
        $("#KRW_input_output").hide();
        $("#bitcoin_input_output").show();
        selected_coin = 1;
        selected_won = 0;
        return false;
      }else{
        $("ul.tabs4 li").removeClass("active2");
        $("ul.tabs4 li:first").addClass("active2");
        $(".bitcoin_conclu_table").hide();
        $(".bitcoin_conclu_table:first").show();
      }
    });


    $(".won_sel").click(function (){

      if(selected_won === 0){
        $("ul.tabs4").hide();
        $("ul.tabs3").show();
        $(".KRW_conclu_table").hide();
        $(".KRW_conclu_table:first").show();
        $("#mywallet_havecoin tbody tr.active").removeClass("active");
        $(this).parents("tr").addClass("active");
        $("ul.tabs3 li").removeClass("active2");
        $("ul.tabs3 li:first").addClass("active2");
        $("#io_list").hide();
        $("#bitcoin_input_output").hide();
        $("#KRW_input_output").show();
        selected_won = 1;
        selected_coin = 0;
        return false;
      }else{
        $("ul.tabs3 li").removeClass("active2");
        $("ul.tabs3 li:first").addClass("active2");
        $(".KRW_conclu_table").hide();
        $(".KRW_conclu_table:first").show();
      }
    });

    // 입출금 완료에서 입출금내역 버튼 클릭시
    $(".viewList").click(function (){
      location.href="exchange_BITCOIN.php";

      });
});



//내 자산관리-주의사항 전체 동의

$(document).ready(function(){
    $("div.before_send_money_wrap .if_you_all_agree").hide();

    $(".allAgree_01").click(function(){
        if($(".allAgree_01").prop("checked")) {
            $(".agree_check_01").prop("checked",true);
            $("div.before_send_money_01 .if_you_all_agree").show();
            $("div.before_send_money_01 .if_you_not_all_agree").hide();
        }else {
            $(".agree_check_01").prop("checked",false);
            $("div.before_send_money_01 .if_you_all_agree").hide();
            $("div.before_send_money_01 .if_you_not_all_agree").show();
        }
    });
    $(".allAgree_02").click(function(){
        if($(".allAgree_02").prop("checked")) {
            $(".agree_check_02").prop("checked",true);
            $("div.before_send_money_02 .if_you_all_agree").show();
            $("div.before_send_money_02 .if_you_not_all_agree").hide();
        }else {
            $(".agree_check_02").prop("checked",false);
            $("div.before_send_money_02 .if_you_all_agree").hide();
            $("div.before_send_money_02 .if_you_not_all_agree").show();
        }
    });
    $(".allAgree_03").click(function(){
        if($(".allAgree_03").prop("checked")) {
            $(".agree_check_03").prop("checked",true);
            $("div.before_send_money_03 .if_you_all_agree").show();
            $("div.before_send_money_03 .if_you_not_all_agree").hide();
        }else {
            $(".agree_check_03").prop("checked",false);
            $("div.before_send_money_03 .if_you_all_agree").hide();
            $("div.before_send_money_03 .if_you_not_all_agree").show();
        }
    });

    $("input[type='checkbox'].agree_check_01").change(function(){
        var chk1 = $("input[type='checkbox'].agree_check_01");
        if(chk1.length == chk1.filter(":checked").length){
          $(".allAgree_01").prop("checked",true);
            $("div.before_send_money_01 .if_you_all_agree").show();
            $("div.before_send_money_01 .if_you_not_all_agree").hide();
        }else {
          $(".allAgree_01").prop("checked",false);
          $("div.before_send_money_01 .if_you_all_agree").hide();
          $("div.before_send_money_01 .if_you_not_all_agree").show();
        }
    });
    $("input[type='checkbox'].agree_check_02").change(function(){
        var chk2 = $("input[type='checkbox'].agree_check_02");
        if(chk2.length == chk2.filter(":checked").length){
          $(".allAgree_02").prop("checked",true);
            $("div.before_send_money_02 .if_you_all_agree").show();
            $("div.before_send_money_02 .if_you_not_all_agree").hide();
        }else {
          $(".allAgree_02").prop("checked",false);
          $("div.before_send_money_02 .if_you_all_agree").hide();
          $("div.before_send_money_02 .if_you_not_all_agree").show();
        }
    });
    $("input[type='checkbox'].agree_check_03").change(function(){
        var chk3 = $("input[type='checkbox'].agree_check_03");
        if(chk3.length == chk3.filter(":checked").length){
          $(".allAgree_03").prop("checked",true);
            $("div.before_send_money_03 .if_you_all_agree").show();
            $("div.before_send_money_03 .if_you_not_all_agree").hide();
        }else {
          $(".allAgree_03").prop("checked",false);
          $("div.before_send_money_03 .if_you_all_agree").hide();
          $("div.before_send_money_03 .if_you_not_all_agree").show();
        }
    });
});

//회원탈퇴 1단계 동의
$(document).ready(function(){
    $(".withdrawal_text .if_you_all_agree").hide();

  $("#checkbox_text").click(function(){

    if($(".withdrawal_01_checkbox").prop("checked")){
      $(".withdrawal_01_checkbox").prop("checked",true);
      $(".withdrawal_text .if_you_all_agree").show();
      $(".withdrawal_text .if_you_not_all_agree").hide();
    }else{
      $(".withdrawal_01_checkbox").prop("checked",false);
      $(".withdrawal_text .if_you_not_all_agree").show();
      $(".withdrawal_text .if_you_all_agree").hide();

    }
  });
});

//회원탈퇴 2단계 전체 동의
$(document).ready(function(){
    $(".withdrawal_text2 .if_you_all_agree").hide();
    $(".allAgree_04").click(function(){
        if($(".allAgree_04").prop("checked")) {
            $(".agree_check_04").prop("checked",true);
            $(".withdrawal_text2 .if_you_all_agree").show();
            $(".withdrawal_text2 .if_you_not_all_agree").hide();
        }else {
            $(".agree_check_04").prop("checked",false);
            $(".withdrawal_text2 .if_you_all_agree").hide();
            $(".withdrawal_text2 .if_you_not_all_agree").show();
        }
    });

    $("input[type='checkbox'].agree_check_04").change(function(){
        var chk4 = $("input[type='checkbox'].agree_check_04");
        if(chk4.length == chk4.filter(":checked").length){
          $(".allAgree_04").prop("checked",true);
            $(".withdrawal_text2 .if_you_all_agree").show();
            $(".withdrawal_text2 .if_you_not_all_agree").hide();
        }else {
          $(".allAgree_04").prop("checked",false);
          $(".withdrawal_text2 .if_you_all_agree").hide();
          $(".withdrawal_text2 .if_you_not_all_agree").show();
        }
    });
});

/*회원탈퇴 3단계 인증번호버튼*/
$(document).ready(function(){
  $(".leave_member_request_number").click(function(){
    $("#full").show();
  });
  $(".leave_member_agree_btn").click(function(){
    $("#full").hide();
  });
});

/*회원탈퇴 4단계 의견수렴 부분*/
$(document).ready(function(){
    $(".html_input input[type='text'], .html_input textarea").hide();
    $("#leave_opinion").change(function(){
        var selectR = $(this).val();
        if(selectR =="기타(직접입력)"){
            $(".html_input textarea").show();
            $(".html_input input[type='text']").hide();
        }else{
          $(".html_input textarea").hide();
          $(".html_input input[type='text']").show();
          $(".html_input input[type='text']").attr("readonly",true).val(selectR);
        }
    });
});

//자산관리 - 인증센터 말풍선
$(document).ready(function(){
  $("#malpungsun, #account_malpungsun").hide();
  $(".account_complete").click(function(){
      $("#malpungsun, #account_malpungsun").show();
  });
  $(".chk_ok").click(function(){
      $("#account_malpungsun").hide();
  });
});
//자산관리 - 체크박스 동의 말풍선 (원화 입출금, 비트코인 출금)
$(document).ready(function(){
  $(".gray_bt").click(function(){
    $("#money_malpungsun").show();
  });
});
$(document).ready(function(){
  $(".gray_bt2").click(function(){
    $("#money_malpungsun2").show();
  });
});
$(document).ready(function(){
  $(".gray_bt3").click(function(){
    $("#money_malpungsun3").show();
  });
});

//인증센터-계좌등록
$(document).ready(function(){
  $('#account_yes').change(function () {
    if($('#account_yes').is(":checked")){
        $(".cText_right2 #bank_complete .account_complete").hide();
        $(".cText_right2 #bank_complete .chk_ok").show();
        $("#account_malpungsun").hide();
    }else {
      $(".cText_right2 #bank_complete .account_complete").show();
      $(".cText_right2 #bank_complete .chk_ok").hide();
    }
  });
});

//알림버튼 클릭
$(document).ready(function(){
  var alarmF = 0;
  $(".alarmBtn").click(function(){
      if(alarmF===0){
          $(".alarm_desc").show();
          alarmF = 1;
      }else{
          $(".alarm_desc").hide();
          alarmF = 0;
      }
  });
  //알림영역 이외 클릭시 알림 상세 창 닫기
  $("body").click(function (e) {
      if (!$(".alarm_desc,.alarmArea").has(e.target).length) {
          $(".alarm_desc").hide();
          alarmF = 0;
      }
  });
});

//알람 저장버튼
$(document).ready(function(){
  $(".save_bt").click(function(){
    $("#full").show();
  });
  $(".save_ok").click(function(){
    $("#full").hide();
  });
});


//알림 리스트 삭제
$(document).ready(function(){
  var a_count = $(".alarm_desc dd").length;
  $(".alarm_count").text(a_count);
  $(".delete").click(function(){
    $(this).parent("dd").remove();
    var a_count = $(".alarm_desc dd").length;
    $(".alarm_count").text(a_count);
    return false;
  });
});

//공지사항 리스트
$(document).ready(function(){
  $(".notice_tbody tr").click(function(){
      var listNum = $(".notice_tbody tr").index(this);
      location.href="notice_detail.php?"+listNum+"";
  });
});


//scroll_fixed

  // $(document).ready(function() {
  // 	var floatPosition = $("#left_coin_menu").scrollTop();
  //   //console.log(floatPosition);
  // 	$(window).scroll(function() {
  // 		var scrollTop = $(window).scrollTop();
  //       //console.log(scrollTop);
  // 		var newPosition = scrollTop + floatPosition + "px";
  //     if(scrollTop < 530){
  //       $("#left_coin_menu").stop().animate({
  //         "top" : newPosition
  //       }, 500);
  //     }
  // 	}).scroll();
  // });

  /*계좌등록체크박스*/

  $(document).ready(function(){

    var account = 0;
    $(".account_agree").click(function(){
      if(account==0){
      $(".bank_complete").css({background:"#7AABDF",cursor:"pointer"});
      account=1;
      }else{
    $(".bank_complete").css({background:"#666"});
      account=0;
      }
    });
  });

  /*sub_menu(책갈피)*/

  $(document).ready(function(){

    $(".submenu_mypage").click(function(e){
        e.preventDefault();
      $(".submenu_mypage_inner").stop().animate({right:0},300);
    });

    $(".submenu_mypage_back").click(function(e){
        e.preventDefault();
      $(".submenu_mypage_inner").stop().animate({right:-360},300);
    });

    $(".submenu_mypage").click(function(e){
        e.preventDefault();
      $(".submenu_security_inner").stop().animate({right:-300},300);
    });

    $(".submenu_security").click(function(e){
        e.preventDefault();
      $(".submenu_security_inner").stop().animate({right:0},300);
    });

    $(".submenu_mypage_back2").click(function(e){
        e.preventDefault();
      $(".submenu_security_inner").stop().animate({right:-300},300);
    });

  });


  /*작은 네비 슬라이더*/
  $(document).ready(function(){
      $('.content_nav ul li dl.off').hide();
      $('.content_nav ul li a.more_menu').click(function(e){
          e.preventDefault();
          $(this).parent().toggleClass('on');
          $(this).next().stop().slideToggle();
      })
  })

//알림설정 토글버튼
$(document).ready(function(){
    $(".toggle_area .toggle_text").text("OFF");
  $(".toggle_area input[type='checkbox']").click(function(){
      if($(this).prop("checked")) {
           $(this).prop("checked",true);
           $(this).nextAll("p").text("ON");
      }else {
           $(this).prop("checked",false);
           $(this).nextAll("p").text("OFF");
      }
  });
});
// 팝업 취소 버튼 클릭시 팝업 꺼짐
$(document).ready(function(){
  $(".phone_change_box2").hide();
  $(".request_btn").click(function(){
    $(".phone_change_box").hide();
    $(".phone_change_box2").show();
  });
  $(".phone_cancel_btn").click(function(){
    $("#full").hide();
  });
  $(".cancel_btn_ok").click(function(){
    $("#popupbox, #shadow").hide();
  });
});

//휴대폰변경 확인창
$(document).ready(function(){
  $(".request_change").click(function(){
    $("#full").show();
  });
});

//휴대폰변경 완료창
$(document).ready(function(){
  $(".request_number, .cofirm_number").click(function(){
      $("#full, .change_OTP_count_down").show();
  });
  $(".phone2_ok").click(function(){
    $("#full").hide();
  });
});

//회원가입 체크박스
$(document).ready(function(){
  $(".im_all_agree").click(function(){
      if($(".im_all_agree").prop("checked")) {
          $(".im_agree").prop("checked",true);
          $(".sign_up_bt").hide();
          $(".sign_up_bt_on").show();
      }else {
          $(".im_agree").prop("checked",false);
          $(".sign_up_bt").show();
          $(".sign_up_bt_on").hide();
      }
  });
  $(".im_agree").change(function(){
      var join_chk = $(".im_agree");
      if(join_chk.length == join_chk.filter(":checked").length){
        $(".im_all_agree").prop("checked",true);
        $(".sign_up_bt").hide();
        $(".sign_up_bt_on").show();
      }else {
        $(".im_all_agree").prop("checked",false);
        $(".sign_up_bt").show();
        $(".sign_up_bt_on").hide();
        if($('#agree_content_01').is(":checked") && $('#agree_content_02').is(":checked")){
          $(".sign_up_bt").hide();
          $(".sign_up_bt_on").show();
        }
      }
  });

});
//회원가입 - 비밀번호 요건
$(document).ready(function(){
  $(".password_alarm_wrap").hide();
  var input_val = $(".signUp_right_con .user_pass");
  input_val.on('keyup', function() {
    $(".password_alarm_wrap").show();
    if(input_val.val()==''){
      $(".password_alarm_wrap").hide();
    }
  });
});

//회원가입 이메일인증 팝업
$(document).ready(function(){
  $(".join_btn sign_up_bt_on").click(function(){
    $("#full").show();
  });
});

//입금 주소 복사
$(document).ready(function(){
  $(".copy_pop").hide();
  $("#input_bitcoin div.BTC_input_address_wrap input[type='button']").click(function(){
    $(".copy_pop, #shadow").show();
  });
  $(".close_btn").click(function(){
    $(".copy_pop, #shadow").hide();
  });
});

// 입출금 내역 상세보기
$(document).ready(function(){
  $(".temporary_address_click").hide();
  var detail = 0;
  $(".btn_small2").click(function(){
    if(detail === 0) {
        $(".temporary_address_click").show();
        detail = 1;
    }else {
      $(".temporary_address_click").hide();
      detail = 0;
    }
  });
});

//코인 출금신청시 팝업창
$(document).ready(function(){
  $("#coin_withdrawal_box").hide();
  $("#output_bitcoin div.before_send_money_03 input[type='submit']").click(function(){
    $("#coin_withdrawal_box, #shadow").show();
  });
  $("#coin_withdrawal_box .cancel_btn").click(function(){
    $(".coin_withdrawal_box, #shadow").hide();
  });
});

//출금한도조회버튼 클릭시 팝업
$(document).ready(function(){
  $(".certification_level_table").click(function(){
    $(".common_table_content, #shadow").show();
  });
  $(".common_table_content .close_btn").click(function(){
    $(".common_table_content, #shadow").hide();
  });
});
//휴대폰변경 인증번호 카운트다운

$(document).ready(function(){
  $(".count_down, .cofirm_number").hide();
  $(".request_number").click(function(){
    $(".count_down, .cofirm_number").show();
    $(".request_number").hide();
  });
});

//원화거래 출금 인증번호 팝업
$(document).ready(function(){
    $(".KRW_SMS_number").hide();
    $(".request_number2, .cofirm_number").click(function(){
      $(".count_down, .cofirm_number, .KRW_SMS_number, #shadow").show();
      $(".request_number2").hide();
    });
    $(".leave_member_agree_btn").click(function(){
      $(".KRW_SMS_number, #shadow").hide();
    });
});

//회원가입 버튼 클릭시 나오는 인증팝업
$(document).ready(function(){
  $(".email_certification_popup").hide();
  $(".sign_up_bt_on").click(function(){
    $(".email_certification_popup").show();
  });
  $(".nextok").click(function(){
      $(".email_certification_popup").hide();
  });
});

//원화거래 표
$(document).ready(function(){
  //코인명 변경(한글/영어)
  var coin_name = 0;
  $(".coinName").click(function(){
     if(coin_name === 0) {
      $(".coinName span").text("영문명");
      $("#deal_orgin_transaction tbody p.kor_name").hide();
      $("#deal_orgin_transaction tbody p.eng_name").show();
      coin_name = 1;
     }else {
       $(".coinName span").text("한글명");
       $("#deal_orgin_transaction tbody  p.kor_name").show();
       $("#deal_orgin_transaction tbody p.eng_name").hide();
       coin_name = 0;
     }
  });

});

//이용약관,개인정보처리방침 탭
// $(function () {
//
//     $(".use_area_text").hide();
//     $(".use_area_text:first").show();
//
//     $("ul.cops li").click(function () {
//         $("ul.cops li").removeClass("use_active");
//         $(this).addClass("use_active");
//         $(".use_area_text").hide()
//         var activeTab = $(this).attr("rel");
//         $("#" + activeTab).show()
//     });
// });

//파일 첨부 삭제
function delAttach(form) {
    document.getElementById("fileName").value = "";
}


//1:1문의 확인,취소 팝업

//보내기버튼
$(document).ready(function(){
  $(".send_btn").click(function(){
    $("#full").show();
  });
});

$(document).ready(function(){
  $(".question_save_btn").click(function(){
    $(".question_box").show();
  });

  $(".cancel_btn_ok2").click(function(){
    $("#popupbox, #shadow").hide();
  });
});

//취소버튼
$(document).ready(function(){
  $(".question_cancel").click(function(){
    $("#full2").show();
  });
});

$(document).ready(function(){
  $(".cancel_btn3").click(function(){
    $("#full2").hide();
  });
});

/*FAQ 토글*/
$(document).ready(function(){
    $('.faq_ul .answer').hide();
    var acodian = {
      click: function(target) {
        var $target = $(target);
        $target.on('click', function() {
          if ($(this).hasClass('on')) {
            slideUp($target);
          } else {
            slideUp($target);
            $(this).addClass('on').next().stop().slideDown();
          }
          function slideUp($target) {
            $target.removeClass('on').next().stop().slideUp();
          }
        });
      }
    };
    acodian.click('.faq_ul li .question');
})
/*FAQ select한 콘텐츠만 보이기*/
$(document).ready(function(){
    $(".faq_inner #look_method").change(function(e){
        e.preventDefault();
        var state = $(this).val();
        if(state =="all"){
            $(".faq_section").show();
        }else{
            $(".faq_section").hide();
            $("." + state).show();
        }
    });
});

//change_OTP_step1 인증번호창
$(document).ready(function(){
  $(".change_OTP_agree_btn").click(function(){
    $("#full").hide();
  });
});

//계좌 인증번호 요청
$(document).ready(function(){
  $(".bank_request .request, .code_area").hide();
  $(".bank_request input[type='submit']").click(function(){
    $(".bank_request input[type='submit'], .notice").hide();
    $(".bank_request .request,.code_area").show();
  });
});

//계좌 인증번호 삭제
  $(document).ready(function(){
    $(".delete_icon").click(function(){
      $("#full").show();
    });
    $(".delete_cancel").click(function(){
      $("#full").hide();
    });
  });
//계좌 인증번호 확인방법 팝업
  $(document).ready(function(){
  $(".code_text2").click(function(){
    $("#account_full").show();
  });
  $(".delete_cancel").click(function(){
    $("#account_full").hide();
  });
});

/*코인 셀렉트창 화살표*/
$(document).ready(function(){
    $('.coinSelect_area .coinSelect dt').click(function(e){
        e.preventDefault();
        $(this).parent().toggleClass('on');
    })
    $('.coinSelect_area .coinSelect dd').click(function(e){
        e.preventDefault();
        $(this).parent().removeClass('on');
    })
});

/*반응형 고객지원 select메뉴*/
$(document).ready(function(){
var menu_s=0;
$(".guide_select .guide_option").hide();
$(".guide_select dt").click(function(){
    if(menu_s===0){
        $(this).siblings().show();

        // 탭 클릭이벤트
        $(".guide_select .guide_option dd").click(function() {
            var selectCName = $(this).text();
            $(".guide_select dt span").text(selectCName);
            $(".guide_select .guide_option").hide();
            menu_s=0;
            return false;
        });
        menu_s=1;
        return false;
    }else{
        // dt한번 더 클릭시 이벤트
        $(".guide_select .guide_option").hide();
        menu_s=0;
        return false;
    }
});
})

/*코인 셀렉트창 화살표*/
$(document).ready(function(){
    $('.guide_select dt').click(function(e){
        e.preventDefault();
        $(this).toggleClass('on');
    })
    $('.guide_select .guide_option dd').click(function(e){
        e.preventDefault();
        $('.guide_select dt').removeClass('on');
    })
});

//반응형 햄버거 메뉴 안 고객지원 액티브 했을때 */
$(document).ready(function(){
  var select = 0;
  $(".customer2").hide();
  $(".customer1,.customer2").click(function(e){
      e.preventDefault();
    if(select === 0) {
        $(".customer2").show();
        $(".customer1").hide();
        select = 1;
    }else {
      $(".customer1").show();
      $(".customer2").hide();
      select = 0;
    }
  });
});

$(document).ready(function(){
  var select = 0;
  $(".second_menu").hide();
  $(".customer1,.customer2").click(function(e){
      e.preventDefault();
        $(".second_menu").stop().slideToggle(500);
  });
});
/*$(document).ready(function(){
    $(".m_mainmenu .customer_li .second_menu").hide();
    $(".m_mainmenu .customer_li > .m_menutext").click(function(e){
        e.preventDefault();
        $(".m_mainmenu .customer_li .second_menu").stop().slideToggle(500);
        $(".m_nav_bottom").stop().toggleClass('margin_on');
    })
});*/

/*반응형 햄버거 쉐도우 클릭했을때 사라지기*/
$(document).ready(function(){
    $('#responsive_shadow').click(function(e){
        e.preventDefault();
        $('#m_menu-toggle').prop('checked',false);
    })
});

/*반응형 로그인 말풍선*/
$(document).ready(function(){
    var click_time = 0;
    $('#login_area_responsive .email_find_btn a').on('click',function(e){
        e.preventDefault();
        if (click_time === 0) {
            $('#login_area_responsive .e_mail_find').show();
            click_time = 1;
        }else{
            $('#login_area_responsive .e_mail_find').hide();
            click_time = 0;
        }
    });
    $('body').click(function(e){
        if(!$(".email_find_btn").has(e.target).length){
            $("#login_area_responsive .e_mail_find").hide();
            click_time = 0;
        }
    });
});

/*원화 출금 신청 버튼 클릭시 확인팝업*/
$(document).ready(function(){
    $(".withdrawal_won").hide();
    $('#output_KRW .cancel_or_apply .if_you_all_agree').click(function(){
        $(".withdrawal_won").show();
        $('#shadow').show();
    })
    $(".withdrawal_won .cancel_or_apply .cancel_btn").click(function(){
        $(".withdrawal_won").hide();
        $('#shadow').hide();
    })
})

/*input창 숫자만 입력, 천단위마다 콤마(,) 실시간으로 입력*/
var rgx1 = /\D/g;
var rgx2 = /(\d+)(\d{3})/;
function getNumber(obj){
    var num01;
    var num02;
    num01 = obj.value;
    num02 = num01.replace(rgx1,"");
    num01 = setComma(num02);
    obj.value = num01;
}
function setComma(inNum){
    var outNum;
    outNum = inNum;
    while (rgx2.test(outNum)){
        outNum = outNum.replace(rgx2,'$1'+','+'$2');
    }
    return outNum;
}

/*보안비밀번호 4자리수 입력*/
function lengthFix(obj){
    if(obj.value.length >= obj.maxLength){
        return false;
    }
}

//공지사항,faq 검색결과
/*$(document).ready(function(){
  $(".no_search").hide();
  var search_val = $(".notice_search, .faq_search");
  search_val.click('click', function() {
    $(".no_search").show();
    $(".notice_tbody, .faq_section").hide();
    if(search_val.val()==''){
      $(".no_search").hide();
      $(".notice_tbody, .faq_section").show();
    }
  });
});

//공지사항 검색결과 글나오기
$(document).ready(function(){
	$(".notice_search").keyup(function(){
    $(".notice_search").text($(".notice_search_td").val());
	});
});*/

//faq 검색결과 글나오기
$(document).ready(function(){
	$(".faq_search").keyup(function(){
    $(".search_val").text($(".faq_search").val());
	});
});

//공지사항 검색결과
$(document).ready(function(){
  $(".no_search").hide();
  $(".notice_search").click("keyup", function() {
    if( $(".no_search").css("display") != "none" ) {
      $(".no_search").hide();
    } else {
      $(".no_search").show()
    }
    var value = $(this).val().toLowerCase();
    var value2 = $(".no_search").val().toLowerCase();
    $(".notice_tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      $(".no_search").toggle($(".no").text().toLowerCase().indexOf(value2) > 0);
      /*$(".notice_search").text($(".notice_search_td").val());*/

    });
  });
});

/*$(document).ready(function(){
      $(".notice_search").keyup(function() {

          if( $(".no_search").css("display") != "none" ) {
            $(".no_search").hide();
          } else {
            $(".no_search").show()
          }

          var k = $(this).val();
          $(".notice_tbody").hide();

          $(".no_search").show();

          var temp = $(".notice_list > .notice_tbody  > tr > td:contains('" + k + "')");

          $(temp).parent().show();

      });
});*/

/*반응형 비밀번호 변경페이지 물음표*/
$(document).ready(function(){
  var pw_box = 1;
  $(".question_smallbox2").click(function(){
    if(pw_box === 1){
        $(".password_question_detail2").fadeIn(300);
        pw_box = 0;
    } else{
        $(".password_question_detail2").fadeOut(300);
        pw_box = 1;
    }

  });
});

/*프라임 서비스 구간*/
$(document).ready(function(){
  $(".st1").show();
  $(".ss1").click(function(){
        $(".st1").show(300);
      $(".st2").hide(300);
      $(".st3").hide(300);
    });

    $(".st2").hide();
    $(".ss2").click(function(){
        $(".st2").show(300);
      $(".st1").hide(300);
      $(".st3").hide(300);
  });
      $(".st3").hide();
      $(".ss3").click(function(){
            $(".st3").show(300);
        $(".st1").hide(300);
        $(".st2").hide(300);
  });
});
/*프라임 서비스 구간 호버*/
$(document).ready(function(){
  var hover = 1
  $(".ss1").hover(function(){
    if(hover === 1){
      $(".b_box1").fadeOut(300);
      hover = 0;
    } else{
      $(".b_box1").fadeIn(300);
      hover = 1;
    }
  });
});
$(document).ready(function(){
  var hover = 1
  $(".ss2").hover(function(){
    if(hover === 1){
      $(".b_box2").fadeOut(300);
      hover = 0;
    } else{
      $(".b_box2").fadeIn(300);
      hover = 1;
    }
  });
});
$(document).ready(function(){
  var hover = 1
  $(".ss3").hover(function(){
    if(hover === 1){
      $(".b_box3").fadeOut(300);
      hover = 0;
    } else{
      $(".b_box3").fadeIn(300);
      hover = 1;
    }
  });
});

/*프라임홈버튼*/
var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정
var si = 14000;

$(window).scroll(function(){

var num = $(window).scrollTop();

if(num < vi === num < si){
  $(".main_icon").css("visibility","hidden").fadeOut(300);
}else if( num >= vi && num <= si){
    $(".main_icon").css("visibility","visible").fadeIn(300);
    }
});

/*프라임탑버튼*/
var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정
var si = 14000;

$(window).scroll(function(){

var num = $(window).scrollTop();

if(num < vi === num < si){
  $(".main_top").css("visibility","hidden").fadeOut(300);
}else if( num >= vi && num <= si){
    $(".main_top").css("visibility","visible").fadeIn(300);
    }
});

var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정
var si = 14000;

$(window).scroll(function(){

var num = $(window).scrollTop();

if(num < vi === num < si){
  $("#app_wrap .main_top").css("visibility","hidden").fadeOut(300);
}else if( num >= vi && num <= si){
    $("#app_wrap .main_top").css("visibility","visible").fadeIn(300);
    }
});

$(function(){
  $("body").scroll(function(){
      if($(this).scrollTop() = 0){
        $(".main_top").fadeIn("fast");
          }else{
          	$(".main_top").fadeOut("fast");
          	}
          });
        $(".main_top").click(function(){
            $("html,body").animate({scrollTop:0},500);
            return false;
            });
    });

/*거래소 탭메뉴*/

$(function() {
  $('ul.tab li').click(function() {
    var activeTab = $(this).attr('data-tab');
    $('ul.tab li').removeClass('current');
    $('.tabcontent').removeClass('current');
    $(this).addClass('current');
    $('#' + activeTab).addClass('current');
  })
});


/*코인주소인증 팝업*/

$(document).ready(function(){
  $(".certification_address").hide();
    $(".certification_address_bt").click(function(){
      $(".certification_address, #shadow").show();
    })
    $(".leave_member_agree_btn").click(function(){
      $(".certification_address, #shadow").hide();
    })
});

// /*거래소 로그인페이지*/
// $(document).ready(function(){
//   $(".login_popup").hide();
//     $(".buy_big_btn").click(function(){
//       $(".login_popup, #shadow").show();
//     })
//     $(".popupbt").click(function(){
//       $(".login_popup, #shadow").hide();
//     })
// });
//

/*IE9 크로스브라우징*/
$(document).ready(function(){
    if(navigator.userAgent.indexOf('9.0') == 30) {
        $("#deal_orgin_transaction .tab li").css({'width':'49.2%'}); // 거래소 좌측 코인박스

        $("#wrap #deal_all .deal_all_thead").css({'position':'static'}); //거래소 전체체결
        $("#deal_all thead tr th:not(.deal_time)").css({'text-align':'center','padding-left':'0'});

        $("#mywallet_havecoin thead").css({'position':'static'});//자산관리 보유코인
        $("#mywallet_havecoin thead th:not(.coin_name1)").css({'padding-left':'0'});
    }
});

/*코인정보 트위터 토클*/
$(document).ready(function(){
    $('.twitter_ul .twitter_object').hide();
    var acodian = {
      click: function(target) {
        var $target = $(target);
        $target.on('click', function() {
          if ($(this).hasClass('on')) {
            slideUp($target);
          } else {
            slideUp($target);
            $(this).addClass('on').next().stop().slideDown();
          }
          function slideUp($target) {
            $target.removeClass('on').next().stop().slideUp();
          }
        });
      }
    };
    acodian.click('.twitter_ul li .twitter_toggle');
})
