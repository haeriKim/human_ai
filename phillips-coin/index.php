<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content=" width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<title>Phillips-coin</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="shortcut icon" href="img/favicon-16.png" type="image/x-icon">
  <link rel="icon" href="img/favicon-16.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicon-32.png" type="image/x-icon">
  <link rel="icon" href="img/favicon-32.png" type="image/x-icon">
  <link rel="stylesheet" href="css/index.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>

<div id="wrap"><!--Wrap-->
  <div id="container"><!--container-->

      <div class="login_content">
        <div class="login_inner">
        <p><img src="img/logo.png" alt="로고" class="logo"></p>

        <div class="login_input">
          <div class="inputArea idArea">
            <img src="img/icon_user.png" alt="아이디 아이콘"/ class="icon"><input type='text' name="user_id" value="" placeholder="아이디" required maxlength="30" minlength="8"  class='user_id' autocomplete="off"/>
          </div>
          <div class="inputArea pwArea">
            <img src="img/icon_pwd.png" alt="패스워드 아이콘"/ class="icon"><input type="password" name="password" value="" placeholder="비밀번호" required maxlength="30" minlength="10" class='user_pass'/>
          </div>

            <div class="login_box">
              <input type="submit" name="login_bt" value="로그인" class="login_bt" onclick="location.href='main.php'">
              <input type="button" name="password_bt" value="비밀번호 찾기" class="password_bt" onclick="location.href='pw_forgot.php'">
              <input type="button" name="join_bt" value="회원가입" class="join_bt" onclick="location.href='signup.php'">

              <p class="copyright">CRYPTOCURRNCY PHILLIPS-COIN SINCE 2018</p>
              <a href="#" class='go_thealls' target="_blank">디올스(The Alls) 거래소 바로가기</a>
            </div>
        </div>

      </div>
      </div>
  </div> <!--container End-->
</div> <!--Wrap End-->


</body>
</html>
