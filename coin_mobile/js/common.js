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
