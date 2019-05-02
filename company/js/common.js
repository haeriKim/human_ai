$(function(){
  $(window).scroll(function(){
      if($(window).scrollTop()>100){
        $("#top_bt").fadeIn("fast");
      }else{
        $("#top_bt").fadeOut("fast");
      }
  });
  $(".top_bt").on({
    click : function(){
        $("html,body").stop().animate({scrollTop:0},500);
        return false;
    }
  });
});

//사업분야 탭부분
$(function(){
$('.tech_content:gt(0)').hide();
$('.tech_content_wrap > ul > li > a').on('click',function(e){
    e.preventDefault();
    number=$(this).parent().index();
    $('.tech_content_wrap > ul > li.on').removeClass('on');
    $(this).parent().addClass('on');
    $('.tech_content:visible').hide();
    $('.tech_content:eq('+(number)+')').stop().fadeOut(400).fadeIn(400);
    })
});

//회사소개 헤더 스크롤
$(function(){

  var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정

  $(window).scroll(function(){

  var num = $(window).scrollTop();
  // console.log(num)

      if(num < vi){
          $(".company_header").css({"background":"none", "position":"absolute", "top":"150px","box-shadow":"none","left":"35%","width":"auto"}).fadeIn(300);
        }
        else{
            $(".company_header").css({"background":"rgba(255,255,255,.6)","position":"fixed", "top":"0","box-shadow":"1px 1px 1px rgba(255, 255, 255, 0.5)","text-align":"right","width":"100%","left":"0","z-index":"6"}).fadeIn(300);
        }
  });

});

//회사소개 헤더 액티브
$(document).ready(function(){
    $(window).scroll(function(){
        $('.target').each(function(index) {
          if($(window).scrollTop() >= $('.target').eq(index).offset().top-200) {
              $('.company_header li a').removeClass('on');
              $('.company_header li a').eq(index).addClass('on');
          }
        });
        $('.target_mobile').each(function(i){
            if($(window).scrollTop()>=$('.target_mobile').eq(i).offset().top-100){
                $('.app_company_header li a').removeClass('app_on');
                $('.app_company_header li a').eq(i).addClass('app_on');
            }else{
                $('.app_company_header li a').eq(i).removeClass('app_on');
            }
        });
  });
});

//회사소개 헤더 액티브
$(document).ready(function(){
  $(".company_header li a.intro").addClass("on");
  $('.company_header li a').on({
      click : function(){
        $('.company_header li a').removeClass("on");
        $(this).addClass('on');
      }
  });
  $('.app_company_header li a').on({
      click : function(){
        $('.app_company_header li a').removeClass("app_on");
        $(this).addClass('app_on');
      }
  });
});
