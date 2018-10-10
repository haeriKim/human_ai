/*FAQ 토글*/
$(document).ready(function(){
    $('.faq_ul li div.answer').hide();
    $('.faq_ul li p.question').click(function(e){
        e.preventDefault();
        if($(this).next().css('display')=='none'){
            $('.faq_ul li div.answer').slideUp();
        }
            $(this).next().stop().slideToggle();
    })
})
