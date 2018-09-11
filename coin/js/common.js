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

    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show()
    });
});

// 체결,미체결 표
$(function () {

    $(".conclu_table").hide();
    $(".conclu_table:first").show();

    $("ul.tabs2 li").click(function () {
        $("ul.tabs2 li").removeClass("active2").css({"color": "#1b2f4a","border":"1px solid #1b2f4a","background":"#fff"});
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
        $(this).addClass("active2").css({"color": "#fff","border":"1px solid #1b2f4a","background":"#1b2f4a"});
        $(".conclu_table").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).show()
    });
});

//내 자산관리-의사항 전체 동의
$(document).ready(function(){
    $("div.before_send_money_wrap .if_you_all_agree").hide();
    $(".allAgree").click(function(){
        if($(".allAgree").prop("checked")) {
            $(".agree_check").prop("checked",true);
            $("div.before_send_money_wrap .if_you_all_agree").show();
            $("div.before_send_money_wrap .if_you_not_all_agree").hide();
        }else {
            $(".agree_check").prop("checked",false);
            $("div.before_send_money_wrap .if_you_all_agree").hide();
            $("div.before_send_money_wrap .if_you_not_all_agree").show();
        }
    });

    $("input[type='checkbox'].agree_check").change(function(){
        var chk = $("input[type='checkbox'].agree_check");
        if(chk.length == chk.filter(":checked").length){
          $(".allAgree").prop("checked",true);
            $("div.before_send_money_wrap .if_you_all_agree").show();
            $("div.before_send_money_wrap .if_you_not_all_agree").hide();
        }else {
          $(".allAgree").prop("checked",false);
          $("div.before_send_money_wrap .if_you_all_agree").hide();
          $("div.before_send_money_wrap .if_you_not_all_agree").show();
        }
    });
});

//자산관리 - 인증센터 말풍선
$(document).ready(function(){
  $("#malpungsun").hide();
  $(".cText_right .disable").click(function(){
      $("#malpungsun").show();
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

//공지사항 리스트
$(document).ready(function(){
  $("#notice_list tr").click(function(){
      var listNum = $("#notice_list tr").index(this);
      location.href="notice_detail.php?"+listNum+"";
  });
});
/*fixed_menu 플로팅메뉴*/

/*$(function(){

  var floatbannerHeight = $("#left_coin_menu").outerHeight(true); //배너 길이
  var firstPosition = $(".qqq").offset().top; //처음기준 (제일높은기준)
  var lastPosition = $(".aaa").offset().top; //마지막 기준 (제일낮은기준)

  var floatPosition = firstPosition ;

    $(window).scroll(function() {
      // 현재 스크롤 위치를 가져온다.
      var windowHeight = $(window).height();
      var scrollTop = $(window).scrollTop();
      var positionTop = $("#left_coin_menu").position().top;
      var newPosition = (scrollTop + positionTop) - floatbannerHeight + "px";

      //console.log('플로팅배너 높이' + floatbannerHeight);
      //console.log('처음기준' + firstPosition);
      //console.log('마지막기준' + lastPosition);
      //console.log('배너 처음 위치' + floatPosition);
      //console.log('윈도우스크롤' + scrollTop);
      //console.log('새로운위치' + newPosition);

      if( floatPosition > scrollTop){ //처음 위치값 보다 윈도우 스크롤이 작을때
        console.log('작을때');
        $("#left_coin_menu").stop().animate({
          "top" : '0',
        }, 500);
      }else if( floatPosition < scrollTop ){ //처음 위치값 보다 윈도우 스크롤이 클때
        console.log('클때');
        $("#left_coin_menu").stop().animate({
          "top" : newPosition ,
        }, 500);
      }


      if( ($(document).height() - $("#footer").height())  <= scrollTop + windowHeight  ){

        console.log('마지막위치');

        $("#left_coin_menu").stop().animate({
          "top" : lastPosition - floatbannerHeight*1.3 + "px"
        }, 500);

      }


    }).scroll();

  });*/


//플로팅배너 다른예제

  // $(document).ready(function() {
  // 	var floatPosition = parseInt($("#left_coin_menu").css('top'));
  //
  //
  // 	$(window).scroll(function() {
  //
  // 		var scrollTop = $(window).scrollTop();
  // 		var newPosition = scrollTop + floatPosition + "px";
  //
  // 		$("#left_coin_menu").stop().animate({
  // 			"top" : newPosition
  // 		}, 500);
  //
  // 	}).scroll();
  //
  // });

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
