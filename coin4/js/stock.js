$(document).ready(function(){
  function tick(){
    $("#card_01 li:first").slideUp(function(){$(this).appendTo($("#card_01")).slideDown();
    });
  }
  setInterval(function(){tick ()}, 3000);
});
