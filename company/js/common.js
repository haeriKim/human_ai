//회사소개 top 버튼
    $(function(){
      $(window).scroll(function(){
          if($(this).scrollTop() = 0){
          	$("#top_bt").fadeIn("fast");
          		}else{
          			$("#top_bt").fadeOut("fast");
          			}
          		});
            $(".top_bt").click(function(){
                $("html,body").animate({scrollTop:0},500);
                return false;
                });
       });

//사업분야 탭부분
$(document).ready(function(){
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
  var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정
  var si = 5000;

  $(window).scroll(function(){

  var width_size = window.outerWidth;
  var num = $(window).scrollTop();
  // console.log(num)

  if(num < vi){
      $(".company_header").css({"background":"none", "position":"absolute", "top":"150px","box-shadow":"none","left":"35%","width":"auto"}).fadeIn(300);
    }
    else if( num >= vi && num <= si){
      // console.log("an");
      $(".company_header").css({"background":"rgba(255,255,255,.6)","position":"fixed", "top":"0","box-shadow":"1px 1px 1px rgba(255, 255, 255, 0.5)","text-align":"right","width":"100%","left":"0","z-index":"6"}).fadeIn(300);
    }
});


//회사소개 헤더 액티브
$(document).ready(function(){
  $(window).on('scroll', function() {
      $('.target').each(function() {
          if($(window).scrollTop() >= $(this).offset().top) {
              // console.log($(window).scrollTop)
              var id = $(this).attr('id');
              $('.company_header li a, .app_company_header li a').removeClass('on');
              $('.company_header li a[href=#'+ id +'] , .app_company_header li a[href=#'+ id +']').addClass('on');
          }
      });
  });
});
//회사소개 헤더 액티브
$(document).ready(function(){
  $(".company_header li a.intro, .app_company_header li a.intro").addClass("on");
  $(".company_header li a, .app_company_header li a").click(function(){
    $('.company_header li a, .app_company_header li a').removeClass("on");
    $(this).addClass("on");
  });
});
