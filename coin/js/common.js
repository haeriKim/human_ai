/*slide 슬라이드*/

$(document).ready(function(){
  var nowNum = 0;
  var st;
  var bannerObj = $('.slideUl li');
  var maxLength = bannerObj.length;

  // 자동슬라이드
  function autoSlide(){
    autoRun = setInterval(function() {
      rollingFn('right');
    },7000);
  }
  bannerObj.eq(nowNum).fadeIn();

 // 버튼 눌렀을 때 슬라이드
  $('.nextBtn').on('click',function(){
    rollingFn('right');
  });
  $('.prevBtn').on('click',function(){
    rollingFn('left');
  });

  function rollingFn(direction){
    if(direction=='right'){
      nowNum = nowNum+1;
      if(nowNum>maxLength-1){
        nowNum = 0;
      }
    }else{
      nowNum = nowNum-1;
      if(nowNum<0){
        nowNum = maxLength-1;
      }
    }
    bannerObj.hide().eq(nowNum).fadeIn();
  }
  $('.banner').mouseover(function(){
     clearInterval(autoRun);
   }).mouseout(function(){
      autoSlide();
   });
  autoSlide();
});

//메인_카드현황
$(document).ready(function(){
    //카드현황 다음버튼
    $('.next').on('click',function(){
        if($('.bitcoin_card_inner').is(':animated')==false){
            $('.bitcoin_card_inner').animate({left:'-240px'},1000,function(){
                $('.bitcoin_card_inner').append($('.bitcoin_card_inner li:first'));
                $('.bitcoin_card_inner').css('left','0px');
            })
        }
    })
    //카드현황 이전버튼
    $('.prev').on('click',function(){
        if($('.bitcoin_card_inner').is(':animated')==false){
            $('.bitcoin_card_inner').prepend($('.bitcoin_card_inner li:last'));
            $('.bitcoin_card_inner').css('left','-240px');
            $('.bitcoin_card_inner').animate({left:'0px'},1000)
        }
    })
})

//코인선택
$(document).ready(function(){
var coin_s=0; // 코인선택 탭 클릭을 확인하는값
$(".coinSelect dt").click(function(){
    if(coin_s===0){
        $(this).siblings().show();
        $(this).parent().css({"backgroundColor":"#fff"});

        // 코인별탭 마우스이벤트
        $(".coinSelect dd").mouseover(function(){
            $(this).css({"backgroundColor":"#c8eefb"});
        }).mouseout(function(){
            $(this).css({"background":"none"});
        });
        // 코인별탭 클릭이벤트
        $(".coinSelect dd").click(function() {
            var selectC = $(this).children().children("img").attr("src");
            var selectCName = $(this).text();
            $(".coinSelect dt a").children("img").attr("src", selectC);
            $(".coinSelect dt span").text(selectCName);
            $(".coinSelect dd").hide();
            $(".coinSelect").css({"background-color":"#fff"});
            coin_s=0;
            return false;
        });
        coin_s=1;
        return false;
    }else{
        // dt한번 더 클릭시 이벤트
        $(".coinSelect dd").hide();
        $(".coinSelect").css({"background":"#fff"});
        coin_s=0;
        return false;
    }
});
})

