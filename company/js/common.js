//회사소개 top 버튼
    $(function(){
      $(window).scroll(function(){
          if($(this).scrollTop() > 200){
          	$("#top_bt").fadeIn("fast");
          		}else{
          			$("#top_bt").fadeOut("fast");
          			}
          		});
            $(".top_bt").click(function(){
                $("html,body").animate({scrollTop:0},500);
                });
       });

//기술소개 탭부분
$(document).ready(function(){
$('.tech_content:gt(0)').hide();
$('.tech_content_wrap > ul > li > a').on('click',function(e){
    e.preventDefault();
    num=$(this).parent().index();
    $('.tech_content_wrap > ul > li.on').removeClass('on');
    $(this).parent().addClass('on');
    $('.tech_content:visible').hide();
    $('.tech_content:eq('+(num)+')').stop().fadeOut(400).fadeIn(400);
    })
})

//회사소개 헤더 스크롤
  var vi = 500;  // 하단에 메뉴 표시할 스크롤 위치값 지정
  var si = 5000;

  $(window).scroll(function(){

  var num = $(window).scrollTop();

if(num < vi){
    $(".company_header").css("visibility","hidden").fadeOut(300);
  }else if( num >= vi && num <= si){
      $(".company_header").css("visibility","visible").fadeIn(300);
      }
});

//회사소개 헤더 액티브
$(document).ready(function(){
$(window).scroll(function(){
var num=$(window).scrollTop();
var b=$('.co_intro').offset().top;
var c=$('.co_intro_history').offset().top;
var d=$('.co_intro_map').offset().top;
if(num >= b && num <= c){
  $('.company_header li:nth-child(1) a').css({"border-bottom":"2px solid #1b2f4a"});
  $('.company_header li:nth-child(2) a').css({"border":"none"});
}
else if(num >=b || num <= c){
  $(".company_header li:nth-child(1) a").css({"border":"none"});
  $('.company_header li:nth-child(2) a').css({"border-bottom":"2px solid #1b2f4a"});
}

});


})
