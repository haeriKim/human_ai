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

//내 자산관리 탭
$(function () {
    $(".tab_content").hide();
    $(".tab_content:first").show();
    $("#mywallet_havecoin").hide();

    $("ul.tabs li.tab_same").click(function () {
        $("ul.tabs li.tab_same").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show()

        if(activeTab == "tab1" || activeTab == "tab2") {
          $("#deal_orgin_transaction").show();
          $("#mywallet_havecoin").hide();
        } else {
          $("#mywallet_havecoin").show();
          $("#deal_orgin_transaction").hide();
        }
    });
});

// 체결,미체결 표
$(function () {

    $(".conclu_table, .KRW_conclu_table").hide();
    $(".conclu_table:first, .KRW_conclu_table:first").show();

    $("ul.tabs2 li").click(function () {
        $("ul.tabs2 li").removeClass("active2").css({"color": "#1b2f4a","border":"1px solid #1b2f4a","background":"#fff"});
        $(this).addClass("active2").css({"color": "#fff","border":"1px solid #1b2f4a","background":"#1b2f4a"});
        $(".conclu_table").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();
    });

    $("ul.tabs3 li").click(function () {
        $("ul.tabs3 li").removeClass("active2").css({"color": "#1b2f4a","border":"1px solid #1b2f4a","background":"#fff"});
        $(this).addClass("active2").css({"color": "#fff","border":"1px solid #1b2f4a","background":"#1b2f4a"});
        $(".KRW_conclu_table").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show();
        console.log(activeTab);
    });
    // var a = $("#KRW_input_output ul.tabs3 li").attr("class");
    // console.log(a);
    // if(a === "input_KRW" || a === "output_KRW" || a === "mywallet_tab") {
    //
    // }
});

//내 자산관리-주의사항 입금 전체 동의
$(document).ready(function(){
    $("div.before_send_money_01 .if_you_all_agree").hide();
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
});

//내 자산관리-주의사항 출금 전체 동의
$(document).ready(function(){
    $("div.before_send_money_02 .if_you_all_agree").hide();
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

    $("input[type='checkbox'].agree_check").change(function(){
        var chk2 = $("input[type='checkbox'].agree_check");
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
});

//자산관리 - 인증센터 말풍선
$(document).ready(function(){
  $("#malpungsun, #account_malpungsun").hide();
  $(".cText_right .disable, .account_complete").click(function(){
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