//메인 팝업
$(document).ready(function(){
    function closePopup(){
        $('#full_content').hide();
        $('#shadow').hide();
    }
    function modalpopup(){
        $('#shadow').css({
            'width':'100%',
            'height':'50%',
            'position':'fixed'
        })
        $('#shadow').show();
        $('#full_content').css({
            'position':'fixed'
        });
        $('#full_content').show();
    }
    $('.close_btn').on('click',function(e){
        e.preventDefault();
        closePopup();
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

//거래소-코인정보 상세보기
$(document).ready(function(){
  var click_val=0;
  $(".question").click(function(){
    if(click_val===0) {
      $(".coin_money_detail").fadeIn(300);
      click_val=1;
    }else {
      $(".coin_money_detail").fadeOut(300);
      click_val=0;
    }
  });
});

//내 자산관리 전체탭
$(function () {
    $(".tab_content").hide();
    $(".tab_content:first").show();
    $("#mywallet_havecoin").hide();

    $("ul.tabs li.tab_same").click(function () {
        $("ul.tabs li.tab_same").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();
        $(".KRW_conclu_table").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();

        if(activeTab == "tab1" || activeTab == "tab2") {
          $("#deal_orgin_transaction").show();
          $("#mywallet_havecoin").hide();
        } else {
          $("#mywallet_havecoin").show();
          $("#deal_orgin_transaction").hide();
          $("ul.tabs3 li").removeClass("active2");
          $("ul.tabs3 li:first").addClass("active2");
          $(".bitcoin_conclu_table").hide();
          $(".KRW_conclu_table:first").show();
          // $(".input_bitcoin").show();
        }
    });
});

// 자산관리 서브탭
$(document).ready(function(){
    $(".conclu_table, .KRW_conclu_table, ul.tabs4, .bitcoin_conclu_table").hide();
    $(".conclu_table:first, .KRW_conclu_table:first, .bitcoin_conclu_table:first").show();

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
        $("#io_list").hide();
        var activeTab = $(this).attr("rel");

        if(activeTab == "input_KRW" || activeTab == "output_KRW"){
            $("#" + activeTab).show();
            $("#io_list").hide();
        }else if(activeTab == "io_list"){
            $("#io_list").show();
        }
    });
    //코인부분 입출금 안보이기
    // var a = $("ul.tabs3 li").attr("rel");
    // if(a === "input_KRW") {
    //   // $("ul.tabs4").hide();
    //   // $(".bitcoin_conclu_table").hide();
    //   $(".input_bitcoin").hide();
    //   console.log("Sdfd");
    // }

    //코인 입출금
    $("ul.tabs4 li").click(function () {
        $("ul.tabs4 li").removeClass("active2");
        $(this).addClass("active2");
        $(".KRW_conclu_table").hide();
        $(".bitcoin_conclu_table").hide();
        $("#io_list").hide();
        var activeTab = $(this).attr("rel");

        if(activeTab == "input_bitcoin" || activeTab == "output_bitcoin"){
            $("#" + activeTab).show();
            $("#io_list").hide();
        }else if(activeTab == "io_list"){
            $("#io_list").show();
        }
      });

    //보유코인 표에서 입출금 눌렀을 때 - 원화,코인 입출금 보이고 안보이기
    var selected_coin = 0;
    $(".coin_sel").click(function (){
      $(".bitcoin_conclu_table").hide();
      $(".bitcoin_conclu_table:first").show();
      $("#mywallet_havecoin tbody tr.active").removeClass("active");
      $(this).parents("tr").addClass("active");
      $("ul.tabs4 li").removeClass("active2");
      $("ul.tabs4 li:first").addClass("active2");
      if(selected_coin === 0){
        $("#KRW_input_output").hide();
        $("#bitcoin_input_output").show();
        $("ul.tabs4").show();
        selected_coin = 1;
        selected_won = 0;
        return false;
      }else{
        $("ul.tabs4 li").removeClass("active2");
        $("ul.tabs4 li:first").addClass("active2");
      }
    });

    var selected_won = 0;
    $(".won_sel").click(function (){
      $("#mywallet_havecoin tbody tr.active").removeClass("active");
      $(this).parents("tr").addClass("active");
      if(selected_won === 0){
        $("#bitcoin_input_output").hide();
        $("#KRW_input_output").show();
        $("ul.tabs3").show();
        selected_won = 1;
        selected_coin = 0;
        return false;
      }
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
  $("#notice_list tr").click(function(){
      var listNum = $("#notice_list tr").index(this);
      location.href="notice_detail.php?"+listNum+"";
  });
});


//scroll_fixed

  $(document).ready(function() {
  	var floatPosition = parseInt($("#left_coin_menu").css('top'));

  	$(window).scroll(function() {

  		var scrollTop = $(window).scrollTop();
  		var newPosition = scrollTop + floatPosition + "px";
      if(scrollTop < 530){
        $("#left_coin_menu").stop().animate({
          "top" : newPosition
        }, 500);
      }else {
        $(".left_coin_menu").css({'position':'fixed', 'top':'20px'});
      }
  	}).scroll();

  });

  /*계좌등록체크박스*/

  $(document).ready(function(){

    var account = 0;
    $(".account_agree").click(function(){
      if(account==0){
      $(".bank_complete").css({background:"#1b2f4a",cursor:"pointer"});
      account=1;
      }else{
    $(".bank_complete").css({background:"#666"});
      account=0;
      }
    });
  });

  /*sub_menu(책갈피)*/

  $(document).ready(function(){

    $(".submenu_mypage").click(function(){
      $(".submenu_mypage_inner").stop().animate({right:0},300);
    });

    $(".submenu_mypage_back").click(function(){
      $(".submenu_mypage_inner").stop().animate({right:-300},300);
    });

    $(".submenu_mypage").click(function(){
      $(".submenu_security_inner").stop().animate({right:-300},300);
    });

    $(".submenu_security").click(function(){
      $(".submenu_security_inner").stop().animate({right:0},300);
    });

    $(".submenu_mypage_back2").click(function(){
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

//알림설정 토글버튼
$(document).ready(function(){
    $(".toggle_area .toggle_text").text("OFF");
  var check = $(".toggle_area input[type='checkbox']");
  var toggle = 0;
  check.click(function(){
    if(toggle === 0) {
      $(this).nextAll("p").text("ON");
      toggle = 1;
    }else {
      $(this).nextAll("p").text("OFF");
      toggle = 0;
    }

  });
});
// 핍업 취소 버튼 클릭시 팝업 꺼짐
$(document).ready(function(){
  $(".phone_change_box2").hide();
  $(".request_btn").click(function(){
    $(".phone_change_box").hide();
    $(".phone_change_box2").show();
  });
  $(".cancel_btn_ok,.cancel_btn").click(function(){
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
  $(".request_number").click(function(){
      $("#full").show();
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

//인증번호 카운트다운

$(document).ready(function(){
  $(".count_down").hide();
  $(".request_number").click(function(){
    $(".count_down").show();
  });
});
