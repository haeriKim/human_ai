//회원탈퇴 뒤로가기했을때 마이페이지 메인으로 가기
history.pushState(null, null, location.href);
    window.onpopstate = function(){
        history.go(1);
    }
