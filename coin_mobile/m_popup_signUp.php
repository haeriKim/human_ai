<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/fouc.js"></script> -->
</head>
<body>
    <div id="full" class='email_certification_popup'>
            <!-- full_content -->
            <div id="full_content" class='box popup email_pop'>
                <div class="full_inner">
                    <h2>이메일 인증</h2>
                    <div class="popupbox_text">
                      <p class='send_mail_text'>
                          인증코드가 담긴 이메일을 고객님의 이메일 주소로 발송했습니다.<br>
                          발송된 이메일에 포함된 인증코드를 아래 칸에 입력해주세요.
                      </p>
                      <form action="#" method="post">
                       <p class="user_mail readonly">abc@naver.com</p>
                       <input type="text" class="code" placeholder="인증코드를 입력하세요." required/>
                       <p class='wrong_info'><img src="img/icon_ex.png" alt="경고아이콘" class="warning_icon">인증코드가 일치하지 않습니다.</p>
                       <!-- <span>인증코드가 일치하지 않습니다.</saan> -->
                       <div class="re_send">
                         <p>
                           인증코드가 발송되지 않았거나 인증코드가<br />
                           만료된 경우에는 재전송 버튼을 눌러주세요.
                         </p>
                         <input type="button" class="re_sendBtn" value="인증코드 재전송" onclick="alert('인증코드가 재전송되었습니다!')"/>
                       </div>
                      </form>
                    </div>
                    <div class="btn_area">
                      <input type="button" name="" value="닫기" class="popupbt nextok">
                      <input type="submit" name="" value="이메일인증" class="popupbt ok" onclick="location.href='signUp_compelete.php'">
                    </div>
                </div>
            </div><!-- full_content End-->
            <div id="shadow"></div>
    </div>  <!-- full End-->
</body>
</html>
