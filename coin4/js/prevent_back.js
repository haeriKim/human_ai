//회원탈퇴 뒤로가기 막기
history.pushState(null, null, location.href);
    window.onpopstate = function(){
        history.go(1);
    }
