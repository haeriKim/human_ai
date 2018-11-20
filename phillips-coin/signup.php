<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Phillips-coin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
    <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
<div id="wrap">

  <!-- 컨테이너 -->
  <div id="container">

    <!-- nav -->
    <?php include "nav.php";?>
    <!-- nav End-->

    <!-- header -->
    <?php include "header.php";?>
    <!-- header End-->

    <div class="content join_content">
      <h3 class='title'>회원가입</h3>
      <div class="line"></div>
      <div class="join_box">
        <div class="join_inner">
          <form class="" action="#" method="post">
          <input type='text' name="user_id" value="" placeholder="회원아이디" required maxlength="15" minlength="8"  class='user_id' autocomplete="off"/>
          <input type="password" name="password" value="" placeholder="비밀번호" required maxlength="30" minlength="10" class='user_pass'/>
          <input type="password" name="passowrd_again" value="" placeholder="비밀번호 확인" required maxlength="30" minlength="10" class='user_passChk'/>
          <select name="country" id="country" class="country_select">
            <option value="국가">국가</option>
            <option value="대한민국">대한민국</option>
            <option value="일본">일본</option>
            <option value="중국">중국</option>
          </select>
          <div class="phone_wrap">
              <input type="text" name="phone" placeholder="휴대폰번호" autocomplete="off" class='phone user_phone'>
              <input type="button" name="code_send" value="인증받기" class='request_number_bt'>
          </div>
          <input type="text" name="sms_number" placeholder="인증번호" required maxlength="6" minlength="6" class='request_number'/>
          <input type="email" name="user_email" value="" placeholder="이메일" required maxlength="30" minlength="8"  class='user_email' autocomplete="off"/>


          <div class="join_span">
            <span>
              회원가입에 필요한 최소한의 정보만 입력 받음으로써 개인정보수집을 최소화하고 편리한 회원가입을 제공합니다.
            </span>
          </div>

          <div class="join_text">
            <input type="submit" name="join_bt" value="회원가입">
            <p class="copyright">CRYPTOCURRNCY PILIPS COIN SINCE 2018</p>
            <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
          </div>
        </form>
        </div>
      </div>

    </div><!-- content End -->
  </div><!-- container End -->
</div><!--wrap End-->

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
