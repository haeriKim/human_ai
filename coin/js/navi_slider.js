/*작은 네비 슬라이더*/
$(document).ready(function(){
    $('.content_nav ul li dl.off').hide();
    $('.content_nav ul li a.more_menu').click(function(){
        $(this).parent().toggleClass('on');
        $(this).next().slideToggle();
    })
})
