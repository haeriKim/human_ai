/*mobile js*/

/*거래소 tab메뉴*/
$(function () {
    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("table.tabs td").click(function () {
        $("table.tabs td span").removeClass("tab_active");
        $("table.tabs td span").removeClass("tabOn");
        $(this).addClass("tab_active");
        $(this).children("span").addClass("tabOn");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});

/*미체결 탭에서 매수,매도 select 했을때 버튼활성화*/
$(document).ready(function(){
   $("input[type=radio]").each(function(){
       var chk = $(this).is(":checked");
       var name = $(this).attr('name');
       if(chk == true) $("input[name='"+name+"']").data("previous",$(this).val());
   });

   $("input[type=radio]").click(function(){
       var pre = $(this).data("previous");
       var chk = $(this).is(":checked");
       var name = $(this).attr('name');
       if(chk == true && pre == $(this).val()){
           $(this).prop('checked',false);
           $("input[name='"+name+"']").data("previous",'');
       }else{
           if(chk == true) $("input[name='"+name+"']").data("previous",$(this).val());
       }
   });

   $(".not_yet_deal_content .check").click(function(){
       if($(this).filter(":checked").length == 0){
           $(".not_yet_deal .delete").removeClass('on');
       }else{
           $(".not_yet_deal .delete").addClass('on');
       }
   });
});

/*자산관리 페이지 조회선택 버튼*/
$(document).ready(function(){
  var select = 0;
  $("#cal_select,#cal_select_up").click(function(){
    if(select === 0) {
        $("#cal_select_up").show();
        $("#cal_select").hide();
        select = 1;
    }else {
      $("#cal_select").show();
      $("#cal_select_up").hide();
      select = 0;
    }
  });
});

$(document).ready(function(){
  var select = 0;
  $("#cal_select,#cal_select_up").click(function(){
    if(select === 0) {
        $(".cal_lookup_inner").stop().slideToggle(500);
        $(".cal_area").css({"border-bottom":"1px solid rgba(255,255,255,.2)"});
        select = 1;
    }else {
      $(".cal_lookup_inner").stop().slideToggle(500);
        select = 0;
          $(".cal_area").css({"border-bottom":"none"})
    }
  });
});

/*거래내역 체결,미체결 탭*/
$(document).ready(function(){
    $(".deal_table").hide();
    $(".deal_table:first").show();

    $(".deal_tab li").click(function(){
        $(".deal_tab li").removeClass("active");
        $(this).addClass("active");
        $(".deal_table").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});

// 보안비밀번호생성 물음표 클릭시
$(document).ready(function(){
  var select = 0;
  $(".password_question_detail2").hide();
  $(".question_img").click(function(){
    if(select === 0) {
        $(".password_question_detail2").stop().slideToggle(500);
        $(".password_question_detail2").css({"background":"#070B11"});
        select = 1;
    }else {
      $(".password_question_detail2").stop().slideToggle(500);
        select = 0;
          // $(".password_question_detail2").css({"":"none"})
    }
  });
});
/*계좌 등록페이지 삭제*/
$(document).ready(function(){
  var delete_bt = 0;
  $(".account_delete").hide();
$(".delete_icon").click(function(){
  if(delete_bt === 0) {
      $(".account_delete").show();
      delete_bt = 1;
  }else {
    $(".account_delete").hide()
      delete_bt = 0;
    }
  });
});
$(document).ready(function(){
  $(".delete_cancel").click(function(){
    $(".account_delete").hide();
  });
});

// 기간선택 및 금액선택
$(document).ready(function(){
  $(".cal_lookup_inner .days .date_bt, .my_assets_KRW02 .KRW_input_outout .KRW_unit .priceBtn").click(function(){
      $(".cal_lookup_inner .days .date_bt, .my_assets_KRW02 .KRW_input_outout .KRW_unit .priceBtn").css({"color":"#fff","borderColor":"#fff"});
      $(this).css({"color":"#30AFB8","borderColor":"#30AFB8"});
      return false;
  });
});

//메인 팝업
$(document).ready(function(){
    $('#full_content .close_btn').click(function(e){
        e.preventDefault();
        $('#full').hide();
    })
});
//자산관리팝업
$(document).ready(function(){
  $('.question_mark').click(function(){
    $('#full').show();
  });
  $('#full_content .close_btn').click(function(e){
    e.preventDefault();
    $('#full').hide();
  })
})
//원화 출금한도 팝업
$(document).ready(function(){
  $('#question_mark').click(function(){
    $('#full').show();
  });
  $('#full_content .close_btn').click(function(e){
    e.preventDefault();
    $('#full').hide();
  })
})

//고객지원 아코디언
$(document).ready(function(){
    $('.moreView_cs .second_menu').hide();
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
    acodian.click('.moreView_cs li.first_menu');
})
