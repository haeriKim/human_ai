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
    $(".not_yet_deal_content .check").change(function(){
        if($(".not_yet_deal_content .check").prop("checked")) {
            $(".not_yet_deal .delete").addClass('on');
            console.log("Dd");
        }else {
            $(".not_yet_deal .delete").removeClass('on');
        }
    });
});
