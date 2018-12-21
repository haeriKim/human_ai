<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--//배너 슬라이더-->
    <title>The Alls</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/fouc.js"></script> -->
</head>
<body>
    <!-- wrap -->
    <div id="wrap">
        <!-- container -->
        <div id="container">

          <div class="see_more">
            <a href="m_exchange_main.php"><img src="img/x_sky.png" alt="둘러보기"></a>
          </div>

          <div class="logo_area">
            <img src="img/logo.png" alt="로고" class="logo">
          </div>

          <div class="login_input_area">
            <input type="text" placeholder="이메일 주소를 입력하세요." class="login_email" maxlength="30" required>
            <input type="password" placeholder="비밀번호를 입력하세요." class="login_password" maxlength="20" required>
          </div>

          <div class="login_bt_area">
            <input type="button" name="login_bt "value="로그인" class="login_bt">
          </div>

          <div class="help_bt">
            <span>비밀번호 찾기</span>
            <span class="bar">|</span>
            <span>신규 회원가입</span>
          </div>

          <p class='wrong_data system_popup'>이메일 혹은 비밀번호가 일치하지 않습니다.</p>
        </div><!-- container End -->
        <!-- nav_wrap -->
        <!-- nav_wrap End-->
    </div><!-- wrap End -->
</body>
</html>
