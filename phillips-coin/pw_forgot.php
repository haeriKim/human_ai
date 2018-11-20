<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillips-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/pw_forgot.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <!-- wrap -->
    <div id="wrap">

        <!-- container -->
        <div id="container">
            <!-- content -->

            <!-- nav -->
            <?php include "nav.php";?>
            <!-- nav End-->

            <!-- header -->
            <?php include "header.php";?>
            <!-- header End-->

            <div class="content findPw_content">
                <h3 class='title'>비밀번호 찾기</h3>
                <div class="line"></div>
                <form class="find_pw_form" action="#" method="post">
                    <input type="text" name="id" placeholder="회원아이디" autocomplete="off" class='id user_id'>
                    <select class="country_select" name="국가">
                        <option value="국가" disabled selected="selected">국가</option>
                        <option value="대한민국">대한민국</option>
                        <option value="중국">중국</option>
                        <option value="일본">일본</option>
                    </select>
                    <div class="phone_wrap">
                        <input type="text" name="phone" placeholder="휴대폰번호" autocomplete="off" class='phone user_phone'>
                        <input type="button" name="code_send" value="인증받기" class='code_send'>
                    </div>
                    <input type="text" name="code" placeholder="인증번호" autocomplete="off" class='code'>
                    <input type="email" name="email" placeholder="이메일주소" autocomplete="off" class='email user_mail'>
                    <input type="submit" name="submit" value="비밀번호 찾기" class='find_pw_btn'>
                </form>
                <p class="copyright">CRYPTOCURRNCY PHILLIPS-COIN SINCE 2018</p>
                <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div><!-- content End-->

        </div><!-- container End -->
    </div><!-- wrap End -->

    <div id="full">
                <!-- full_content -->
                <div id="popupbox" class='box popup'>
                  <div class="full_inner">
                    <h2>인증번호 전송</h2>
                    <div class="popupbox_text">
                      <p>등록하신 휴대폰으로 인증번호를 발송하였습니다.</p>
                    </div>
                    <div class="ok_btn">
                      <input type="button" name="" value="확인" class="ok">
                    </div>

                  </div>
                </div><!-- full_content End-->
                <div id="shadow"></div>
    </div>
</body>
</html>
