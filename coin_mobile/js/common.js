/*mobile js*/

/*거래소 tab메뉴*/

$(function () {

    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("table.tabs td").click(function () {
        $("table.tabs td span").removeClass("tab_active");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
        $(this).addClass("tab_active").css({border:"1px sold #30afb8", color:"#30afb8"});
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});
