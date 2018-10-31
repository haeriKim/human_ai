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
