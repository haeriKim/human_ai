/*메인 퍼센테이지수*/

$(document).ready(function(){
  var mytxt = [
    "+ 0.21%",
    "+ 1.02%",
    "+ 0.45%"
  ]
  var id = setInterval(up,6000);
    var chkNum = 0;
      $(".stock_per").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock").append("<b class='stock_per'></b>");
        $(".stock_per").eq(1).text(mytxt[chkNum]);
        $(".stock").animate({top:"-="+3},300,function(){
          $(".stock_per").eq(0).remove();
          $(".stock").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "- 1.00%",
    "- 0.78%",
    "- 0.77%"
  ]
  var id = setInterval(up,5000);
    var chkNum = 0;
      $(".stock_per2").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock2").append("<b class='stock_per2'></b>");
        $(".stock_per2").eq(1).text(mytxt[chkNum]);
        $(".stock2").animate({top:"-="+3},300,function(){
          $(".stock_per2").eq(0).remove();
          $(".stock2").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "+ 0.03%",
    "+ 0.92%",
    "+ 1.01%"
  ]
  var id = setInterval(up,4000);
    var chkNum = 0;
      $(".stock_per3").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock3").append("<b class='stock_per3'></b>");
        $(".stock_per3").eq(1).text(mytxt[chkNum]);
        $(".stock3").animate({top:"-="+3},300,function(){
          $(".stock_per3").eq(0).remove();
          $(".stock3").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "- 0.44%",
    "- 0.25%",
    "- 0.24%"
  ]
  var id = setInterval(up,6000);
    var chkNum = 0;
      $(".stock_per4").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock4").append("<b class='stock_per4'></b>");
        $(".stock_per4").eq(1).text(mytxt[chkNum]);
        $(".stock4").animate({top:"-="+3},300,function(){
          $(".stock_per4").eq(0).remove();
          $(".stock4").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "- 0.58%",
    "- 0.22%",
    "- 0.19%"
  ]
  var id = setInterval(up,3000);
    var chkNum = 0;
      $(".stock_per5").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock5").append("<b class='stock_per5'></b>");
        $(".stock_per5").eq(1).text(mytxt[chkNum]);
        $(".stock5").animate({top:"-="+3},300,function(){
          $(".stock_per5").eq(0).remove();
          $(".stock5").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "- 0.98%",
    "- 0.38%",
    "- 0.51%"
  ]
  var id = setInterval(up,5000);
    var chkNum = 0;
      $(".stock_per6").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock6").append("<b class='stock_per6'></b>");
        $(".stock_per6").eq(1).text(mytxt[chkNum]);
        $(".stock6").animate({top:"-="+3},300,function(){
          $(".stock_per6").eq(0).remove();
          $(".stock6").	css({top:0});
        });
      }
});

$(document).ready(function(){
  var mytxt = [
    "+ 0.42%",
    "+ 2.22%",
    "+ 0.19%"
  ]
  var id = setInterval(up,4000);
    var chkNum = 0;
      $(".stock_per7").eq(0).text(mytxt[chkNum]);

      function up(){
        if(chkNum==mytxt.length-1){
          chkNum=0;
        }else{
        chkNum++;
        }
        $(".stock7").append("<b class='stock_per7'></b>");
        $(".stock_per7").eq(1).text(mytxt[chkNum]);
        $(".stock7").animate({top:"-="+3},300,function(){
          $(".stock_per7").eq(0).remove();
          $(".stock7").	css({top:0});
        });
      }
});
